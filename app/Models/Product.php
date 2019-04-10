<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
                    'title','long_title','description', 'image', 'on_sale', 
                    'rating', 'sold_count', 'review_count', 'price'
    ];
    protected $casts = [//在数据表中提取出的值为0、1，所以进行转换
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    // 与商品SKU表关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    //与商品属性表管理
     public function properties()
    {
        return $this->hasMany(ProductProperty::class);
    }

    //与种类表关联
     public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //返回绝对路径
     public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }

     public function getGroupedPropertiesAttribute()
    {
        return $this->properties
            // 按照属性名聚合，返回的集合的 key 是属性名，value 是包含该属性名的所有属性集合
            ->groupBy('name')
            ->map(function ($properties) {
                // 使用 map 方法将属性集合变为属性值集合
                return $properties->pluck('value')->all();
            });
    }
}
