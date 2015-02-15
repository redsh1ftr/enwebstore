@extends('layouts.master')

@section('content')


@foreach(Producer::all() as $product)
<div style="max-height:400px;max-width:400px;border:1px #ffffff solid;">

Add image to {{$product->name}} <img src="//localhost/enwebstore/public/thumbs/products/{{$product->name}}.jpg"><br>
	{{Form::open(array('route' => 'newImage', 'method' => 'post', 'files' => 'true'))}}
		<div class="row">
			{{Form::hidden('product_id', $product->id)}}

				{{Form::file('image')}}
	


			<div class="small-12 columns">
				<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> New Image </button>
			</div>

		</div>
		{{Form::close()}}
</div>
@endforeach

@stop



