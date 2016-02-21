@extends('layouts.master')

@section('content')
		
	<div style="margin-top:30px" class="slider transparent">
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
                        <img class="hoverable" src="img/suit.jpg">
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
                        <img class="hoverable" src="img/suit.jpg">
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
                        <img class="hoverable" src="img/suit.jpg">
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
                        <img class="hoverable" src="img/suit.jpg">
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
                        <img class="hoverable" src="img/suit.jpg">
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
                        <img class="hoverable" src="img/suit.jpg">
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


      <footer style="background-color:#cccccc" class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Chubaness.
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
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
		