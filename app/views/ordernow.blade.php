@extends('layouts.master')

@section('content')

	<div class="section white container">
		
		<div style="height:20px;"></div>
		<div><h2 style="text-align:center">Order Now!</h2></div>

		<div class="row">
			<div class="col s8">
				<div style="border:2px solid teal">
					<h4 style="margin-left:225px">Order Form</h4>
					<div class="divider container black" style="margin-bottom:20px"></div>
					<img style="height:100px; width:100px; border: 1px dashed teal; margin-left:20px" src="#!">
				</div>
			</div>
			<div class="col s4">
				<div style="margin-left:50px">
				<p>Please specify your measurement here:</p>
				<div style="margin-left: 45px" class="btn-flat hoverable teal">MEASUREMENT</div>
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