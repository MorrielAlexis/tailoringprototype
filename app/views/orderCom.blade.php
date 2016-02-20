<!DOCTYPE html>
{{ HTML::style('css/materialize.min.css') }}
{{ HTML::style('css/style.css') }}

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<html>
<head>
  
</head>



<body>

  <ul id="dropdownCus" class="dropdown-content">
    <li><a href="/orderIndi">Individual</a></li>
    <li><a href="/orderCom">Company</a></li>
  </ul>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="badges.html">Men Suiting</a></li>
        <li><a href="collapsible.html">Women Suiting</a></li>
        <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="dropdownCus">Order Now<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="collapsible.html">How it Works</a></li>
        <li><a href="collapsible.html">Order Tracking</a></li>
        <li><a href="collapsible.html">About Us</a></li>
      </ul>
    </div>
  </nav>

  <div class = "container">

    <div class = "row">
      <div class = "col s12 m12 l12">
        <div class = "card-panel">
          <span class = "card title"><h4><center>Company Customer Profile</center></h4></span>
          <div class= "divider"></div>
          <div class = "card-content">

            <div class="row">
              <form class="col s12 m12 l12">
                <h5>Company Information</h5>
                <div class="row">

                  <div class="input-field col s12">
                    <input id="comName" type="text" class="validate">
                    <label for="com_name">*Company Name</label>
                  </div>
                </div>

                <h5>Contact Details</h5>
                <div class = "row">

                  <div class="input-field col s4">
                    <input id="address" type="text" class="validate">
                    <label for="address">*Address</label>
                  </div>

                  <div class="input-field col s4">
                    <input id="conPerson" type="text" class="validate">
                    <label for="conPerson">*Contact Person</label>
                  </div>

                  <div class="input-field col s4">
                    <input id="comEmailAddress" type="text" class="validate">
                    <label for="comEmailAddress">*Company Email Address</label>
                  </div>
                </div>

                <div class = "row">
                  <div class="input-field col s4">
                    <input id="cellphone" type="text" class="validate">
                    <label for="cellphone">*Cellphone Number:</label>                    
                  </div>

                  <div class="input-field col s4">
                    <input id="telephone" type="text" class="validate">
                    <label for="telephone">*Telephone Number:</label>
                  </div>

                  <div class="input-field col s4">
                    <input id="fax" type="text" class="validate">
                    <label for="fax">*Fax Number:</label>
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
              <div class = "col s12 m12 l12">

                <div class="input-field col s4">
                  <select>
                    <option value="" disabled selected>Choose your Garment</option>
                    <option value="1">Tuxedo</option>
                    <option value="2">Gown</option>
                    <option value="3">Uniform</option>
                  </select>
                  <label>Garment Type</label>
                </div>

                <div class="input-field col s4">
                  <select>
                    <option value="" disabled selected>Choose your Garment Segment</option>
                    <option value="1">Coat</option>
                    <option value="2">Long Sleeve</option>
                    <option value="3">Pants</option>
                  </select>
                  <label>Garment Segment Type</label>
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
    $( document ).ready(function() {
    
      $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
      });

      $('select').material_select();

    });
</script>




</body>
</html>