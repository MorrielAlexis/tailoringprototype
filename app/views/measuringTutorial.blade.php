@extends('layouts.master')

@section('content')

	<div class="section white">	
		<div style="height:300px; width:100%; background-image:url(img/howitwork.jpg)">
					<center><h1 style="color:#00695c;">Start Measuring Yourself</h1></center>
					<center><h5 style="color:#00695c;">Get accurate measurements even with no professional experience in tailoring</h5></center>
		</div>

		<div class="divider"></div>
		<div style= "height:20px;"></div>
		<p class="center-align" style="color:gray"><font size = "+3">For Him</font></p>
		<div style= "height:20px;"></div>
		<div class="row">
        	<div class="col s4">
           		 <div class="container">
         			 <div class="card large">
           				 <div class="card-image">
              				<img class="responsive-img" height = "50%" src="img/menshirt.png">
           				 </div>
            			<div class="card-content">
             				<p class="center-align">
             				 <span class="card-title" style="color:black">Men's Shirt</span>
             					 <p class="center-align">See how to measure your upper body to fit that nice shirt you wanted!</p>
           				 	</p>
           				 </div>
            			<div class="card-action">
              			<a href="/menShirtTutorial">Proceed to tutorial</a>
           				 </div>
         			 </div>
      			</div>
       		 </div>

       		 <div class="col s4">
           		 <div class="container">
         			 <div class="card large">
           				 <div class="card-image">
              				<img class="responsive-img" height = "50%" src="img/pants.png">
           				 </div>
            			<div class="card-content">
             				<p class="center-align">
             				 <span class="card-title" style="color:black">Men's Pants</span>
             					 <p class="center-align">See how to measure your lower body to fit that nice pants you wanted!</p>
           					</p>
           				 </div>
            			<div class="card-action">
              			<a href="/menPantsTutorial">Proceed to tutorial</a>
           				 </div>
         			 </div>
      			</div>
       		 </div>

       		 <div class="col s4">
           		 <div class="container">
         			 <div class="card large">
           				 <div class="card-image">
              				<img class="responsive-img" height = "50%" src="img/menfull.jpg">
           				 </div>
            			<div class="card-content">
             				<p class="center-align">
             				 <span class="card-title" style="color:black">Men's Full Profile</span>
             					 <p class="center-align">See how to measure your whole body to fit that nice suit you wanted!</p>
           					</p>
           				 </div>
            			<div class="card-action">
              			<a href="/menFullProfileTutorial">Proceed to tutorial</a>
           				 </div>
         			 </div>
      			</div>
       		 </div>

     	 </div>


     	<div style= "height:20px;"></div>
		<p class="center-align" style="color:gray"><font size = "+3">For Her</font></p>
		<div style= "height:20px;"></div>
		<div class="row">
        	<div class="col s4">
           		 <div class="container">
         			 <div class="card large">
           				 <div class="card-image">
              				<img class="responsive-img" height = "50%" src="img/menshirt.png">
           				 </div>
            			<div class="card-content">
            				<p class="center-align">
             				 <span class="card-title" style="color:black">Women's Shirt</span>
             					 <p class="center-align">See how to measure your upper body to fit that nice shirt you wanted!</p>
           				 	</p>
           				 </div>
            			<div class="card-action">
              			<a href="/womenShirtTutorial">Proceed to tutorial</a>
           				 </div>
         			 </div>
      			</div>
       		 </div>

       		 <div class="col s4">
           		 <div class="container">
         			 <div class="card large">
           				 <div class="card-image">
              				<img class="responsive-img" height = "50%" src="img/pants.png">
           				 </div>
            			<div class="card-content">
            				<p class="center-align">
             				 <span class="card-title" style="color:black">Women's Pants and Skirts</span>
             					 <p class="center-align">See how to measure your lower body to fit that nice pants you wanted!</p>
             				</p>
           				 </div>
            			<div class="card-action">
              			<a href="/womenPantsAndSkirtTutorial">Proceed to tutorial</a>
           				 </div>
         			 </div>
      			</div>
       		 </div>

       		 <div class="col s4">
           		 <div class="container">
         			 <div class="card large">
           				 <div class="card-image">
              				<img class="responsive-img" height = "50%" src="img/menfull.jpg">
           				 </div>
            			<div class="card-content">
            				<p class="center-align">
             				 <span class="card-title" style="color:black">Women's Full Profile</span>
             					 <p class="center-align">See how to measure your whole body to fit that nice suit you wanted!</p>
           				 	</p>
           				 </div>
            			<div class="card-action">
              			<a href="/womenFullProfileTutorial">Proceed to tutorial</a>
           				 </div>
         			 </div>
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