@extends('layouts.master')

@section('content')

	<div class="section white">	
		<div align = "center">
			<div style= "height:20px;"></div>
			<div style="background:#4db6ac; padding:0.5px">
			<h1 style="color:#fafafa">How it Works</h1>
			<h4 style="color:#fafafa">Three easy steps to make custom-fit garments</h4>
		</div>
		</div>


		<div style= "height:50px;"></div>
	  	  <div class="row">
		     <div class="col s4">
                    <div class="container">
                       <p align="center">
                        <img style = "height:250px" src="img/one1.jpg">
                        	<button class="waves-effect waves-light btn" style= "padding:3px" href="#!">Go to Gallery</button>
                            <p align="center">Select your desired garments from the gallery for tailoring or alteration</p>
                        </p>
                    </div>
           	  </div>

           	  <div class="col s4">
                    <div class="container">
                    	<p align="center">
                        <img style = "height:250px" src="img/two.jpg">
                        	<button class="waves-effect waves-light btn" style= "padding:3px" href="#!">Go to Designer</button>
                            <p align="center">Design your garment in our 3D designer</p>
                        </p>
                    </div>
           	  </div>

           	  <div class="col s4">
                    <div class="container">
      					<p align="center">
                         <img style = "height:250px" src="img/three.jpg">
                        	<button class="waves-effect waves-light btn" style= "padding:3px" href="#!">Go to Measurements</button>
                            <p align="center">Add measurements with the help of our video or picture tutorial or use your existing measurements</p>
                        </p>
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
