@extends('layouts.master')












@section('content')


@foreach(Producer::get() as $product)



{{--MODAL CODE HERE--}}

	

	{{--NEW PRODUCT CATEGORY--}}

		<div id="showProduct_{{$product->id}}" class="reveal-modal" style="max-width:80%;min-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

	                              {{View::make('producers.show')->with('producer', $product)}}

	        <a class="close-reveal-modal">&#215;</a>


	      </div>

	{{--END NEW PRODUCT CATEGORY--}}


{{--END MODAL CODE--}}



		<a href="#" data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">{{$product->name}}</a>

	

@endforeach



@stop

