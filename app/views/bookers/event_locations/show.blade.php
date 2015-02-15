@extends('layouts.master')

@section('right_menu')

{{View::make('layouts.admin_menu')}}

@stop


@section('content')

{{View::make('event_locations.venuemanager')}}


@foreach($eventlocation as $venues)




  <div id="findVenue" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 
          {{--CONTENT HERE--}}

                                  {{View::make('event_locations.venue_search')}}
                                  
          {{--END CONTENT--}}

      <a class="close-reveal-modal">&#215;</a>


      </div>



      <div id="editVenue_{{$venues->id}}" class="reveal-modal" style="max-width:80%;height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                              {{View::make('event_locations.edit')->with('venue', $venues)}}

        <a class="close-reveal-modal">&#215;</a>


      </div>


      @endforeach

@stop