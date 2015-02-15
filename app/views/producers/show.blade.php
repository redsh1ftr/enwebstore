

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="{{$producer->paypal}}">
<input type="hidden" name="on0" value="Sizes:"><div class="blackouttext">


<div class="row">

  <div class="small-8 large-12 columns">
		<select name="os0" style="max-width:370px">
			<option value="Small">Small</option>
			<option value="Medium">Medium</option>
			<option value="Large">Large</option>			
		</select>
		<input type="hidden" name="currency_code" value="USD">
			<button type="submit" value="Add to Cart" name="submit" style="background-color:transparent;color:#ffffff;"><i class="fi-shopping-cart" ></i>
			</button>
  </div>



</div>
<hr>
<div class="row">
	<div class="small-block-grid-1 large-6 columns">
	
		<ul class="example-orbit" style="color:#ffffff;min-height:500px;" data-orbit >
		  <li>
		    <img src="//localhost/enwebstore/public/images/products/{{$producer->name}}.jpg" style="height:500px" alt="slide 1" />
	
		  </li>
			<li class="active">
		    <img src="//localhost/enwebstore/public/images/products/{{$producer->name}}.jpg" alt="slide 2" />
		    <div class="orbit-caption">
		      Caption Two.
		    </div>
		  </li>
		  <li>
		    <img src="//localhost/enwebstore/public/images/products/{{$producer->name}}.jpg" alt="slide 3" />
		    <div class="orbit-caption">
		      Caption Three.
		    </div>
		  </li> 
		  </ul>
		
		</div>
	<div class="small-12 large-6 columns" style="color:#ffffff">
		 {{$producer->name}}{{$producer->description}}
	</div>

</div></div>
