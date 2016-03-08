@extends('layouts.checkout')


@section('content')

	<div class="section" style="margin-top:20px; margin-bottom:20px;">
		<div class="row">

			<!--SHIPPING TAB-->
			<div id="shipping" class="col s12 white" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">
				<div style="height:20px;"></div>

					<div class="container">
						<div style="padding:5px; border: 1px solid #00bfa5; margin-bottom:20px;">
							<h6 style="margin-left:20px;"><b>Your shipping address</b></h6>
							<div class="divider"></div>
							
							<div class="container" style="margin-top:40px; margin-bottom:40px;">
								<div class="input-field">
									<input id ="name" type="text" class="validate">
									<label for="name">First & Last Name</label>
								</div>
								<div class="input-field">
									<input id ="address" type="text" class="validate">
									<label for="address">Complete Address</label>
								</div>
								<div class="input-field">
									<input id ="province" type="text" class="validate">
									<label for="province">Province</label>
								</div>
								<div class="input-field">
									<input id ="city" type="text" class="validate">
									<label for="city">City / Municipality</label>
								</div>
								<div class="input-field">
									<input id ="brgy" type="text" class="validate">
									<label for="brgy">Barangay</label>
								</div>
								<div class="input-field">
									<input id ="number" type="text" class="validate">
									<label for="number">Mobile Number</label>
								</div>

								<div class="container">
									<center><h5 style="color:#e53935">Standard Delivery</h5></center>
									<p class = "input-field">
						                <b><input class="center" id = "deliverydate" value = "14 Mar - 15 Mar" name = "deliverydate" type = "text" readonly></b>
						            </p>
						        </div>

								<div class="btn red darken-1 white-text container" style=" margin-top:20px; width:100%; padding:5px; height:50px;" href="/checkoutPayment">CONTINUE</div>
							</div>

						</div>

					</div>
			</div>
			<!--END OF SHIPPING TAB-->

		</div>
	</div>


@stop

@section('scripts')	
	<script>

	</script>
@stop
