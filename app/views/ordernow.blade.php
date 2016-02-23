@extends('layouts.master')

@section('content')

<<<<<<< HEAD
	<div class="section white">
		<div align = "center">
			<div style= "height:30px;"></div>
			<h4>Order Form</h4>
		</div>

		<div class = "container">
			<div class = "container">
				<div class = "card-panel">
					<div class = "card-content">
						<div class = "col s12">
							<div class = "row">
								<div class = "col s12">
									<div class = "col s8">
										<img style = "height:250px; width:200px; border: 1px dashed teal" src = "#!"/>
									</div>
									<div class = "col s4">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

=======
	<div class="section" style="background-image:url(img/background.jpg);">
		<div align="center">
			<h3 style="margin-top:30px">Order Form</h3>
		</div>
		
		<div class="container">
			<div class = "card-panel">
				<div class = "card-content">
					<div class = "row">
						<div class = "col s7">
							<img class = "responsive-img" src="imgUniform/uni4.jpg" style="border: 2px dashed teal;">
							
								<div style="margin-top:50px" class="input-field col s6">
						            <i class="material-icons prefix">add_box</i>
						            <input id="icon_prefix" type="text" class="validate">
						            <label for="icon_prefix">Quantity</label>
						        </div>
						        <div class = "col s6">
						        	<p  style="margin-top:20px">Please specify your measurement here:</p>
									<div style="margin-left:40px" class="btn-flat hoverable teal white-text">MEASUREMENT</div>
					        	</div>
					    	
					    </div>
					    <div class = "col s5">
					    	<div style="margin-top:20px" class="divider teal"></div>
					    	<div style="margin-top:10px" class="divider teal"></div>
							<p style="margin-top:70px" class = "input-field">
								<input id = "pricequotation" value = "PHP 2,000.00" name = "pricequotation" type = "text" readonly>
								<label for = "pricequotation"><font size="+1" color="green">Price Quotation:</font></label>
							</p>
							<p style="margin-top:40px" class = "input-field">
								<input id = "totalprice" value = "PHP 2,000.00" name = "totalprice" type = "text" readonly>
								<label for = "totalprice"><font size="+1" color="red">Total Price:</font></label>
							</p>
							<div  style="margin-left:30%" class="btn-flat hoverable teal white-text">CHECKOUT</div>
						</div>
					</div>
				</div>
	    	</div>
	    </div>
>>>>>>> 3863420b93843347ccf19ea11ddcad96c05a56de



    @stop

@section('scripts')	 

   	<script>

  </script>
@stop   