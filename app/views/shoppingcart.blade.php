@extends('layouts.master')

@section('content')

<div class="section container" style="padding:20px; width:95%; margin-top:20px; margin-bottom:20px;">
  
  <center><h1 style="color:white; font-family:'Playfair Display','Times';">Shopping Cart</h1></center>
  <div class="divider" style="margin-bottom:15px;"></div>

</div>

  <div class="section container white" style="width:90%; margin-top:20px; margin-bottom:20px;"> 

      <div>
        <a style="margin-left:20px;" href="{{URL::to('/homepage')}}"><i style="size:20px;" class="mdi-hardware-keyboard-arrow-left"></i>CONTINUE SHOPPING</a>
      </div>

    <div class="divider" style="margin-top:5px;"></div>

    <div class="row">

      <div class="col s8">
        <h5 style="margin-left:20px; margin-top:20px; ">My shopping cart</h5>
        <div class="row">
          <div class="col s6">
            <h6 style="padding-left:20px;">2 ITEMS</h6>
          </div>
          <div class="col s6">
            <h6>ITEM DESCRIPTION</h6>
          </div>
        </div>

        <div class="container" style="width:95%; margin-top:-15px;">

          <!--Order 1-->
          <div class="grey lighten-3">
            <div class="row">

              <div class="col s6">
                <img style="padding:20px;" class = "responsive-img" src="imgUniform/uni4.jpg">
              </div>

              <div class="col s6">
                <div class="row">

                  <div class="col s7">
                    <p style="margin-top:30px;"><font size="+1">Women's Uniform</font></p>
                    <ul>
                      <li>Long Sleeves</li>
                      <li>Skirt</li>
                    </ul>
                  </div>

                  <div class="col s5">

                    <a class="right" style="padding:0px; margin-right:5px;" href="#!"><i style="color:grey" class="material-icons right">close</i></a>
                    <p class = "input-field" style="width:90%; margin-top:55px;">
                      <input class="center" id = "price" value = "PHP 1,400.00" name = "price" type = "text" readonly>
                      <label for = "price"><font size="+1" color="green"><b>PRICE:</b></font></label>
                    </p>

                  </div>

                  <div class="divider container" style"color:teal accent-4;"></div>

                  <form action="uniform">
                    <p>
                      <input class="with-gap" name="onlineshop" type="radio" id="shop"/>
                        <label for="shop">Go to shop for measurement</label>
                    </p>
                    <p>
                        <input class="with-gap" name="onlineshop" type="radio" id="online"/>
                        <label for="online">Submit measurement online</label>
                    </p>
                  </form>

                </div>
              </div>
            </div>


            <div class="row" style="margin-top:-20px;">
              <div class="col s6">
                <center><h6>Quantity</h6></center>
                <div class="container">
                  <div class="row">
                    <div class="col s3"><i class="small mdi-content-add-circle" style="color:teal"></i></div>
                    <div class="input-field col s6" style="margin-top:-2px;">
                      <input class="center" id="quantity" value="1" type="text" readonly>
                    </div>
                    <div class="col s3"><i class="small mdi-content-remove-circle" style="color:teal"></i></div>
                  </div>
                </div>
              </div>

              <div class="col s6">
                <div style="margin-right:10px;">
                  <center><a style="width:100%;" class="btn-flat disabled modal-trigger hoverable teal white-text" href="#modalMeas">MEASUREMENT</a></center>

                  <center><a style="width:100%; margin-top:10px;" class="btn-flat modal-trigger hoverable teal white-text" href="{{URL::to('/customizeorder')}}">CUSTOMIZE ORDER</a></center>
                </div>
              </div>
            </div>

          </div>
          
          <!--Order 2-->
          <div class="grey lighten-3">
            <div class="row">

              <div class="col s6">
                <img style="padding:20px;" class = "responsive-img" src="imgGown/gown2.jpg">
              </div>

              <div class="col s6">
                <div class="row">

                  <div class="col s7">
                    <p style="margin-top:30px;"><font size="+1">Gown</font></p>
                    <ul>
                      <li>Tube</li>
                      <li>Cocktail</li>
                    </ul>
                  </div>

                  <div class="col s5">

                    <a class="right" style="padding:0px; margin-right:5px;" href="#!"><i style="color:grey" class="material-icons right">close</i></a>
                    <p class = "input-field" style="width:90%; margin-top:55px;">
                      <input class="center" id = "price" value = "PHP 2,700.00" name = "price" type = "text" readonly>
                      <label for = "price"><font size="+1" color="green"><b>PRICE:</b></font></label>
                    </p>

                  </div>

                  <div class="divider container" style"color:teal accent-4;"></div>

                  <form action="gown">
                    <p>
                      <input class="with-gap" name="gownonlineshop" type="radio" id="gownshop"/>
                        <label for="gownshop">Go to shop for measurement</label>
                    </p>
                    <p>
                        <input class="with-gap" name="gownonlineshop" type="radio" id="gownonline"/>
                        <label for="gownonline">Submit measurement online</label>
                    </p>
                  </form>

                </div>
              </div>
            </div>


            <div class="row" style="margin-top:-20px;">
              <div class="col s6">
                <center><h6>Quantity</h6></center>
                <div class="container">
                  <div class="row">
                    <div class="col s3"><i class="small mdi-content-add-circle" style="color:teal"></i></div>
                    <div class="input-field col s6" style="margin-top:-2px;">
                      <input class="center" id="quantity" value="1" type="text" readonly>
                    </div>
                    <div class="col s3"><i class="small mdi-content-remove-circle" style="color:teal"></i></div>
                  </div>
                </div>
              </div>

              <div class="col s6">
                <div style="margin-right:10px;">
                  <center><a style="width:100%;" class="btn-flat disabled modal-trigger hoverable teal white-text" href="#modalMeas">MEASUREMENT</a></center>

                  <center><a style="width:100%; margin-top:10px;" class="btn-flat modal-trigger hoverable teal white-text" href="{{URL::to('/customizeorder')}}">CUSTOMIZE ORDER</a></center>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="col s4">
      <div style="height:55px;"></div>
          <p style="color:green;"><b>ORDER SUMMARY</b></p>
          <div class="divider" style="margin-top:-15px; width:90%;"></div>

              <div class="row container" style="width:95%;">
                <p class="col s6">Subtotal</p>
                <p class = "col s6 input-field" style="margin-top:-1px;">
                  <input class="center" id = "subtotal" value = "PHP 4,100.00" name = "subtotal" type = "text" readonly>
                </p>
              </div>

              <div class="row container" style="width:95%; margin-top:-20px;">
                <p class="col s6">Downpayment</p>
                <p class = "col s6 input-field" style="margin-top:-1px;">
                  <input class="center" id = "downpayment" value = "PHP 2,050.00" name = "downpayment" type = "text" readonly>
                </p>
              </div>
          
          <div class="divider" style="margin-top:-15px; width:90%;"></div>
          
          <div class="row container" style="width:95%;">
            <p class="col s6 red-text"><font size="+1"><b>TOTAL</b></font></p>
            <p class = "col s6 input-field" style="margin-top:-0px;">
                <b><input class="center" id = "total" value = "PHP 4,100.00" name = "total" type = "text" readonly></b>
            </p>
          </div>

        <div style="margin-top:-20px;">
          <a class="btn" style="width:90%; background:#e53935; height:60px; padding:10px;" href="{{URL::to('/checkout')}}">PROCEED TO CHECKOUT</a>
        </div>
      </div>

    </div>

  </div>

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


  <!--MODAL FOR MEASUREMENT-->
  <div id="modalMeas" class="modal modal-fixed-footer" style="width:700px">
    <div class="modal-content">

      <h3>Choose measurement</h3>
      <div class="divider"></div>
      <p>Our tailors can make your shirt to either your body or your favorite shirt measurements. For the best fit we recommend that you create your own measurements profile, otherwise we can adapt a standard size to your needs.</p>

      <div class="row">
        <div class="col s2">
          <img style="margin-top:10px;" class = "responsive-img" src="img/measure_exist.jpg">
        </div>
        <div class="col s10">
          <h5>I want to use previously added measurements</h5>
          <p>To use your profile please log in</p>
          <a class="btn-flat hoverable teal white-text" href="#modalLogin">LOG IN</a>
        </div>
      </div>

      <div class="row">
        <div class="col s2">
          <img style="margin-top:10px;" class = "responsive-img" src="img/measure_body.jpg">
        </div>
        <div class="col s10">
          <h5>Input a new set of measurements</h5>
          <p>Our measurement guide will help you take your body measurements with illustrated instructions.</p>
          <ul class="collapsible popout" data-collapsible="accordion">
            <li>
              <div class="collapsible-header pink accent-1"><i class="mdi-maps-local-florist"></i>MEASUREMENT FOR FEMALE</div>
              <div class="collapsible-body">
                <p class="pink-text accent-1"><b>For blazer, blouse, pants, and skirts</b></p>
                <div class="row">
                  <div class="col s6">
                    <ul>
                      <li>
                        <div class="input-field pink-text accent-1">
                          <input id="shoulder" type="text" class="validate">
                          <label for="shoulder">Shoulder:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="frontfigure" type="text" class="validate">
                          <label for="frontfigure">Front Figure:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="backfigure" type="text" class="validate">
                          <label for="backfigure">Back Figure:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="length" type="text" class="validate">
                          <label for="length">Length:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="bustline" type="text" class="validate">
                          <label for="bustline">Bust Line:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="bustpoint" type="text" class="validate">
                          <label for="bustpoint">Bust Point:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="bustdistance" type="text" class="validate">
                          <label for="bustdistance">Bust Distance:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="wasitline" type="text" class="validate">
                          <label for="wasitline">Waistline:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="firsthips" type="text" class="validate">
                          <label for="firsthips">1st Hips:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="secondhips" type="text" class="validate">
                          <label for="secondhips">2nd Hips:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="armhole" type="text" class="validate">
                          <label for="armhole">Armholearmhole:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="circumference" type="text" class="validate">
                          <label for="circumference">Circumference:</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col s6">
                    <ul>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="sleeves" type="text" class="validate">
                          <label for="sleeves">Short/Long Sleeves:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="cuffs" type="text" class="validate">
                          <label for="cuffs">Cuffs:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="neckline" type="text" class="validate">
                          <label for="neckline">Neckline:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="frontchest" type="text" class="validate">
                          <label for="frontchest">Front Chest:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="backchest" type="text" class="validate">
                          <label for="backchest">Back Chest:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="skirtlength" type="text" class="validate">
                          <label for="skirtlength">Length of Skirt:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="pantslength" type="text" class="validate">
                          <label for="pantslength">Length of Pants:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="hipsterwaist" type="text" class="validate">
                          <label for="hipsterwaist">Waist (Hipster):</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="crotch" type="text" class="validate">
                          <label for="crotch">Crotch:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="thigh" type="text" class="validate">
                          <label for="thigh">Thigh:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="knee" type="text" class="validate">
                          <label for="knee">Knee:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field pink-text lighten-4">
                          <input id="bottom" type="text" class="validate">
                          <label for="bottom">Bottom:</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header green accent-2"><i class="mdi-maps-directions-car"></i>MEASUREMENT FOR MALE</div>
              <div class="collapsible-body">
                <div class="row">
                  <div class="col s6">
                    <p class="green-text accent-2"><b>Polo</b></p>
                    <ul>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="shoulder" type="text" class="validate">
                          <label for="shoulder">Shoulder:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="bust" type="text" class="validate">
                          <label for="bust">Bust:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="waist" type="text" class="validate">
                          <label for="waist">Waist:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="hips" type="text" class="validate">
                          <label for="hips">Hips:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="neck" type="text" class="validate">
                          <label for="neck">Neck:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="length" type="text" class="validate">
                          <label for="length">Length:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="sleeves" type="text" class="validate">
                          <label for="sleeves">Sleeves:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="armhole" type="text" class="validate">
                          <label for="armhole">Armhole:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="circumference" type="text" class="validate">
                          <label for="circumference">Circumference:</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col s6">
                  <p class="green-text accent-2"><b>Pants</b></p>
                    <ul>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="crotch" type="text" class="validate">
                          <label for="crotch">Crotch:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="thigh" type="text" class="validate">
                          <label for="thigh">Thigh:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="knee" type="text" class="validate">
                          <label for="knee">Knee:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="bottom" type="text" class="validate">
                          <label for="bottom">Bottom:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="pantslength" type="text" class="validate">
                          <label for="pantslength">Pants Length:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="waist" type="text" class="validate">
                          <label for="waist">Waist:</label>
                        </div>
                      </li>
                      <li>
                        <div class="input-field green-text accent-2">
                          <input id="hip" type="text" class="validate">
                          <label for="hip">Hip:</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <a class="btn-flat hoverable teal white-text right" style="margin-right:25px;" href="#!">SUBMIT</a>
          <a class="btn-flat hoverable teal white-text right" style="margin-right:25px;" href="{{URL::to('/measuringTutorial')}}">GO TO TUTORIAL</a>
        </div>
      </div>

    </div>

    <div class="modal-footer">                  
      <button type="button" onclick="clearData()" class=" modal-action modal-close waves-effect waves-green btn-flat">CANCEL</a>                    
    </div>
  </div>

@stop

@section('scripts')  
    
    <script>
      $(document).ready(function(){
        $('.collapsible').collapsible({
          accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
      });

    </script>
    
@stop   
