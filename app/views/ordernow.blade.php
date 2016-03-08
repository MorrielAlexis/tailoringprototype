@extends('layouts.master')

@section('content')

  <div class="section container white" style="width:90%; margin-top:20px; margin-bottom:20px;"> 

      <div>
        <a style="margin-left:20px;" href="/"><i style="size:20px;" class="mdi-hardware-keyboard-arrow-left"></i>CONTINUE SHOPPING</a>
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

                    <a class="right" style="padding:0px; margin-right:5px;" href="#!">REMOVE</a>
                    <p class = "input-field" style="width:90%; margin-top:55px;">
                      <input class="center" id = "price" value = "PHP 1,400.00" name = "price" type = "text" readonly>
                      <label for = "price"><font size="+1" color="green"><b>PRICE:</b></font></label>
                    </p>
              
                    <div class="input-field">
                      <div class="row">
                        <div class="col s3"><i class="small mdi-content-add-circle" style="color:teal"></i></div>
                        <div class="col s6">
                          <input class="center" id="quantity" value="1" type="text" readonly>
                        </div>
                        <div class="col s3" style="margin-left:-15px;"><i class="small mdi-content-remove-circle" style="color:teal"></i></div>
                      </div>
                    </div>
      
                  </div>
                </div>

              <div>
                <p class="center" style="margin-top:-20px; color:green;">Please specify measurement</p>
                <center><a style="width:95%;" class="btn-flat modal-trigger hoverable teal white-text" href="#modalMeas">MEASUREMENT</a></center>
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

                    <a class="right" style="padding:0px; margin-right:5px;" href="#!">REMOVE</a>
                    <p class = "input-field" style="width:90%; margin-top:55px;">
                      <input class="center" id = "price" value = "PHP 2,700.00" name = "price" type = "text" readonly>
                      <label for = "price"><font size="+1" color="green"><b>PRICE:</b></font></label>
                    </p>
              
                    <div class="input-field">
                      <div class="row">
                        <div class="col s3"><i class="small mdi-content-add-circle" style="color:teal"></i></div>
                        <div class="col s6">
                          <input class="center" id="quantity" value="1" type="text" readonly>
                        </div>
                        <div class="col s3" style="margin-left:-15px;"><i class="small mdi-content-remove-circle" style="color:teal"></i></div>
                      </div>
                    </div>
      
                  </div>
                </div>

              <div>
                <p class="center" style="margin-top:-20px; color:green;">Please specify measurement</p>
                <center><a style="width:95%;" class="btn-flat modal-trigger hoverable teal white-text" href="#modalMeas">MEASUREMENT</a></center>
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
          <a class="btn" style="width:90%; background:#e53935; height:60px; padding:10px;" href="/checkout">PROCEED TO CHECKOUT</a>
        </div>
      </div>

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
          <a class="btn-flat hoverable teal white-text" href="#!">LOG IN</a>
        </div>
      </div>

      <div class="row">
        <div class="col s2">
          <img style="margin-top:10px;" class = "responsive-img" src="img/measure_body.jpg">
        </div>
        <div class="col s10">
          <h5>Body measurements</h5>
          <p>Our measurement guide will help you take your body measurements with illustrated instructions.</p>
          <a class="btn-flat hoverable teal white-text" href="#!">ADD YOUR BODY MEASUREMENTS</a>
        </div>
      </div>

      <div class="row">
        <div class="col s2">
          <img style="margin-top:10px;" class = "responsive-img" src="img/measure_shirt.jpg">
        </div>
        <div class="col s10">
          <h5>Shirt measurements</h5>
          <p>Follow our guide to measure your favorite shirt!</p>
          <a class="btn-flat hoverable teal white-text" href="#!">ADD MEASUREMENTS FROM A SHIRT</a>
        </div>
      </div>

    </div>

    <div class="modal-footer">                  
      <button type="button" onclick="clearData()" class=" modal-action modal-close waves-effect waves-green btn-flat">CANCEL</a>                    
    </div>
  </div>

@stop

@section('scripts')  
  
    
@stop   
