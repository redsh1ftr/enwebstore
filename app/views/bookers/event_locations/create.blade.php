
{{Form::open(array('route' => 'event_locations.store', 'method' => 'post', 'files' => 'true'))}}

<div class="row">
	<div class="large-12 columns">
		{{Form::text('name', '', array('placeholder' => 'Venue Name'))}}
	</div>

	<div class="large-9 columns">
		<select name="contact_id" style="color:#700000;background-color:#000000;">
			<option value="">Select a contact.</option>
			@foreach(Contact::all() as $contact)
				<option value="{{$contact->id}}">{{$contact->f_name}} "{{$contact->nickname}}" {{$contact->l_name}}</option>
			@endforeach
		</select>
	</div>	


		<div class="large-3 columns" style="color:#700000;font-size:30px">
		<a href="#" data-reveal-id="newContact" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i><i class="fi-torsos-all"></i></a>
	</div>

	<div class="large-6 columns">
		{{Form::text('street_1', '', array('placeholder' => 'Address'))}}
	</div>

	<div class="large-6 columns">
		{{Form::text('street_2', '', array('placeholder' => 'Address 2'))}}
	</div>

	<div class="small-4 columns">
		{{Form::text('city', '', array('placeholder' => 'City'))}}
	</div>

	<div class="small-4 columns">
		{{Form::text('state', 'MI', array('placeholder' => 'State'))}}
	</div>

	<div class="small-4 columns">
		{{Form::text('zip', '', array('placeholder' => 'Zip'))}}
	</div>

	<div class="large-6 columns">
		<i class="fi-mail" style="color:#700000;font-size:30px"></i>{{Form::text('email', '', array('placeholder' => 'Venue Email'))}}
	</div>

	<div class="large-6 columns">
		<i class="fi-telephone" style="color:#700000;font-size:30px"></i>{{Form::text('phone', '', array('placeholder' => 'Venue Phone'))}}
	</div>

	<div class="large-6 columns">
		<i class="fi-trash" style="color:#700000;font-size:30px"></i>{{Form::text('fax', '', array('placeholder' => 'Venue Fax'))}}
	</div>

	<div class="large-6 columns">
		<i class="fi-social-facebook" style="color:#700000;font-size:30px"></i>{{Form::text('facebook', '', array('placeholder' => 'Paste Facebook Link Here'))}}
	</div>

	<div class="large-6 columns">
		<i class="fi-social-twitter" style="color:#700000;font-size:30px"></i>{{Form::text('twitter', '', array('placeholder' => 'Paste Twitter Link Here'))}}
	</div>

	<div class="large-6 columns">
		<i class="fi-social-instagram" style="color:#700000;font-size:30px"></i>{{Form::text('instagram', '', array('placeholder' => 'Paste Instagram Link Here'))}}
	</div>

	<div class="large-6 columns">
		<i class="fi-link" style="color:#700000;font-size:30px"></i>{{Form::text('website', '', array('placeholder' => 'Paste Website Link Here'))}}
	</div>




	<div class="small-6 columns">
		<label>Main Image</label>
		{{Form::file('image_1')}}
		<label>Image 2</label>
		{{Form::file('image_2')}}
		<label>Image 3</label>
		{{Form::file('image_3')}}
	</div>	
	

		
		
	<div class="small-12 columns">
		<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> New Venue </button>
	</div>
	</div>
