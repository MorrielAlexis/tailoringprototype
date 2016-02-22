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

      <nav>
        <div class="navbar">
          <nav style="height:30px">
            <div class="nav-wrapper">
              <a style="margin-left:20px" href="#!" class="brand-logo">LOGO</a>
              <ul class="right hide-on-med-and-down">
                <li><div class="chip-flat"><a style="color: black" href="#!"><b>Log in</b></a></div></li>
                <li><div class="chip-flat"><a style="color: black" href="#!"><b>Sign Up</b></a></div></li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="navbar">
          <nav>
            <div class="nav-wrapper">
              <ul class="right">
              <li><a class="btn-flat" style="color: black" href="#!"><b>HOME</b></a></li>
              <div class="verticalLine"></div>
              <li>
                <a style="color: black" class="dropdown-button btn-flat" data-beloworigin="true" href="#" data-activates="downdown"><b>GARMENTS</b></a>
                <ul id="downdown" class="dropdown-content">
                  <li><a href="#!">UNIFORMS</a></li>
                  <li><a href="#!">GOWNS</a></li>
                  <li><a href="#!">SUITS</a></li>
                </ul>
              </li>
              <li><a class="btn-flat" style="color: black" href="#!"><b>ORDER NOW</b></a></li>
              <li><a class="btn-flat" style="color: black" href="#!"><b>ORDER TRACKING</b></a></li>
              <li><a class="btn-flat" style="color: black" href="#!"><b>HOW IT WORKS</b></a></li>
              <li><a class="btn-flat" style="color: black" href="#!"><b>ABOUT US</b></a></li>
            </div>
          </nav>
        </div>
      </nav>

      



      <main>
        @yield('content')
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
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        });
      });
          
      </script>

        @yield('scripts')
    </body>

</html>