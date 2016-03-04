@extends('layouts.master')


@section('content')
	<div class = "section" style="background-image:url(img/admin-back.jpg);">
			
	<div class="section container">

		<div align = "center">
			<div style="padding:0.5px">
				<h1 style="background:white; color:teal;">Order Tracking</h1>
			</div>
		</div>

	</div>

		<div class = "container">
			<div class = "container">
				<div class = "card-panel">
					<div class = "card-content">
						<div class = "col s12">
							<div class = "row">
								<div class = "col s12">
									<div class = "input-field">
										<input id = "trackno" value = "JOB001" name = "trackno" type = "text" readonly>
										<label for = "trackno"> Tracking Code: </label>
									</div>
							    </div>
							    <div class = "col s12">
							   
							        <button  type = "submit" class="right waves-effect waves-light btn" style= "padding:3px" href="#!">Track</button>
							    </div>
							</div>
						    
						</div>
					</div>
		    	</div>
			</div>
		</div>


		<div class = "container">
			<div class = "container">
				<div class = "card panel">
					<div class = "card-content">
					
								
									<label><font size = "+2" color = "black">Job Order: JOB001</font></label>
								
							


						<label><center><font size = "+1">Progress:</font></center> </label>

						<div id="progress">
							<span id="percent">60%</span>
							<div id="bar"></div>
						</div>
					  	<label><center><font size ="+2">30 of 50 of garments is done</font></center></label>
					</div>
				</div>
			</div>
		</div>
	</div>


@stop

@section('scripts')	

@stop
