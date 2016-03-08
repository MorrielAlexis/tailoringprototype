@extends('layouts.master')


@section('content')


            <div class="row" style="margin-top:20px; margin-bottom:20px;">
              <div class="col s12">

                <p>BREADCRUMB SHIT</p>

                 <nav>
                      <div class="nav-wrapper">
                        <div class="col s12">
                          <a href="/checkoutLogin" class="breadcrumb" style="color:black">Account Confirmation</a>
                          <a href="/checkoutPayment" class="breadcrumb" style="color:black">Payment</a>
                          <a href="/checkoutShipping" class="breadcrumb" style="color:black">Shipping</a>
                        </div>
                      </div>
                  </nav>

              </div>
            </div>

@stop

@section('scripts')  
    <script>
    $(document).ready(function(){

    });
    </script>
@stop   
