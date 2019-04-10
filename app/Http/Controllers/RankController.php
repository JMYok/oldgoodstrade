<?php

namespace App\Http\Controllers;

use App\Models\Product;

class RankController extends Controller
{

    public function sale()
    {
    	$salerank = Product::where('on_sale', true)->where('sold_count','!=',0)->orderBy('sold_count','desc')->take(10)->get();

    	return view('ranklist.ranksale',['saleranks'=>$salerank]);
    }

    public function point(){
    	$pointrank = Product::where('on_sale', true)->where('rating','!=',0)->orderBy('rating','desc')->take(10)->get();
    	return view('ranklist.rankpoint',['pointranks'=>$pointrank]);
    }
}
