@extends('layouts.master')


@section('content')

	<div class="section  white" style="margin-top:20px; margin-bottom:20px;">
		<div class="row">
			<div class="col s12">
				<ul class="tabs teal">
					<li id="tabLogin" class="tab col s4 active"><a href="#login"><font color="white" size="+1">1. LOGIN</font></a></li>
					<li id="tabShipping" class="tab col s4"><a href="#shipping"><font color="white" size="+1">2. SHIPPING</font></a></li>
					<li id="tabPayment" class="tab col s4"><a href="#payment"><font color="white" size="+1">3. PAYMENT</font></a></li>
			        <div class="indicator teal accent-4" style="z-index:1"></div>
				</ul>
			</div>

			<div id="login" class="col s12" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">
				<div style="height:20px;"></div>

				<div class="row">
					<div class="col s8">
						<div style="padding:5px; border: 1px solid #00bfa5;">
							<h6><b>Login or Checkout as guest</b></h6>
							<div class="divider"></div>
							
							<div class="container" style="margin-top:40px; margin-bottom:40px;">
								<div class="container">
									<div class="input-field">
										<input id ="email" type="text" class="validate">
										<label for="email">Enter your email address</label>
									</div>
									<form style="margin-left:20px;">
										<p>
									    	<input class="with-gap" name="guest" type="radio" id="guest"  />
									      	<label for="guest">Continue without password</label>
									    </p>
									    <p>
									      	<input class="with-gap" name="member" type="radio" id="member"  />
									      	<label for="member">I already have an account</label>
									    </p>
									</form>
									<div class="input-field">
										<input disabled id ="password" type="text" class="validate">
										<label for="password">Password</label>
									</div>
									<p class="right-align blue-text">Lost your password?</p>
									<div class="btn teal accent-4 white-text container" style="width:100%;" href="#tabshipping">CONTINUE</div>

								</div>
							</div>

						</div>
					</div>

					<div class="col s4">
						<div style="padding:5px; border: 1px solid #00bfa5;">
							<h6><b>Order Summary</b> (2 items)</h6>
							<div class="divider"></div>
							<table class="responsive-table">
								<thead>
									<tr style="background-color:grey lighten-3;">
										<th class="left-align"><font size="-1">PRODUCT</font></th>
										<th><font size="-1">QUANTITY</font></th>
										<th class="right-align"><font size="-1">PRICE</font></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Women's Uniform</td>
										<td class="center">1</td>
										<td>1,700.00</td>
									</tr>
									<tr>
										<td>Gown</td>
										<td class="center">1</td>
										<td>2,400.00</td>
									</tr>
								</tbody>
							</table>
							<div class="divider"></div>
							<div class="row" style="margin-bottom:-20px;">
				                <p class="col s6"><b>Subtotal</b></p>
				                <p class = "col s6 input-field" style="margin-top:-1px;">
				                	<input class="center" id = "subtotal" value = "P 4,100.00" name = "subtotal" type = "text" readonly>
				                </p>
				            </div>
				            <div class="divider" style="margin-top:20px;"></div>
				            <div class="row" style="margin-bottom:-20px;">
					            <p class="col s6 red-text"><font size="+1"><b>TOTAL</b></font></p>
					            <p class = "col s6 input-field" style="margin-top:-0px;">
					                <b><input class="center" id = "total" value = "P 4,100.00" name = "total" type = "text" readonly></b>
					            </p>
					        </div>

						</div>
					</div>

				</div>
			</div>

			<div id="shipping" class="col s12" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">shipping</div>
			<div id="payment" class="col s12" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">payment</div>

		</div>
	</div>

@stop

@section('scripts')	
	<script>
	  $(document).ready(function(){
	    $('ul.tabs').tabs();
	  });
	  </script>
@stop
