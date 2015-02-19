@extends('layouts.cart')
 
@section('header')
 
<meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">
 
@stop
 
 
 
@section('content')
 
<h1>Buy Pizza for $9.99</h1>
 
 
 
{{ Form::open(['id' => 'billing-form']) }}
 
<div class="alert alert-danger" style="display:none"></div>
 
<div class="form-group col-md-12">
 
{{ Form::label('card', 'Card Number') }}
 
{{-- Do not declare a name. We don't want our servers touching this info. --}}
 
<input class="form-control" type="text" data-stripe="number">
 
</div>
 
 
 
 
 
<div class="form-group col-sm-4 col-md-4">
 
{{ Form::label('cvc', 'CVC (Security Code)') }}
 
{{-- Do not declare a name. We don't want our servers touching this info. --}}
 
<input class="form-control" type="text" data-stripe="cvc">
 
</div>
 
 
 
<div class="form-group col-sm-8 col-md-8">
 
{{ Form::label('exp', 'Expiration Date') }}
 
{{-- Do not declare a name. We don't want our servers touching this info. --}}
 
{{ Form::selectMonth(null, '', array('class' => 'form-control', 'data-stripe' => 'exp-month')) }}
 
{{ Form::selectYear(null, date('Y'), date('Y') + 10, null, array('class' => 'form-control', 'data-stripe' => 'exp-year')) }}
 
</div>
 
 
 
<div class="form-group col-md-12">
 
{{ Form::label('email', 'Email') }}
 
<input class="form-control" type="email" id="email" name="email">
 
</div>
 
 
 
<div class="form-group col-md-12">
 
{{ Form::label('full_name', 'Full Name') }}
 
<input class="form-control" type="text" id="full_name" name="full_name">
 
</div>
 
 
 
 
 
<div class="form-group col-md-12">
 
{{ Form::submit('Buy Now', array('class' => 'btn-primary', 'type' => 'submit')) }}
 
</div>
 
 
 
 
 
{{ Form::close() }}
 
 
 
@stop
 
 
 
@section('footer')
 
<script src="{{public_path()}}/js/billing.js"></script>
 
@stop