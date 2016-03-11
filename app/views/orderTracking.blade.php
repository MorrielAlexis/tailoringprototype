@extends('layouts.master')


@section('content')
	<div class = "section">
			
      <center><h1 style="color:white; font-family:'Playfair Display','Times';">Order Tracking</h1></center>

		<div class = "container">
			<div class = "card-panel">
				<div class = "card-content">
					<div class = "col s12">
						<div class = "row">
							<form action="#" class="container">
								<label><font size="+1" color="teal">Proof of purchase</font></label>
								<div class="file-field input-field">
									<div class="btn teal">
										<span style="padding:10px;">File</span>
										<input type="file">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text">
									</div>
								</div>
							</form>
						<div class="container" style="margin-top:20px;">	
							<div class = "col s12">
								<div class = "input-field">
									<input class="center" id = "trackno" value = "JOB001" name = "trackno" type = "text" readonly>
									<label for = "trackno"> Tracking Code: </label>
								</div>
						    </div>
						</div>
						    <div class = "col s12 center">
						   
						        <button  type = "submit" class="teal waves-effect waves-light btn" style= "padding:5px" href="#!">Track</button>
						    </div>
						</div>
					    
					</div>
				</div>
	    	</div>
		</div>


		<div class = "container">
			<div class = "card panel">
				<div class = "card-content">
				
							
								<label><font size = "+2" color = "black">Job Order: JOB001</font></label>
							
						


					<label><center><font size = "+1">Progress:</font></center> </label>

					<div id="progress">
						<span id="percent">60%</span>
						<div id="bar"></div>
					  	<label><center><font size ="+2">30 out of 50 garments is done</font></center></label>

					</div>
				</div>
			</div>
		</div>
	</div>


@stop

@section('scripts')	

@stop
