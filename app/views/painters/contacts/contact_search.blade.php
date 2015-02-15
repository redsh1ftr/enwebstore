<div class="row">
	<div class="large-12 columns" style="color:#000000">
			
			{{Form::open(array('route' => 'contactSearch', 'method' => 'post'))}}
			<label>Search by</label>
			<select name="type"> 
				<option value="f_name">First Name</option>
				<option value="nickname">Alias</option>
				<option value="l_name">Last Name</option>
				<option value="phone">Phone</option>

			</select>

			{{Form::text('search')}}
			<button  class="fi-magnifying-glass" type="submit" style="color:#700000;background-color:#000000;font-size:30px"></button>
			{{Form::close()}}
	</div>


</div>
