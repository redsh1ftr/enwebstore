@extends('layouts.cart')

@section('header')
 
<meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">
 
@stop

@section('content')














{{Form::open(array('route' => 'shopper.store', 'method' => 'post'))}}
<div class="row" style="color:#ffffff">
	
{{--SHIPPING--}}

<hr>
	Shipping Information
	<hr>
	
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">First Name*</label>
		{{Form::text('ship_f_name', '', array('placeholder' => 'First Name'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Last Name*</label>
		{{Form::text('ship_l_name', '', array('placeholder' => 'Last Name'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address*</label>
		{{Form::text('ship_address1', '', array('placeholder' => 'Address 1'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address 2</label>
		{{Form::text('ship_address2', '', array('placeholder' => 'Address 2'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">City*</label>
		{{Form::text('ship_city', '', array('placeholder' => 'City'))}}
	</div>

	<div class="small-12 large-3 columns" style="color:#000000">
		<label style="color:#ffffff">State*</label>
		<?php $states = DB::table('usstates')->lists('name');?>
		{{Form::select('ship_state', array($states))}}
	</div>

	<div class="small-12 large-3 columns">
		<label style="color:#ffffff">Zip*</label>
		{{Form::text('ship_zip', '', array('placeholder' => 'Zip'))}}
	</div>
<hr>
{{--BILLING--}}
	
	Billing Information <hr>	{{Form::checkbox('shiptobillto', 1)}}
	<label style="color:#ffffff">Same as Shipping Address</label>
	
	<div class="small-12 large-12 columns">
	
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">First Name*</label>
		{{Form::text('bill_f_name', '', array('placeholder' => 'First Name'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Last Name*</label>
		{{Form::text('bill_l_name', '', array('placeholder' => 'Last Name'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address*</label>
		{{Form::text('bill_address1', '', array('placeholder' => 'Address 1'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address 2</label>
		{{Form::text('bill_address2', '', array('placeholder' => 'Address 2'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">City*</label>
		{{Form::text('bill_city', '', array('placeholder' => 'City'))}}
	</div>

	<div class="small-12 large-3 columns" style="color:#000000">
		<label style="color:#ffffff">State*</label>
		{{Form::select('bill_state', array($states))}}
	</div>

	<div class="small-12 large-3 columns">
		<label style="color:#ffffff">Zip*</label>
		{{Form::text('bill_zip', '', array('placeholder' => 'Zip'))}}
	</div>

<hr>
{{--ACCOUNT--}}
	
	User Account <i>Optional</i><hr>	
	

	<div class="small-12 large-12 columns">
		<label style="color:#ffffff">Pick a Username <i style="font-size:10px">8 character minimum</i></label>
		{{Form::text('username', '', array('placeholder' => 'Username'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Choose a password <i style="font-size:10px">8 character minimum</i></label>
		{{Form::password('password', '', array('placeholder' => 'Password'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Re-type Password <i style="font-size:10px">8 character minimum</i></label>
		{{Form::password('password2', '', array('placeholder' => 'Password'))}}
	</div>


	<div class="small-12 large-12 columns">
				<button type="submit" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-play-circle"></i> Continue to Checkout </button>
	</div>

	{{Form::close()}}



@stop

@section('footer')
 
<script src="{{public_path()}}/js/billing.js"></script>
 
@stop