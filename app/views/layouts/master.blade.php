<!DOCTYPE html>
<html>
    <head>

      <title>Customer Module</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      {{ HTML::style('css/materialize.min.css') }}
      {{ HTML::style('css/style.css') }}

      <style>
        body{
          background: url('img/gradient.jpg');
          background-size: cover;
        }
        nav{
          box-shadow: 0px 0px;
          padding: 0;
        }
        .btn{
          background: #cccccc;
          padding: 0;
        }
      </style>
    </head>

    <body>

      <nav>
        <div class="navbar teal">
          <nav style="height:40px">
            <div class="nav-wrapper">
              <img src="../img/logo.jpg"  alt="" class="circle responsive-img valign profile-image center" style="height:90px; width:100px; margin-top:5px; margin-left:30px;">
              <ul class="right hide-on-med-and-down" style="margin-right:20px;">
                <li><a style="margin:0; padding-left:10px; padding-right:10px; color: white" class="waves-effect waves-light btn-flat modal-trigger" href="#modalLogin"><b>Login</b></a></li>
                <li><a style="margin:0; padding-left:10px; padding-right:10px; color: white" class="dropdown-button btn-flat" data-beloworigin="true" href="#" data-activates="down"><b>Sign Up</b></a>
                <ul id="down" class="dropdown-content">
                  <li><a class="modal-trigger" href="#modalSignupInd">INDIVIDUAL</a></li>
                  <li><a class="modal-trigger" href="#modalSignupCom">COMPANY</a></li>
                </ul>
              </ul>
            </div>
          </nav>
        </div>

        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
          <a class="btn-floating btn-large red accent-3 tooltipped" data-position="left" data-delay="50" data-tooltip="Hi, Honey May">
            <i class="large mdi-action-perm-identity" style="font-size:30px;"></i>
          </a>
          <ul>
            <li>
              <a class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Logout">
              <i class="tiny mdi-action-input" style="font-size:25px;"></i>
              </a>
            </li>
            <li>
              <a class="btn-floating purple tooltipped" href="{{URL::to('/ordernow')}}" data-position="left" data-delay="50" data-tooltip="Orders">
              <i class="tiny mdi-action-shopping-basket" style="font-size:25px;"></i>
              </a>
            </li>
            <li>
              <a class="btn-floating yellow tooltipped" href="{{URL::to('/customerprofile')}}" data-position="left" data-delay="50" data-tooltip="Profile">
              <i class="tiny mdi-action-info-outline" style="font-size:25px;"></i>
              </a>
            </li>
          </ul>
        </div>


        <div class="navbar teal">
          <nav>
            <div style="border-bottom:1px solid grey" class="nav-wrapper">

              <ul class="container">
                <li><a class="btn-flat" style="padding-left:10px; padding-right:10px; margin:0px; color: white;" href="/"><b>HOME</b></a></li>
                <li><div class="divider" style="margin-top:20px; width:1px; height:25px;"></div></li>
                <li>
                  <a style="color: white; padding-left:15px; padding-right:15px; margin:0px;" class="dropdown-button btn-flat" data-beloworigin="true" href="#" data-activates="downdown"><b>GARMENTS</b></a>
                  <ul id="downdown" class="dropdown-content">
                    <li><a href="{{URL::to('/garmentSuit')}}">SUITS</a></li>
                    <li><a href="{{URL::to('/garmentGown')}}">GOWNS</a></li>
                    <li><a href="{{URL::to('/garmentUniformMale')}}">UNIFORMS for MALE</a></li>
                    <li><a href="{{URL::to('/garmentUniformFemale')}}">UNIFORMS for FEMALE</a></li>
                  </ul>
                </li>
                <li><div class="divider" style="margin-top:20px; width:1px; height:25px;"></div></li>
                <li>
                  <a style="color: white; padding-left:15px; padding-right:15px; margin:0px;" class="dropdown-button btn-flat" data-beloworigin="true" href="#" data-activates="alter"><b>ALTERATION</b></a>
                  <ul id="alter" class="dropdown-content">
                    <li><a href="{{URL::to('/alterationservices')}}">SERVICES</a></li>
                    <li><a href="{{URL::to('/alterationtransaction')}}">TRANSACTION</a></li>
                  </ul>
                </li>
                <li><div class="divider" style="margin-top:20px; width:1px; height:25px;"></div></li>
                <li><a class="btn-flat" style="padding-left:10px; padding-right:10px; margin:0px; color: white" href="{{URL::to('/orderTracking')}}"><b>ORDER TRACKING</b></a></li>
                <li><div class="divider" style="margin-top:20px; width:1px; height:25px;"></div></li>
                <li><a class="btn-flat" style="padding-left:10px; padding-right:10px; margin:0px; color: white" href="{{URL::to('/howitworks')}}"><b>HOW IT WORKS</b></a></li>                
              </ul>
              <ul id="shoppingcart" class="right" style="margin-right:-140px; margin-top:10px;">
                <li><a href="{{URL::to('/ordernow')}}" style="margin:0; padding:0;" class="btn-flat white-text">Shopping Cart</a></li>
                <li><a href="{{URL::to('/ordernow')}}" style="margin:0; padding:0;" class="btn-flat"><i class="white-text mdi-action-shopping-cart" style="font-size:30px; margin-top:-15px;"></i></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </nav>

      <!--
      <div class="right">
        <a href="{{URL::to('/ordernow')}}" class="btn-flat white-text" style="margin-right:-50px">Shopping Cart</a>
        <a href="{{URL::to('/ordernow')}}" class="btn-flat"><i class="white-text mdi-action-shopping-cart" style="font-size:30px;"></i></a>
      </div>
      -->

    
      <!--MODAL FOR LOG IN-->

      <div id="modalLogin" class="modal" style = "max-width:30%; max-height:70%;">
        <div class="modal-content">
          <h4>Log In</h4>
          <div class="row">
            <div class="input-field col s12">
                <i class="mdi-social-person-outline prefix"></i>
                <input class="validate" id="email" type="email">
                <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
            </div>
          </div>

              <div class="row">
                  <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password">
                    <label for="password">Password</label>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Log in</a>          
        </div>
      </div>

      <!--MODAL FOR SIGN UP-->
      <div id="modalSignupInd" class="modal modal-fixed-footer">
        <div class="modal-content">
          <div class = "col s12">
            <center><h4>Individual Customer</h4></center>
          </div>

          <div class="input-field">
            <input pattern="[A-Za-z ]+" id="addFName" name = "addFName" type="text" class="validate" required>
            <label for="first_name"> First Name: </label>
          </div>

          <div class="input-field">
            <input pattern="[A-Za-z\' ]+" id="addLName" name = "addLName" type="text" class="validate" required>
            <label for="last_name"> Last Name </label>
          </div>

          <div class="input-field">
            <input id="addAddress" name = "addAddress" type="text" class="validate" required>
            <label for="address"> Address: </label>
          </div>

          <div class="input-field">
            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="addEmail" name = "addEmail" type="text" class="validate">
            <label for="email"> Email Address: </label>
          </div>

          <div class="input-field">
            <input pattern="[^1-9][^0-8]+\d{9}" id="addCel" name = "addCel" type="text" class="validate" required>
            <label for="cellphone"> Cellphone Number: </label>
          </div>

          <div class="input-field">
            <input pattern="[0-9]{7}" id="addPhone" name = "addPhone" type="text" class="validate">
            <label for="tel"> Telephone Number: </label>
          </div>
    
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Sign Up</a>          
        </div>
      </div>

      <div id="modalSignupCom" class="modal modal-fixed-footer">
        <div class="modal-content">
          <div class = "col s12">
            <center><h4>Company Customer</h4></center>
          </div>

          <div class="input-field">
            <input required pattern="[A-Za-z\'., ]+" id="addComName" name = "addComName" type="text" class="validate">
            <label for="company_name"> Company Name: </label>
          </div>

          <div class="input-field">
            <input required="" id="addAddress" name = "addAddress" type="text" class="validate">
            <label for="address"> Address: </label>
          </div>

          <div class="input-field">
            <input required pattern="[A-Za-z\' ]+" id="addConPerson" name = "addConPerson" type="text" class="validate">
            <label for="company_name"> Contact Person: </label>
          </div>

          <div class="input-field">
            <input required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="addComEmailAdd" name = "addComEmailAddress" type="text" class="validate">
            <label for="com_email_address"> Company Email Address: </label>
          </div>

          <div class="input-field">
            <input required pattern="[^1-9][^0-8]+\d{9}" id="addCel" name = "addCel" type="text" class="validate">
            <label for="cellphone"> Cellphone Number: </label>
          </div>

          <div class="input-field">
            <input pattern="[0-9]{7}" id="addPhone" name = "addPhone" type="text" class="validate">
            <label for="tel"> Telephone Number: </label>
          </div>

          <div class="input-field">
            <input pattern="[0-9]{7}" id="addFax" name = "addFax" type="text" class="validate">
            <label for="fax"> Fax Number: </label>
          </div>

        </div>

        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Sign Up</a>          
        </div>
      </div>

      


      <main>
        <div style="height:40px;"></div>
        @yield('content')

        <footer class="fixed-footer">
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
                Copyright © myTailor. All rights reserved.
                </div>
              </div>
            </div>
        </footer>
      </main>


      {{ HTML::script('js/jquery-2.1.4.min.js') }}
      {{ HTML::script('js/materialize.min.js') }}
      
      <script>

      $(document).ready(function(){
        $('.dropdown-button').dropdown({
          inDuration: 500,
          outDuration: 300,
          constrain_width: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: false, // Displays dropdown below the button
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        });
      });
          
      </script>

      <script type="text/javascript">

      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      });

      </script>

      <script>
       $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
      });
      </script>

      <script>
        $('.fixed-action-btn').openFAB();
        $('.fixed-action-btn').closeFAB();
      </script>

        @yield('scripts')



    </body>


</html>