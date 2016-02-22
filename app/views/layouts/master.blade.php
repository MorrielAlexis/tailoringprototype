<!DOCTYPE html>
<html>
    <head>

      <title>Customer Module</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      {{ HTML::style('css/materialize.min.css') }}
      {{ HTML::style('css/style.css') }}

      <style>

      
      </style>
    </head>

    <body>

    <header>
      <nav>
        <div class="navbar">
          <nav style="height:40px">
            <div class="nav-wrapper">
              <a style="margin-left:20px; margin-top:10px; background:teal; height:40px;" href="/" class="brand-logo"><i class="tiny material-icons">favorite</i></a>
              <ul class="right hide-on-med-and-down">
                <li><div><a style="color: black" href="#!"><b>Log in</b></a></div></li>
                <li><div><a style="color: black" href="#!"><b>Sign Up</b></a></div></li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="navbar">
          <nav>
            <div class="nav-wrapper">
              <ul class="right">
              <li><a class="btn-flat" style="padding:0; color: black;" href="/"><b>HOME</b></a></li>
              <li>
                <a class="btn-flat" style="padding:0; color: black" class="dropdown-button btn-flat" data-beloworigin="true" href="#" data-activates="downdown"><b>GARMENTS</b></a>
                <ul id="downdown" class="dropdown-content">
                  <li><a href="#!">UNIFORMS</a></li>
                  <li><a href="#!">GOWNS</a></li>
                  <li><a href="#!">SUITS</a></li>
                </ul>
              </li>
              <li><a class="btn-flat" style="padding:0; color: black" href="/ordernow"><b>ORDER NOW</b></a></li>
              <li><a class="btn-flat" style="padding:0; color: black" href="#!"><b>ORDER TRACKING</b></a></li>
              <li><a class="btn-flat" style="padding:0; color: black" href="/howitworks"><b>HOW IT WORKS</b></a></li>
              <li><a class="btn-flat" style="padding:0; color: black" href="#!"><b>ABOUT US</b></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </nav>
    </header>
    
      <!--MODAL FOR LOG IN-->

      <!--MODAL FOR SIGN UP-->
      


      <main>
        @yield('content')

        <footer>
          <div style="background-color:#cccccc" class="page-footer">
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
                © 2016 Copyright Chuvaness.
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
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
          inDuration: 300,
          outDuration: 225,
          constrain_width: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: false, // Displays dropdown below the button
          alignment: 'bottom' // Displays dropdown with edge aligned to the left of button
        });
      });
          
      </script>

        @yield('scripts')



    </body>


</html>