@extends('layouts.master')

@section('content')

		
	<div class="slider">
        <ul class="slides">
            <li>
                <img src="imgHomepageSlider/hmpgslider1.jpg">
            </li>
            <li>
                <img src="imgHomepageSlider/hmpgslider2.jpg">
            </li>
            <li>
                <img src="imgHomepageSlider/hmpgslider3.jpg">
            </li>
            <li>
                <img src="imgHomepageSlider/hmpgslider4.jpg">
            </li>
        </ul>
    </div>

    <div class="section white">
        <div style="height:50px;"></div>
            <div class="row">
                <div class="col s6">   
                    <div class="container">

                        <a href="/garmentUniform"><img class="responsive-img hoverable" width = "90%" src="img/uniform3.jpg"></a>

                        <p class="center-align">
                            <h4>Uniforms</h4>
                            From different designs and options to choose from,<br>
                            personalize uniforms for an exclusive style and<br>
                            distinction.
                        </p>
                    </div>
                </div>
                <div class="verticalLine"></div>
                <div class="col s6">
                    <div class="container">

                        <a href="/garmentGown"><img class="responsive-img hoverable" width = "80%" src="img/gowns.jpg"></a>

                        <p class="center-align">
                            <h4>Gowns</h4>
                            Be the eye-catcher in special occasions with custom<br>
                            designed gowns and dresses. Choose from a variety<br>
                            of fabrics, colors and designs for a truly unique<br>
                            style!
                        </p>
                    </div>
                </div>
            </div>
        <div class="divider container"></div>
        
        <div style="height:50px;"></div>
            <div class="row">
                <div class="col s6">
                    <div class = "container">

                        <a href="/garmentSuit"><img class="responsive-img hoverable" width = "90%" src="img/suits.jpg"></a>

                        <p class="center-align">
                            <h4>Suits</h4>
                            Always look the best in a custom suit that<br>
                            will fit you perfectly. Our hand tailored<br>
                            suits come in a collection of high quality<br>
                            fabrics and materials that you can choose from.
                        </p>
                    </div>
                </div>
                <div class="col s6">
                    <div class="container">
                        <a href="/ordernow"><img class="responsive-img hoverable" width = "90%" src="img/suit.jpg"></a>
                        <p class="center-align">
                            <h4>Order Now</h4>
                            Want the best tailoring experience ever?<br>
                            Take the chance and work with us!<br>
                        </p>
                    </div>
                </div>
            </div>
        <div class="divider container"></div>
        
        <div style="height:50px;"></div>
            <div class="row">
                <div class="col s6">
                    <div class = "container">

                        <a href="/orderTracking"><img class="responsive-img hoverable" width = "90%" src="img/ordertrack1.jpg"></a>

                        <p class="center-align">
                            <h4>Order Tracking</h4>
                            Experience made more personal with Order Tracking.<br>
                            Monitor your orders' progress here!
                        </p>
                    </div>
                </div>
                <div class="col s6">
                    <div class="container">

                        <a href="/howitworks"><img class="responsive-img hoverable" width = "90%" src="img/howitwork.jpg"></a>
                        <p class="center-align">
                            <h4>How It Works</h4>
                            Easy steps to follow for a perfect fit.<br>
                            In just a couple of minutes, the measurements<br>
                            for perfect fitting will be ready for the garments! 
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
		