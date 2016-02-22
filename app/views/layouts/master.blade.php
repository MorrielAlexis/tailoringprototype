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
              <a style="margin-left:30px; margin-top:10px; padding-left:10px; padding-right:10px; background:teal; height:40px;" href="/" class="brand-logo"><i class="tiny material-icons">favorite</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn-flat modal-trigger" href="#modalLogin"><b>Login</b></a></li>
                <li><a style="padding:0; color: black" class="dropdown-button btn-flat" data-beloworigin="true" href="#" data-activates="down"><b>Sign Up</b></a>
                <ul id="down" class="dropdown-content">
                  <li><a class="waves-effect waves-light btn-flat modal-trigger" href="#modalSignupInd">INDIVIDUAL</a></li>
                  <li><a class="waves-effect waves-light btn-flat modal-trigger" href="#modalSignupCom">COMPANY</a></li>
                </ul>
              </ul>
            </div>
          </nav>
        </div>

        <div class="navbar teal">
          <nav>
              <div class="nav-wrapper">
                <ul class="right">
                  <li><a class="btn-flat hoverable" style="padding:0; color: black;" href="/"><b>HOME</b></a></li>
                  <li>
                    <a style="color: black" class="dropdown-button btn-flat hoverable" data-beloworigin="true" href="#" data-activates="downdown"><b>GARMENTS</b></a>
                    <ul id="downdown" class="dropdown-content">
                      <li><a href="#!">UNIFORMS</a></li>
                      <li><a href="#!">GOWNS</a></li>
                      <li><a href="#!">SUITS</a></li>
                    </ul>
                  </li>
                  <li><a class="btn-flat hoverable" style="padding:0; color: black" href="/ordernow"><b>ORDER NOW</b></a></li>
                  <li><a class="btn-flat hoverable" style="padding:0; color: black" href="#!"><b>ORDER TRACKING</b></a></li>
                  <li><a class="btn-flat hoverable" style="padding:0; color: black" href="/howitworks"><b>HOW IT WORKS</b></a></li>
                  <li><a class="btn-flat hoverable" style="padding:0; color: black" href="#!"><b>ABOUT US</b></a></li>
                  </ul>
              </div>
          </nav>
        </div>
      </nav>


    
      <!--MODAL FOR LOG IN-->

      <div id="modalLogin" class="modal modal-fixed-footer">
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
            <input value = "Indi001" id="addIndiID" name="addIndiID" type="text" class="validate" readonly>
            <label for="indi_id">Individual ID: </label>
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
            <input value="Com001" id="addComID" name="addComID" type="text" class="validate" readonly>
            <label for="company_id">Company ID: </label>
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
        <div style="height:30px;"></div>
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
          hover: false, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: false, // Displays dropdown below the button
          alignment: 'right' // Displays dropdown with edge aligned to the left of button
        });
      });
          
      </script>

      <script type="text/javascript">

      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });

      </script>

        @yield('scripts')



    </body>


</html>