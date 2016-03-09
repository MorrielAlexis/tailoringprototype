<!DOCTYPE html>
<html>
    <head>

      <title>Checkout</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      {{ HTML::style('css/materialize.min.css') }}
      {{ HTML::style('css/style.css') }}

      <style>
        body{
          
        }
      </style>
    </head>

    <body style="background: url('img/one.jpg')">


      <nav>
        <div class="nav-wrapper teal accent-4">
          <div class="col s12">
            <a href="#checkoutLogin" class="breadcrumb active">Login</a>
            <a href="/checkoutShipping" class="breadcrumb">Shipping</a>
            <a href="/checkoutPayment" class="breadcrumb">Payment</a>
          </div>
        </div>
      </nav>


      <!--LOGIN TAB-->
        <div style="height:20px;"></div>

        <div id="chekoutLogin" class="container">
          <div style="padding:5px; border: 1px solid #00bfa5; margin-bottom:20px;">
            <h6 style="margin-left:20px;"><b>Login or Checkout as guest</b></h6>
            <div class="divider"></div>
            
            <div class="container" style="margin-top:40px; margin-bottom:40px;">
              <div class="container">
                <div class="input-field">
                  <input id ="email" type="text" class="validate">
                  <label for="email">Enter your email address</label>
                </div>
                <form style="margin-left:20px;">
                  <p>
                      <input class="with-gap" name="guest" type="radio" id="guest" checked/>
                        <label for="guest">Continue without password</label>
                    </p>
                    <p>
                        <input class="with-gap" name="member" type="radio" id="member"  />
                        <label for="member">I already have an account</label>
                    </p>
                </form>
                <div class="input-field">
                  <input disabled id ="password" type="text" class="validate">
                  <label for="password">Password</label>
                </div>
                <p class="right-align blue-text">Lost your password?</p>
                <div class="btn red darken-1 white-text container" style="width:100%;" href="/checkoutShipping">CONTINUE</div>

              </div>
            </div>
          </div>
        </div>
      <!--END OF LOGIN TAB-->


      <main>
        <div style="height:40px;"></div>
        @yield('content')

        <footer>
          <div style="background-color:#cccccc" class="page-footer">
              <div class="container">
                <div class="row">
                  <div class="col s3">
                    <h5 class="teal-text"><b>MY STORE</b></h5>
                    <ul>
                      <li><a class="black-text" href="#!">Order Now!</a></li>
                      <li><a class="black-text" href="#!">Uniform Garments</a></li>
                      <li><a class="black-text" href="#!">Gown Garments</a></li>
                      <li><a class="black-text" href="#!">Suit Garments</a></li>
                      <li><a class="black-text" href="#!">How It Works</a></li>
                      <li><a class="black-text" href="#!">Order Tracking</a></li>
                    </ul>
                  </div>
                  <div class="col s3">
                    <h5 class="teal-text"><b>SERVICE</b></h5>
                    <ul>
                      <li><a class="black-text" href="#!">Style Consultation</a></li>
                      <li><a class="black-text" href="#!">Showroom</a></li>
                      <li><a class="black-text" href="#!">Fit Promise</a></li>
                      <li><a class="black-text" href="#!">Shipping Policy</a></li>
                      <li><a class="black-text" href="#!">Alterations/ Remakes/ Returns</a></li>
                    </ul>
                  </div>
                  <div class="col s3">
                    <h5 class="teal-text"><b>ABOUT US</b></h5>
                    <ul>
                      <li><a class="black-text" href="#!">Our Story</a></li>
                      <li><a class="black-text" href="#!">Reviews</a></li>
                      <li><a class="black-text" href="#!">Quality</a></li>
                    </ul>
                  </div>
                  <div class="col s3">
                    <h5 class="teal-text"><b>MORE</b></h5>
                    <ul>
                      <li><a class="black-text" href="#!">Contact Us</a></li>
                      <li><a class="black-text" href="#!">Terms</a></li>
                      <li><a class="black-text" href="#!">FAQs</a></li>
                      <li><a class="black-text" href="#!">Shipping</a></li>
                    </ul>
                  </div>

                </div>
              </div>
              <div class="footer-copyright">
                <div class="container">
                Copyright © My Store. All rights reserved.
                </div>
              </div>
            </div>
        </footer>
      </main>


      {{ HTML::script('js/jquery-2.1.4.min.js') }}
      {{ HTML::script('js/materialize.min.js') }}
      
      <script>

      </script>

        @yield('scripts')



    </body>


</html>