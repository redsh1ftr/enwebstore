@extends('layouts.master')












@section('content')


@foreach($producers as $product)



{{--MODAL CODE HERE--}}

	

	{{--NEW PRODUCT CATEGORY--}}

		<div id="showProduct_{{$product->id}}" class="reveal-modal" style="max-width:80%;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

	                              {{View::make('producers.show')->with('producer', $product)}}

	        <a class="close-reveal-modal">&#215;</a>


	      </div>

	{{--END NEW PRODUCT CATEGORY--}}


{{--END MODAL CODE--}}


	<ul class="large-block-grid-3"
		<li><a href="#" data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">
			  <img src="//localhost/enwebstore/public/images/products/{{$product->name}}.jpg" style="max-height:700px" />
		</a></li>
	</ul>

	

@endforeach



@stop

