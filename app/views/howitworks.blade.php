@extends('layouts.master')

@section('content')

  <div class="section white"> 

    <div style="height:150px; background-image:url(img/admin-back.jpg)">
      <center><h1 style=" margin-top: -15px;color:white">How It Works</h1></center>
      <center><h4 style="color:white;">Three easy steps to make custom-fit garments</h4></center>
    </div>

    <div class="divider"></div>
    <div style= "height:50px;"></div>
        <div class="row">
         <div class="col s4">
                    <div class="container">
                       <p align="center">
                        <img style = "height:250px" src="img/one1.jpg">
                          <a class="btn-flat" style= "background:#4db6ac; padding:4px; color:#fafafa" href="{{URL::to('/garmentUniform')}}">Go to Gallery</a>
                            <p align="center">Select your desired garments from the gallery for tailoring or alteration</p>
                        </p>
                    </div>
              </div>

              <div class="col s4">
                    <div class="container">
                      <p align="center">
                        <img style = "height:250px" src="img/two.jpg">
                          <a class="btn-flat" style= "background:#4db6ac; padding:4px; color:#fafafa" href="#!">Go to Designer</a>
                            <p align="center">Design your garment in our 3D designer</p>
                        </p>
                    </div>
              </div>

              <div class="col s4">
                    <div class="container">
                <p align="center">
                         <img style = "height:250px" src="img/three.jpg">
                          <a class="btn-flat" style= "background:#4db6ac; padding:4px; color:#fafafa" href="{{URL::to('/measuringTutorial')}}">Go to Measurements</a>
                            <p align="center">Add measurements with the help of our video and picture tutorial</p>
                        </p>
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
