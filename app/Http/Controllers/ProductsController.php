<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Exceptions\InvalidRequestException;
use App\Services\CategoryService;
// use File;

class ProductsController extends Controller
{
    // 创建一个查询构造器
    private $builder;

    //查询后所有分页数据
    private $products;

    public function __construct()
    {
      $this->builder = Product::query()->where('on_sale', true);
    }

    /* 主页各父类目商品 */
    public function index()
    {
        $data = $this->builder->get();
        $res = $data->mapToGroups(function($item,$key){
          //是否为祖先类
          if(is_null($item->category->parent_id))
          return [$item->category->name => $item];  //祖先类目姓名 =>父类目下的商品
          else{
            $ancestors = $item->category->ancestors;
            $ancestor = $ancestors[0]->name;
            return [$ancestor => $item];
          }
        });

        //只取每个类目最近的前8条
        $res->each(function($item,$key){
          if(is_null($this->products)) $this->products = collect([$key => $item->sortByDesc('updated_at')->take(8)]);
           else $this->products->put($key,$item->sortByDesc('updated_at')->take(8));
        });

        $keys = $this->products->keys();

        return view('products.home', [
            'products' => $this->products,
            'keys'     => $keys,
        ]);
    }

    /* 搜索 */
    public function search(Request $request,CategoryService $categoryService)
    {
      /*实现筛选和排序*/

        // 判断是否有提交 search 参数，如果有就赋值给 $search 变量
        // search 参数用来模糊搜索商品
        if ($search = $request->input('search', '')) {
            $like = '%'.$search.'%';
            // 模糊搜索商品标题、商品详情、SKU 标题、SKU描述
            $this->builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like);
                    });
            });
        }

        // 如果有传入 category_id 字段，并且在数据库中有对应的类目
       if ($request->input('category_id') && $category = Category::find($request->input('category_id'))) {
           // 如果这是一个父类目
           if ($category->is_directory) {
               // 则筛选出该父类目下所有子类目的商品
               $this->builder->whereHas('category', function ($query) use ($category) {
                   $query->where('path', 'like', $category->path.$category->id.'-%');
               });
           } else {
               // 如果这不是一个父类目，则直接筛选此类目下的商品
               $this->builder->where('category_id', $category->id);
           }
       }

        // 是否有提交 order 参数，如果有就赋值给 $order 变量
        // order 参数用来控制商品的排序规则
        if ($order = $request->input('order', '')) {
            // 是否是以 _asc 或者 _desc 结尾
            if (preg_match('/^(.+)_(asc|desc)$/', $order, $m)) {
                // 如果字符串的开头是这 3 个字符串之一，说明是一个合法的排序值
                if (in_array($m[1], ['price', 'sold_count', 'rating'])) {
                    // 根据传入的排序值来构造排序参数
                    $this->builder->orderBy($m[1], $m[2]);
                }
            }
        }

        //是否有每页个数参数
        if($limit = $request->input('limit','12')){
            $this->products = $this->builder->paginate($limit);
        }

        return view('products.search', [
            'products' => $this->products,
            'filters'  => [
                'search' => $search,
                'order'  => $order,
                'limit'  => $limit
            ],
            // 等价于 isset($category) ? $category : null
            'category' => $category ?? null,
        ]);

    }


    /*商品详情页*/
    public function show(Product $product, Request $request)
    {
        // 判断商品是否已经上架，如果没有上架则抛出异常。
        if (!$product->on_sale) {
            throw new InvalidRequestException('商品未上架');
        }
        $favored = false;
        // 用户未登录时返回的是 null，已登录时返回的是对应的用户对象
        if($user = $request->user()) {
            // 从当前用户已收藏的商品中搜索 id 为当前商品 id 的商品
            // boolval() 函数用于把值转为布尔值
            $favored = boolval($user->favoriteProducts()->find($product->id));
        }

        $reviews = OrderItem::query()
            ->with(['order.user', 'productSku']) // 预先加载关联关系
            ->where('product_id', $product->id)
            ->whereNotNull('reviewed_at') // 筛选出已评价的
            ->orderBy('reviewed_at', 'desc') // 按评价时间倒序
            ->limit(10) // 取出 10 条
            ->get();

        return view('products.product_info', [
            'product' => $product,
            'favored' => $favored,
            'reviews' => $reviews
        ]);
    }

    /*收藏*/
    public function favor(Product $product, Request $request)
    {
        $user = $request->user();
        if ($user->favoriteProducts()->find($product->id)) {
            return [];
        }

        $user->favoriteProducts()->attach($product);

        return [];
    }

    /*取消收藏*/
    public function disfavor(Product $product, Request $request)
    {
        $user = $request->user();
        $user->favoriteProducts()->detach($product);

        return [];
    }

    /*收藏商品列表*/
    public function favorites(Request $request)
    {
        $products = $request->user()->favoriteProducts()->paginate(16);
        return view('products.favorites', ['products' => $products]);
    }

}
