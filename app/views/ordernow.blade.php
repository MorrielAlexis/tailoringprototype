@extends('layouts.master')

@section('content')

	<div class="section white">
		
		<div style="height:20px;"></div>
		<div><h2 style="text-align:center">Order Now!</h2></div>

		<div class="row">
			<div class = "col s12">
				<div class="col s6" style="border: 2px solid teal; height:auto; width:auto;">
					<h4>QUICK ORDER</h4>

					</div>
					<div class="col s6">
						<p>Please specify your measurement here:</p>
					<div style="margin-left:40px;" class="btn-flat teal hoverable">MEASUREMENT</div>
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