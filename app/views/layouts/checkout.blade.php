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

    <body>


      <nav>
        <div class="nav-wrapper teal accent-4">
          <div class="col s12">
            <a href="#checkoutLogin" class="breadcrumb active">Login</a>
            <a href="#checkoutShipping" class="breadcrumb">Shipping</a>
            <a href="#checkoutPayment" class="breadcrumb">Payment</a>
          </div>
        </div>
      </nav>
      
      <!--LOGIN TAB-->
      <div id="checkoutLogin" class="col s12 white" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">
        <div style="height:20px;"></div>

        <div class="container">
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
                <div class="btn red darken-1 white-text container" style="width:100%;" href="#tabshipping">CONTINUE</div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END OF LOGIN TAB-->

      <!--SHIPPING TAB-->
      <div id="checkoutShipping" class="col s12 white" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">
        <div style="height:20px;"></div>

          <div class="container">
            <div style="padding:5px; border: 1px solid #00bfa5; margin-bottom:20px;">
              <h6 style="margin-left:20px;"><b>Your shipping address</b></h6>
              <div class="divider"></div>
              
              <div class="container" style="margin-top:40px; margin-bottom:40px;">
                <div class="input-field">
                  <input id ="name" type="text" class="validate">
                  <label for="name">First & Last Name</label>
                </div>
                <div class="input-field">
                  <input id ="address" type="text" class="validate">
                  <label for="address">Complete Address</label>
                </div>
                <div class="input-field">
                  <input id ="province" type="text" class="validate">
                  <label for="province">Province</label>
                </div>
                <div class="input-field">
                  <input id ="city" type="text" class="validate">
                  <label for="city">City / Municipality</label>
                </div>
                <div class="input-field">
                  <input id ="brgy" type="text" class="validate">
                  <label for="brgy">Barangay</label>
                </div>
                <div class="input-field">
                  <input id ="number" type="text" class="validate">
                  <label for="number">Mobile Number</label>
                </div>

                <div class="container">
                  <center><h5 style="color:#e53935">Standard Delivery</h5></center>
                  <p class = "input-field">
                            <b><input class="center" id = "deliverydate" value = "14 Mar - 15 Mar" name = "deliverydate" type = "text" readonly></b>
                        </p>
                    </div>

                <div class="btn red darken-1 white-text container" style=" margin-top:20px; width:100%; padding:5px; height:50px;" href="#tabshipping">CONTINUE</div>
              </div>

            </div>

          </div>
      </div>
      <!--END OF SHIPPING TAB-->

      <!--PAYMENT TAB-->
      <div id="checkoutPayment" class="col s12 white" style="margin-left:11px; width:97.8%; border: 1px solid #00bfa5;">
        <div style="height:20px;"></div>

        <div class="row">
          <div class="col s4">
            <div style="border: 1px solid #00bfa5; margin-bottom:20px;">
              <h6 style="margin-left:20px;"><b>Shipping and Billing address</b><span class="blue-text" href="#!">  Edit</span></h6>
              <div class="divider"></div>
              
              <div class="container" style="margin-top:40px; margin-bottom:40px;">
                <div class="input-field">
                              <p><input class="center" placeholder="Full Name" id = "name" value = "" name = "name" type = "text" readonly></p>
                              <input class="center" placeholder="Complete Address" id = "completeaddress" value = "" name = "completeaddress" type = "text" readonly>
                              <input class="center" placeholder="Province - City - Brgy" id = "address" value = "" name = "address" type = "text" readonly>
                              <input class="center" placeholder="Mobile Number" id = "mobilenumber" value = "" name = "mobilenumber" type = "text" readonly>
                      </div>
              </div>

            </div>
          </div>

          <div class="col s8">
            <div style="padding:5px; border: 1px solid #00bfa5;">
              <h6 class="green-text"><b>Order Summary</b> (2 items)</h6>
              <div class="divider"></div>
              <table class="responsive-table" style="margin-top:10px; margin-bottom:10px;">
                <thead>
                  <tr style="background-color:grey lighten-3;">
                    <th class="left-align"><font size="-1">PRODUCT</font></th>
                    <th class="center"><font size="-1">QUANTITY</font></th>
                    <th class="right-align"><font size="-1">PRICE</font></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Women's Uniform</td>
                    <td class="center">1</td>
                    <td class="right">1,700.00</td>
                  </tr>
                  <tr>
                    <td>Gown</td>
                    <td class="center">1</td>
                    <td class="right">2,400.00</td>
                  </tr>
                </tbody>
              </table>

              <div class="divider"></div>
              <div class="row" style="margin-top:10px; margin-bottom:10px;">
                <h6 class="col s6 blue-text"><b>Standard Delivery</b></h6>
                        <p class = "col s6 input-field" style="margin-top:-1px;">
                          <b><input class="center" id = "deliverydate" value = "14 Mar - 15 Mar" name = "deliverydate" type = "text" readonly></b>
                        </p>
                    </div>
              <div class="divider"></div>
              <div class="row" style="margin-top:10px; margin-bottom:10px;">
                        <p class="col s6"><b>Subtotal</b></p>
                        <p class = "col s6 input-field" style="margin-top:-1px;">
                          <input class="center" id = "subtotal" value = "P 4,100.00" name = "subtotal" type = "text" readonly>
                        </p>
                    </div>
                    <div class="divider"></div>
                    <div class="row" style="margin-top:10px; margin-bottom:10px;">
                      <p class="col s6 red-text darken-1"><font size="+1"><b>TOTAL</b></font></p>
                      <p class = "col s6 input-field" style="margin-top:-0px;">
                        <b><input class="center red-text darken-1" id = "total" value = "P 4,100.00" name = "total" type = "text" readonly></b>
                      </p>
                  </div>

            </div>

            <div class="btn red darken-1 white-text container" style="width:100%; height:40px; margin-top:20px;" href="#!"><i class="mdi-action-lock"></i>PLACE YOUR ORDER</div>

          </div>

        </div>    
      </div>
      <!--END OF PAYMENT TAB-->




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