@extends('layouts.cart')
 
@section('header')
 
 
@stop
 
 
 
@section('content')
 
@foreach(range(1, 10) as $r)
	
	{{Form::open(array('route' => 'PayMent', 'method' => 'post'))}}
	{{Form::hidden('data-description', "$r"."000")}}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_W6oEoaW2cMMfY48MU483R4ia"
    data-amount="{{$r}}000"
    data-name="Demo Site"
    data-description= "{{$r}}0.00"
    data-image="/128x128.png">
  </script>
  	{{Form::close()}}

 @endforeach
@stop