<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CouponCode;
use Carbon\Carbon;
use App\Exceptions\CouponCodeUnavailableException;

class CouponCodesController extends Controller
{
  public function show($code,Request $request)
  {
    if (!$record = CouponCode::where('code', $code)->first()) {
          throw new CouponCodeUnavailableException('优惠券不存在');
      }
      $record->checkAvailable($request->user());

      return $record;
  }

  //所有可用优惠券
  public function index(){
    //获取当前时间
    $time = Carbon::now();
    $data = CouponCode::where('enabled',1)
                      ->whereColumn('used','<','total')
                      ->whereDate('not_before','<=',$time)
                      ->whereDate('not_after','>=',$time)->get();
    return view('pages.coupons',['coupons'=> $data]);
  }
}
