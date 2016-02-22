@extends('layouts.master')

@section('content')
		
	<div style="margin-top:40px" class="slider transparent">
        <ul class="slides">
            <li>
                <img src="http://www.emiliosasso.com/wp-content/uploads/EmilioSassoSartoria008-1600x900.jpg">
            </li>
            <li>
                <img src="http://jinkaminka.com/images/tailor.jpg">
            </li>
            <li>
                <img src="http://www.culturaitaliana.eu/wp-content/uploads/2014/06/sartoria-629x300.jpg">
            </li>
            <li>
                <img src="http://static3.fashionbeans.com/wp-content/uploads/2013/07/diytailoring.jpg">
            </li>
        </ul>
    </div>

    <div class="section white">
        <div style="height:50px;"></div>
            <div class="row">
                <div class="col s6">   
                    <div class="container">
                        <a href="#"><img class="hoverable" style = "height:250px"src="img/suit.jpg"></a>
                        <p class="center-align">
                            <h4>Uniforms</h4>
                            Take it slow, but it's not typical<br>
                            He already knows that my love is fire<br>
                            His heart was a stone, but then his hands roam<br>
                            I turned him to gold and it took him higher
                        </p>
                    </div>
                </div>
                <div class="verticalLine"></div>
                <div class="col s6">
                    <div class="container">
                        <img class="hoverable" style = "height:250px" src="img/suit.jpg">
                        <p class="center-align">
                            <h4>Gowns</h4>
                            Take it slow, but it's not typical<br>
                            He already knows that my love is fire<br>
                            His heart was a stone, but then his hands roam<br>
                            I turned him to gold and it took him higher
                        </p>
                    </div>
                </div>
            </div>
        <div class="divider container"></div>
        
        <div style="height:50px;"></div>
            <div class="row">
                <div class="col s6">
                    <div class = "container">
                        <img class="hoverable" style = "height:250px" src="img/suit.jpg">
                        <p class="center-align">
                            <h4>Suits</h4>
                            Take it slow, but it's not typical<br>
                            He already knows that my love is fire<br>
                            His heart was a stone, but then his hands roam<br>
                            I turned him to gold and it took him higher
                        </p>
                    </div>
                </div>
                <div class="col s6">
                    <div class="container">
                        <img class="hoverable" style = "height:250px" src="img/suit.jpg">
                        <p class="center-align">
                            <h4>Order Now</h4>
                            Take it slow, but it's not typical<br>
                            He already knows that my love is fire<br>
                            His heart was a stone, but then his hands roam<br>
                            I turned him to gold and it took him higher
                        </p>
                    </div>
                </div>
            </div>
        <div class="divider container"></div>
        
        <div style="height:50px;"></div>
            <div class="row">
                <div class="col s6">
                    <div class = "container">
                        <img class="hoverable" style = "height:250px" src="img/suit.jpg">
                        <p class="center-align">
                            <h4>Order Tracking</h4>
                            Take it slow, but it's not typical<br>
                            He already knows that my love is fire<br>
                            His heart was a stone, but then his hands roam<br>
                            I turned him to gold and it took him higher
                        </p>
                    </div>
                </div>
                <div class="col s6">
                    <div class="container">
                        <img class="hoverable" style = "height:250px" src="img/suit.jpg">
                        <p class="center-align">
                            <h4>How It Works</h4>
                            Take it slow, but it's not typical<br>
                            He already knows that my love is fire<br>
                            His heart was a stone, but then his hands roam<br>
                            I turned him to gold and it took him higher
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>


      
    @stop

@section('scripts')	 
     <script>
      	$(document).ready(function(){
            $('.slider').slider({full_width: true});
            // Pause slider
            $('.slider').slider('pause');
            // Start slider
            $('.slider').slider('start');
            // Next slide
            $('.slider').slider('next');
            // Previous slide
            $('.slider').slider('prev');
        });
    </script>

    <script>
    $(window).load(function() {
    // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '#slider'
        });
 
        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
@stop                             
		