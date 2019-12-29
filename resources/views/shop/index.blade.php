@extends('layouts.master')

@section('title','Laravel shopping Cart')

@section('content')
<div class="row">
  @foreach($products as $product)
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="..." alt="...">
          <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>...</p>
            <div class="clearfix">
            	<a href="{{url('add-to-cart/'.$product->id)}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
  @endforeach
</div>
@endsection