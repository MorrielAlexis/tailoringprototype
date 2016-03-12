@extends('layouts.master')

@section('content')

	<div style="height:150px; margin-top: -15px;">
      <div style="height:20px;"></div>
      <center><h1 style="color:white; font-family:'Playfair Display','Times';">Alteration</h1></center>
      <div class="container divider"></div>
    </div>

    <div class="section">
    	
    	<div class="row">
			<div class="col s6 center">
				<div style="padding:50px; margin-right:-25px;">
					<!--TOPS-->
					<div class="white" style="border:5px solid #69f0ae;">
						<div class="row">
							<div class="col s6">
								<h4 style="font-family:'Playfair Display','Times';">Tops, Shirts & Blouses</h4>
								<img class="responsive-img" src="img/altertop.jpg">
				            	<div style="height:20px;"></div>
				            	<div><a class="green accent-2 container" href="/ordernow" style="border:1px solid white; padding:10px;"><font color= "white">SUBMIT</font></a></div>
							</div>
							<div class="col s6">
								<form action="top">
									<p>
				          				<input type="checkbox" class="filled-in" id="topHem" />
		      							<label for="topHem">Hem (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="topSlim" />
		      							<label for="topSlim">Slim (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="topNoCuff" />
		      							<label for="topNoCuff">Shorten Sleeve - no cuff (PHP 50.00) </label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="topWithCuff" />
		      							<label for="topWithCuff">Shorten Sleeve - with cuff (PHP 50.00) </label>
				          			</p>
									<p>
				          				<input type="checkbox" class="filled-in" id="topNoSleeve" />
		      							<label for="topNoSleeve">Adjust Shoulder - no sleeves (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="topWithSleeve" />
		      							<label for="topWithSleeve">Adjust Shoulder - with sleeves (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="topSlimSleeve" />
		      							<label for="topSlimSleeve">Slim Sleeves (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="topDarts"  />
		      							<label for="topDarts">Add Darts (PHP 50.00)</label>
				          			</p>
								</form>
							</div>
						</div>
					</div>
					<!--DENIM-->
					<div style="height:40px;"></div>
					<div class="white" style="border:5px solid #69f0ae;">
						<div class="row">
							<div class="col s6">
								<h4 style="font-family:'Playfair Display','Times';">Denim</h4>
								<img class="responsive-img" src="img/alterdenim.jpg">
				            	<div style="height:20px;"></div>
				            	<div><a class="green accent-2 container" href="/ordernow" style="border:1px solid white; padding:10px;"><font color= "white">SUBMIT</font></a></div>
							</div>
							<div class="col s6">
								<div style="height:65px;"></div>								
								<form action="top">
									<p>
				          				<input type="checkbox" class="filled-in" id="denimHem" />
		      							<label for="denimHem">Hem (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="denimOrigHem" />
		      							<label for="denimOrigHem">Original Hem (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="denimSlim" />
		      							<label for="denimSlim">Slim Leg (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="denimWaist" />
		      							<label for="denimWaist">Adjust Waist (PHP 50.00) </label>
				          			</p>
								</form>
							</div>
						</div>
					</div>
					<!--DRESS-->
					<div style="height:40px;"></div>
					<div class="white" style="border:5px solid #69f0ae;">
						<div class="row">
							<div class="col s6">
								<h4 style="font-family:'Playfair Display','Times';">Dresses & Skirts</h4>
								<div style="height:40px;"></div>
								<img class="responsive-img" src="img/alterdress.jpg">
				            	<div style="height:20px;"></div>
				            	<div><a class="green accent-2 container" href="/ordernow" style="border:1px solid white; padding:10px;"><font color= "white">SUBMIT</font></a></div>
							</div>
							<div class="col s6">
								<form action="top">
									<p>
				          				<input type="checkbox" class="filled-in" id="dressHem" />
		      							<label for="dressHem">Hem (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="dressHemPleats" />
		      							<label for="dressHemPleats">Hem with Pleats Details (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="dressSlim" />
		      							<label for="dressSlim">Slim (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="dressNoCuff" />
		      							<label for="dressNoCuff">Shorten Sleeve - no cuff (PHP 50.00) </label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="dressWithCuff" />
		      							<label for="dressWithCuff">Shorten Sleeve - with cuff (PHP 50.00) </label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="dressSlimSleeve" />
		      							<label for="dressSlimSleeve">Slim Sleeves (PHP 50.00)</label>
				          			</p>	
				          			<p>
				          				<input type="checkbox" class="filled-in" id="DressNoSleeve" />
		      							<label for="dressNoSleeve">Adjust Shoulder - no sleeves (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="dressWithSleeve" />
		      							<label for="dressWithSleeve">Adjust Shoulder - with sleeves (PHP 50.00)</label>
				          			</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--BOTTOM-->
			<div class="col s6 center">
				<div style="padding:50px; margin-left:-25px;">
					<div class="white" style="border:5px solid #69f0ae;">
						<div class="row">
							<div class="col s6">
								<h4 style="font-family:'Playfair Display','Times';">Pants & Bottoms</h4>
								<img class="responsive-img" src="img/alterbottom.jpg">
				            	<div style="height:20px;"></div>
				            	<div><a class="green accent-2 container" href="/ordernow" style="border:1px solid white; padding:10px;"><font color= "white">SUBMIT</font></a></div>
							</div>
							<div class="col s6">
								<div style="height:120px;"></div>
								<form action="bottom">
									<p>
				          				<input type="checkbox" class="filled-in" id="pantHem" />
		      							<label for="pantHem">Hem (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="pantSlim" />
		      							<label for="pantSlim">Slim Leg (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="pantWaist" />
		      							<label for="pantWaist">Adjust Waist (PHP 50.00) </label>
				          			</p>
								</form>
							</div>
						</div>
					</div>
					<!--COAT-->
					<div style="height:40px;"></div>
					<div class="white" style="border:5px solid #69f0ae;">
						<div class="row">
							<div class="col s6">
								<h4 style="font-family:'Playfair Display','Times';">Jackets & Coats</h4>
								<img class="responsive-img" src="img/altercoat.jpg">
				            	<div style="height:20px;"></div>
				            	<div><a class="green accent-2 container" href="/ordernow" style="border:1px solid white; padding:10px;"><font color= "white">SUBMIT</font></a></div>
							</div>
							<div class="col s6">
								<div style="height:85px;"></div>
								<form action="top">
									<p>
				          				<input type="checkbox" class="filled-in" id="jacketShorten" />
		      							<label for="jacketShorten">Shorten (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="jacketSlim" />
		      							<label for="jacketSlim">Slim (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="jacketShortenCuff" />
		      							<label for="jacketShortenCuff">Shorten Sleeves (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="jacketShortenShoulder" />
		      							<label for="jacketShortenShoulder">Shorten Shoulder (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="jacketSlimSleeve" />
		      							<label for="jacketSlimSleeve">Slim Sleeves (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="jacketShoulder" />
		      							<label for="jacketShoulder">Adjust Shoulder(PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="jacketDarts"  />
		      							<label for="jacketDarts">Add Darts (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="jacketLining"  />
		      							<label for="jacketLining">Replace Lining (PHP 50.00)</label>
				          			</p>
								</form>
							</div>
						</div>
					</div>
					<!--OTHERS-->
					<div style="height:40px;"></div>
					<div class="white" style="border:5px solid #69f0ae;">
						<div class="row">
							<div class="col s6">
								<h4 style="font-family:'Playfair Display','Times';">Others</h4>
								<img class="responsive-img" src="img/dashboard.jpg">
				            	<div style="height:20px;"></div>
				            	<div><a class="green accent-2 container" href="/ordernow" style="border:1px solid white; padding:10px;"><font color= "white">SUBMIT</font></a></div>
							</div>
							<div class="col s6">
								<div style="height:120px;"></div>
								<form action="bottom">
									<p>
				          				<input type="checkbox" class="filled-in" id="otherAddRemove" />
		      							<label for="otherAddremove">Add/Remove Zippers/Buttons (Php 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="otherZipper" />
		      							<label for="otherZipper">Move Zipper (PHP 50.00)</label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="otherHeavily" />
		      							<label for="otherHeavily">Heavily Embellished Items (PHP 50.00) </label>
				          			</p>
				          			<p>
				          				<input type="checkbox" class="filled-in" id="otherHem" />
		      							<label for="otherHem">Hem Leather (PHP 50.00) </label>
				          			</p>
								</form>
							</div>
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
