@extends('layouts.master')


@section('content')
	<div class = "section-white">
			
		<div style="height:100px; background-image:url(img/background.jpg)">
			<center><h1 style=" margin-top: 0px;color:teal">Order Tracking</h1></center>
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
					  	<label><center><font size ="+2">60% of the JOB is done</font></center></label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>


@stop

@section('scripts')	

@stop
