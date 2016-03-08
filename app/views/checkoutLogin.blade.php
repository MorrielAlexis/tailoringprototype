@extends('layouts.checkout')


@section('content')

	<div class="section" style="margin-top:20px; margin-bottom:20px;">
		<div class="row">

			<!--LOGIN TAB-->
			<div id="login" class="col s12 white" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">
				<div style="height:20px;"></div>

				<div class="container">
					<div style="padding:5px; border: 1px solid #00bfa5; margin-bottom:20px;">
						<h6 style="margin-left:20px;"><b>Login or Checkout as guest</b></h6>
						<div class="divider"></div>
						
						<div class="container" style="margin-top:40px; margin-bottom:40px;">
							<div class="container">
								<div class="input-field">
									<input id ="email" type="text" class="validate">
									<label for="email">Enter your email address</label>
								</div>
								<form style="margin-left:20px;">
									<p>
								    	<input class="with-gap" name="guest" type="radio" id="guest" checked/>
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
								<div class="btn red darken-1 white-text container" style="width:100%;" href="/checkoutShipping">CONTINUE</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END OF LOGIN TAB-->

		</div>
	</div>


@stop

@section('scripts')	
	<script>

	</script>
@stop
