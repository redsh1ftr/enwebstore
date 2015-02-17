{{$producer->name}} - ${{$producer->price}}



<hr>
<div class="row">
	<div class="small-12 large-6 columns">
	
		<ul class="example-orbit" style="color:#ffffff;min-height:350px;max-width:300px" data-orbit >
		  <li>
		  	

	<a href="#" data-reveal-id="image_popout_main" >	
		<img src="http://www.eternallynocturnal.com/store/public/images/products/{{$producer->name}}.jpg" style="max-height:400px" />
	</a>
		  </li>
	
		 @foreach(Imager::where('product_id', $producer->id)->get() as $imgs)
		 	
		 		 		  <li>
		 		 		  	<a href="#" data-reveal-id="image_popout_{{$imgs->id}}" >
		 		 		    <img src="http://www.eternallynocturnal.com/store/public/images/products/{{$imgs->name}}" style="max-height:400px" alt="{{$imgs->name}}" />
		 		 		    </a> 
		 		 			
		 		 
		 		 		  </li> 

		 		
		 		 		 
	      @endforeach



		  </ul>
		
		</div>
	<div class="small-12 large-6 columns" style="color:#ffffff">
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="{{$producer->paypal}}">
<input type="hidden" name="on0" value="Sizes:"><div class="blackouttext">


@if($producer->onesize == 1)<div style="color:#ffffff;">One Size Only</diV>
			@else
		<select name="os0" style="max-width:50%">
			

			@if($producer->xsmall == 1)
			<option value="XSmall">X-Small</option>
			@endif

			@if($producer->small == 1)
			<option value="Small">Small</option>
			@endif

			@if($producer->medium == "1")
			<option value="Medium">Medium</option>
			@endif

			@if($producer->large == "1")
			<option value="Large">Large</option>
			@endif

			@if($producer->xlarge == "1")
			<option value="X-Large">X-Large</option>
			@endif

			@if($producer->xxlarge == "1")
			<option value="XX-Large">XX-Large</option>
			@endif

			@if($producer->xxxlarge == "1")
			<option value="XXX-Large">XXX-Large</option>
			@endif


		</select>
		@endif
		<input type="hidden" name="currency_code" value="USD">
			<button type="submit" value="Add to Cart" name="submit" style="background-color:transparent;color:#ffffff;"><i class="fi-shopping-cart" ></i>
			</button>
		<br>
		 <div style="color:#ffffff">{{$producer->description}}</div>
	</div>
</form>


</div></div>






{{--MODAL CODE--}}


@foreach(Imager::where('product_id', $producer->id)->get() as $imgs)


 <div id="image_popout_{{$imgs->id}}" class="reveal-modal" style="max-width:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 
		 		 
		 		 	                              <img src="http://www.eternallynocturnal.com/store/public/images/products/{{$imgs->name}}" style="max-height:700px" />
		 		 	                              <div style="color:#ffffff">{{$producer->description}}</div>
		 		 	        
		 		 
		 		 	        <a href="#" class="close-reveal-modal" data-reveal-id="showProduct_{{$producer->id}}" style="color:#700000;background-color:#000000;font-size:30px">
		 		 			 &#215;
		 		 		</a>

		 		 	      </div>
@endforeach



		<div id="image_popout_main" class="reveal-modal" style="max-width:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

	                              <img src="http://www.eternallynocturnal.com/store/public/images/products/{{$producer->name}}.jpg" style="max-height:700px" />
	                              <div style="color:#ffffff">{{$producer->description}}</div>
	        

	        <a href="#" class="close-reveal-modal" data-reveal-id="showProduct_{{$producer->id}}" style="color:#700000;background-color:#000000;font-size:30px">
			 &#215;
			</a>


	    </div>



	{{--END MODAL CODE--}}
