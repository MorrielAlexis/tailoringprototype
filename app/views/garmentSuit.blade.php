@extends('layouts.master')

@section('content')

	<div class="section">	

		<div id="suitheader" style="height:500px; margin-top: -15px;">
	  		<div style="height:70px"></div>
	  		<center><h1 style="color:white; font-family:'Playfair Display','Times';">Custom tailored suits</h1></center>
	  		<center><button style="margin-top:45px; padding-left:5px; padding-right:5px; width:250px; height:70px; background:rgb(236, 59, 65);" class="white-text modal-trigger waves-effect waves-light btn btn-small center-text" href="#"><font size="+1">CUSTOMIZE YOURS NOW!</font></button></center>
		</div>

		<div style= "height:20px;"></div>

		<div class="section white container" style="width:95%;">

			<div class="row">

				<div class="col s4 center" style="padding:30px;">
		            <img class = "responsive-img" src="imgSuit/suit2.jpg">
	            	<button class="red darken-1 container" href="#!" style="border:1px solid white; padding:10px;"><font color= "white">ADD TO CART </font><i style="font-size:17px;" class="white-text mdi-action-shopping-cart"></i></button>
				</div>

				<div class="col s4 center" style="padding:30px;">
		            <img class = "responsive-img" src="imgSuit/suit4.jpg">
	            	<button class="red darken-1 container" href="#!" style="border:1px solid white; padding:10px;"><font color= "white">ADD TO CART </font><i style="font-size:17px;" class="white-text mdi-action-shopping-cart"></i></button>
				</div>

				<div class="col s4 center" style="padding:30px;">
		            <img class = "responsive-img" src="imgSuit/suit5.jpg">
	            	<button class="red darken-1 container" href="#!" style="border:1px solid white; padding:10px;"><font color= "white">ADD TO CART </font><i style="font-size:17px;" class="white-text mdi-action-shopping-cart"></i></button>
				</div>

			</div>

			<div class="divider container"></div>

			<div>
				<img style="width:100%" class="responsive-img" src="img/suitmehe.jpg">
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
