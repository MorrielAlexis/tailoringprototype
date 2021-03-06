@extends('layouts.master')

@section('content')

	<div class="section">	

		<div id="suitheader" style="height:500px; margin-top: -15px;">
	  		<div style="height:70px"></div>
	  		<center><h1 style="color:white; font-family:'Playfair Display','Times';">Custom tailored suits</h1></center>
	  		<center><a style="margin-top:45px; padding-top:15px; padding-left:5px; padding-right:5px; width:250px; height:70px; background:rgb(236, 59, 65);" class="white-text modal-trigger waves-effect waves-light btn btn-small center-text" href="{{URL::to('/customizeorder')}}"><font size="+1">CUSTOMIZE YOURS NOW!</font></a></center>
		</div>

		<div style= "height:20px;"></div>

		<div class="section white container" style="width:95%;">

			<div class="row">

				<div class="col s4 center" style="padding:30px;">
		            <img class = "responsive-img" src="imgSuit/suit2.jpg">
	            	<div><a class="red darken-1 container" href="{{URL::to('/ordernow')}}" style="border:1px solid white; padding:10px;"><font color= "white">ADD TO CART </font><i style="font-size:17px;" class="white-text mdi-action-shopping-cart"></i></a></div>
				</div>

				<div class="col s4 center" style="padding:30px;">
		            <img class = "responsive-img" src="imgSuit/suit4.jpg">
	            	<div><a class="red darken-1 container" href="{{URL::to('/ordernow')}}" style="border:1px solid white; padding:10px;"><font color= "white">ADD TO CART </font><i style="font-size:17px;" class="white-text mdi-action-shopping-cart"></i></a></div>
				</div>

				<div class="col s4 center" style="padding:30px;">
		            <img class = "responsive-img" src="imgSuit/suit5.jpg">
	            	<div><a class="red darken-1 container" href="{{URL::to('/ordernow')}}" style="border:1px solid white; padding:10px;"><font color= "white">ADD TO CART </font><i style="font-size:17px;" class="white-text mdi-action-shopping-cart"></i></a></div>
				</div>

			</div>

			<div class="divider container" style="margin-bottom:20px;"></div>

		<div class="section white container" style="width:95%; padding-left:20px; padding-right:20px;">

			<div class="row">
				<div class="col s6 center">
					<img class="responsive-img" src="img/suity.jpg">
				</div>
				<div class="col s6" style="padding:20px;">
					<h4 style="font-family:'Playfair Display','Times';">Fine custom mens suits - expert tailoring</h4>
					<h6>Trust us to tailor your new suit. Our experienced tailors will stop at nothing to give you:</h6>
					<ul>
						<li>A perfect fit - always a made-to-measure with fit guarantee</li>
						<li>Highest quality fabrics, materials & craftmanship</li>
						<li>Finely tailored suits with an individual touch - made for you.</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col s6" style="padding:20px;">
					<h4 style="font-family:'Playfair Display','Times';">Custom made - to your measurements</h4>
					<p>With our unique suit customizer, you can easily create a suit that perfectly matches your personality.</p>
					<p>Tailored to your individual measurements, we dare to guarantee a perfect fit - every time.</p>
				</div>
				<div class="col s6 center">
					<img class="responsive-img" src="img/suitmehe.jpg">
				</div>
			</div>

		</div>
	</div>

    @stop

@section('scripts')	 
    <script>
   	$(document).ready(function(){

    });
   	</script>
@stop   
