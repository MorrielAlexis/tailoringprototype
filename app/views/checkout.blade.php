@extends('layouts.master')


@section('content')

<div class="section" style="background:url(img/admin-back.jpg);">
	<div class="section container">

		<div align = "center">
			<div style="padding:0.5px">
				<h1 style="background:white; color:#e53935;">CHECKOUT</h1>
			</div>
		</div>

		<div class="divider"></div>

		<div class="card">
			<div class="card-content">
				<h4 class="card-title" align="center"><b>Fill up form</b></h4>
				<div class="row">
					<div class="col s6">
						<input id="first_name" type="text" class="validate">
						<label for="first_name">First Name</label>
					</div>
					<div class="col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>
				</div>
				<div>
					<input id="address" type="text" class="validate">
					<label for="address">Address</label>
				</div>
				<div class="row">
					<div class="col s6">
						<input id="email" type="email" class="validate">
						<label for="email">E-mail</label>
					</div>
					<div class="col s6">
						<input id="cpnumber" type="text" class="validate">
						<label for="cpnumber">Cellphone Number</label>
					</div>
				</div>
			</div>
		</div>

		<div class="height:40px;"></div>

		<div class="row">
			<div class="col s6">
				<div class="card">
					<div class="card-content">
						<p class = "input-field" style="margin-top:30px;">
			              	<input id = "totalprice" value = "PHP 4,100.00" name = "totalprice" type = "text" readonly>
			              	<label for = "totalprice"><font size="+1" color="#e53935"><b>TOTAL PRICE:</b></font></label>
		            	</p>
	      			</div>
	      		</div>
	      	</div>
	      	<div class="col s6">
	      		<div class="card">
	      			<div class="card-content">
			            <p class = "input-field" style="margin-top:30px;">
				            <input id = "downpayment" value = "PHP 2,050.00" name = "downpayment" type = "text" readonly>
			    	        <label for = "downpayment"><font size="+1" color="blue"><b>DOWNPAYMENT:</b></font></label>
	            		</p>
	            	</div>
	            </div>
	        </div>
	    </div>

	    <div class="card">
	    	<div class="card-content">
	    		<div class="row">
	    			<div class="col s4" style="margin-top:10px;">
                        <img class="responsive-img" src="img/truck.jpg">
	    			</div>
	    			<div class="col s8" style="margin-top:10px;">
			            <p class = "input-field" style="margin-top:30px;">
				            <input id = "deliverydate" value = "3 / 14 / 16" name = "deliverydate" type = "text" readonly>
			    	        <label for = "deliverydate"><font size="+1" color="teal"><b>Estimated delivery date:</b></font></label>
	            		</p>
	    			</div>
	    		</div>
	    	</div>
	    </div>

			    <div class="card">
			    	<div class="card-content container">
				        <center><a class="btn container" style="background:teal;" href="#!"><i class="small material-icons">input</i> SUBMIT ORDER</a></center>
					</div>
				</div>

	</div>

</div>

@stop

@section('scripts')	

@stop
