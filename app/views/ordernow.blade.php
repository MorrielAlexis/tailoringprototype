@extends('layouts.master')

@section('content')

  <div class="section white"> 

    <div id="backyy" style="height:300px; margin-top: -15px; background-image:url('img/headone.jpg')">
      <div style="height:70px"></div>
      <center><h1 style="color:white; font-family:'Playfair Display','Times';">Order Now</h1></center>
    </div>

    <div class="divider"></div>
    <div style= "height:20px;"></div>

    <div class="row">
      <div class="col s6">
        <a class="btn blue" style="margin-left:20px;" href="/"><i class="small material-icons">keyboard_arrow_left</i>CONTINUE SHOPPING</a>
      </div>
      <div class="col s6">
        <a class="btn right" style="margin-right:20px; background:#e53935;" href="/checkout"><i class="small material-icons">shopping_cart</i> PROCEED TO CHECKOUT</a>
      </div>
    </div>

    <div class="divider"></div>

      <h5><p align="center">Here is the list of your order</p></h5>

    <div class="row">
      <div class="col s4">
        <div class="right">
          <img class = "responsive-img" src="imgUniform/uni4.jpg" style="border: 2px dashed teal; height:200px; width:300px;">
        </div>
      </div>
      <div class="col s8">
        <div class="row">
          <div class="col s4">
            <p align="center"><font size="+1" color="teal"><b>Women's Uniform</b></font></p>
            <p>
              <ul class="container">
                <li>Long Sleeves</li>
                <li>Skirt</li>
              </ul>
            </p>
            <div style="margin-top:40px" class="input-field">
              <i class="material-icons prefix" style="color:teal">add_box</i>
              <input value="1" id="icon_prefix" type="text" class="validate">
              <label class="active" for="icon_prefix">Quantity</label>
            </div>
          </div>
          <div class="col s5">
            <div style="height:10px"></div>
            <div class="container">
              <a class="btn-flat hoverable teal white-text" href="#!">REMOVE</a>
            </div>

            <div style="height:10px"></div>

            <div class="container">
              <a class="btn-flat hoverable teal white-text" href="#!">CHANGE</a>
            </div>

            <div style="height:10px"></div>

            <div>
              <p style="margin-top:20px; color:green;">Please specify measurement</p>
              <a style="margin-left:10px" class="btn-flat modal-trigger hoverable teal white-text" href="#modalMeas">MEASUREMENT</a>
            </div>
          </div>
          <div class="col s3">
            <p style="margin-top:70px" class = "input-field">
              <input id = "price" value = "PHP 1,400.00" name = "price" type = "text" readonly>
              <label for = "price"><font size="+1" color="green"><b>PRICE:</b></font></label>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="divider"></div>
    <div style="height:30px;"></div>

    <div class="row">
      <div class="col s4">
        <div class="right">
          <img class = "responsive-img" src="imgGown/gown2.jpg" style="border: 2px dashed teal; height:200px; width:300px;">
        </div>
      </div>
      <div class="col s8">
        <div class="row">
          <div class="col s4">
            <p align="center"><font size="+1" color="teal"><b>Gown</b></font></p>
            <p>
              <ul class="container">
                <li>Tube</li>
                <li>Cocktail</li>
              </ul>
            </p>
            <div style="margin-top:40px" class="input-field">
              <i class="material-icons prefix" style="color:teal">add_box</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Quantity</label>
            </div>
          </div>
          <div class="col s5">
            <div style="height:10px"></div>
            <div class="container">
              <a class="btn-flat hoverable teal white-text" href="#!">REMOVE</a>
            </div>

            <div style="height:10px"></div>

            <div class="container">
              <a class="btn-flat hoverable teal white-text" href="#!">CHANGE</a>
            </div>

            <div style="height:10px"></div>

            <div>
              <p style="margin-top:20px; color:green;">Please specify measurement</p>
              <a style="margin-left:10px" class="btn-flat modal-trigger hoverable teal white-text" href="modalMeas">MEASUREMENT</a>
            </div>
          </div>
          <div class="col s3">
            <p style="margin-top:70px" class = "input-field">
              <input id = "price" value = "PHP 2,700.00" name = "price" type = "text" readonly>
              <label for = "price"><font size="+1" color="green"><b>PRICE:</b></font></label>
            </p>
          </div>
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