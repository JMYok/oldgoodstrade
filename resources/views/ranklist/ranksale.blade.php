@extends('layouts.app')
@section('title', '销量排行')

@section('content')
<div class="container">
    <div class="row">
		<div class="well">
      <h1 class="text-center">Sales Top 10</h1>
      <div class="list-group" style="width:90% !important; margin:auto !important;">
      @foreach($saleranks as $product)
        <a class="list-group-item" href="{{route('products.show',['product' => $product->id])}}">
               <div class="media col-md-3">
                   <figure class="pull-left">
                       <img class="media-object img-rounded img-responsive" src="{{ $product->image_url }}" alt="" >
                   </figure>
               </div>
               <div class="col-md-6">
                   <h4 class="list-group-item-heading">{{$product->title}}</h4>
                   <p class="list-group-item-text">{{$product->description}}</p>
               </div>
               <div class="col-md-3 text-center">
                   <h2> {{$product->sold_count}} <small> sales </small></h2>
                   <button type="button" class="btn btn-primary btn-lg btn-block">
                       Buy Now!
                   </button>
               </div>
          </a>
        @endforeach
        </div>
    </div>
</div>
</div>
@stop
