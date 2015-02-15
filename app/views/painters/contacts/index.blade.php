@extends('layouts.master')

@section('right_menu')

{{View::make('layouts.admin_menu')}}

@stop



@section('content')


<div class="row">



{{View::make('contacts.contact_manager')}}


</div>

<div class="row">

{{View::make('contacts.show')->with('contacts', $contacts)}}

</div>
@stop