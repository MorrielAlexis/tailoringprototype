<!DOCTYPE html>
{{ HTML::style('css/materialize.min.css') }}
{{ HTML::style('css/style.css') }}

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<html>
<head>
  
</head>



<body>

  <ul id="dropdownCus" class="dropdown-content">
    <li><a href="order">Individual</a></li>
    <li><a href="#!">Company</a></li>
  </ul>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">Men Suiting</a></li>
        <li><a href="collapsible.html">Women Suiting</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdownCus">Order Now<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="collapsible.html">How it Works</a></li>
        <li><a href="collapsible.html">Order Tracking</a></li>
        <li><a href="collapsible.html">About Us</a></li>
      </ul>
    </div>
  </nav>

  <div class = "row">
    <div class = "col s12 m12 l12">
      <div class = "card-panel">

        <div class = "card-content">

          <div class = "row">
            <div class = "col s12 m12 l12">
              <div class = "card-panel">
                <span class = "card title"><h4><center>Customer Profile</center></h4></span>
                <div class= "divider"></div>
                <div class = "card-content">

                  <div class="row">
                    <form class="col s12">
                      <h5>Personal Information</h5>
                      <div class="row">

                        <div class="input-field col s4">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">*First Name</label>
                        </div>

                        <div class="input-field col s4">
                          <input id="middle_name" type="text" class="validate">
                          <label for="middle_name">Middle Name</label>
                        </div>

                        <div class="input-field col s4">
                          <input id="last_name" type="text" class="validate">
                          <label for="last_name">*Last Name</label>
                        </div>
                      </div>

                      <h5>Contact Details</h5>
                      <div class = "row">

                        <div class="input-field col s3">
                          <input id="address" type="text" class="validate">
                          <label for="address">*Address</label>
                        </div>

                        <div class="input-field col s3">
                          <input id="emailaddress" type="text" class="validate">
                          <label for="emailaddress">*Email Address</label>
                        </div>

                        <div class="input-field col s3">
                          <input id="cellphone" type="text" class="validate">
                          <label for="cellphone">*Cellphone Number:</label>                    
                        </div>

                        <div class="input-field col s3">
                          <input id="telephone" type="text" class="validate">
                          <label for="telephone">*Telephone Number:</label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>   
            </div>
          </div>


          <div class = "row">
            <div class = "col s12 m12 l12">
              <div class= "card-panel">
                <span class = "card title"><h4><center>Garment Details</center></h4></span>
                <div class= "divider"></div>
                <div class = "card-content">

                  <div class = "row">
                    <div class = "col s12">

                      <div class="input-field col s4">
                        <select>
                          <option value="" disabled selected>Choose your Garment</option>
                          <option value="1">Tuxedo</option>
                          <option value="2">Gown</option>
                          <option value="3">Uniform</option>
                        </select>
                        <label>Garment Type</label>
                      </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>

  

  

        
{{ HTML::script('js/jquery-2.1.4.min.js') }}
 {{ HTML::script('js/materialize.min.js') }}

 <script>
    $(document).ready(function() {
    $('select').material_select();
  });
         
 </script>


</body>
</html>