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

    <div class="section container grey lighten-2" style="margin-top:20px; margin-bottom:20px; width:95%; height:70px;">
        <center><h5 style="font-family:'Playfair Display','Times'; margin:0px;"><b>FREE delivery</b></h5></center>
        <center><p style="margin:0px;">also with free alteration on every purchased item!</p></center>
    </div>

    <div class="row">
        <div class="col s6 center">
            <h2 class="white-text" style="font-family:'Playfair Display','Times';">Custom Uniform</h2>
            <img style="width:90%; height:250px;" class="responsive-img" src="img/uniform3.jpg">
            <p class="center-align white-text" style="font-size:17px;">
                From different designs and options to choose from,
                personalize uniforms for an exclusive style and
                distinction.
            </p>
            <button href="/garmentUniform" class="container white" style="border:1px solid black; padding:10px;">CONFIGURE UNIFORMS NOW</button>
        </div>
        
        <div class="col s6 center">
            <h2 class="white-text" style="font-family:'Playfair Display','Times';">Custom Gown</h2>
            <img style="width:90%; height:250px;" class="responsive-img" src="img/gowns.jpg">
            <p class="center-align white-text" style="font-size:17px;">
                Be the eye-catcher in special occasions with custom
                designed gowns and dresses. Choose from a variety
                of fabrics, colors and designs for a truly unique
                style!
            </p>
            <button href="/garmentGown" class="container white" style="border:1px solid black; padding:10px;">CONFIGURE GOWNS NOW</button>
        </div>
    </div>

    <div class="row">
        <div class="col s6 center">
            <h2 class="white-text" style="font-family:'Playfair Display','Times';">Custom Uniform</h2>
            <img style="width:90%; height:250px;" class="responsive-img" src="img/suits.jpg">
            <p class="center-align white-text" style="font-size:17px;">
                Always look the best in a custom suit that
                will fit you perfectly. Our hand tailored
                suits come in a collection of high quality
                fabrics and materials that you can choose from.
            </p>
            <button href="/garmentSuit" class="container white" style="border:1px solid black; padding:10px;">CONFIGURE SUITS NOW</button>
        </div>
        
        <div class="col s6 center">
            <h2 class="white-text" style="font-family:'Playfair Display','Times';">Order Now</h2>
            <img style="width:90%; height:250px;" class="responsive-img" src="img/suit.jpg">
            <p class="center-align white-text" style="font-size:17px;">
                Want the best tailoring experience ever?
                Take the chance and work with us!
            </p>
            <button href="/ordernow" class="container white" style="border:1px solid black; padding:10px;">ORDER YOURS HERE</button>
        </div>
    </div>

    <div class="row">
        <div class="col s6 center">
            <h2 class="white-text" style="font-family:'Playfair Display','Times';">Order Tracking</h2>
            <img style="width:90%; height:250px;" class="responsive-img" src="img/ordertrack1.jpg">
            <p class="center-align white-text" style="font-size:17px;">
                Experience made more personal with Order Tracking.
                Monitor your orders' progress here!
            </p>
            <button href="/orderTracking" class="container white" style="border:1px solid black; padding:10px;">TRACK YOURS HERE</button>
        </div>
        
        <div class="col s6 center">
            <h2 class="white-text" style="font-family:'Playfair Display','Times';">How It Works</h2>
            <img style="width:90%; height:250px;" class="responsive-img" src="img/howitwork.jpg">
            <p class="center-align white-text" style="font-size:17px;">
                Easy steps to follow for a perfect fit.
                In just a couple of minutes, the measurements
                for perfect fitting will be ready for the garments! 
            </p>
            <button href="/howitworks" class="container white" style="border:1px solid black; padding:10px;">MEASURE ON YOUR OWN</button>
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
        