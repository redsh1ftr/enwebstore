<div class="row">
	<div class="large-12 columns" style="color:#000000">
			
			{{Form::open(array('route' => 'venueSearch', 'method' => 'post'))}}
			<label>Search by</label>
			<select name="selector"> 
				<option value="name">Name</option>
			</select>

			{{Form::text('needle')}}

			{{Form::submit()}}
			<button type="submit" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-magnifying-glass"></i></button>
			{{Form::close()}}
	</div>


</div>
