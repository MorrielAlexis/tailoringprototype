<!DOCTYPE html>
<html>
	<head>
		<title>Tailoring</title>

		{{ HTML::style('css/materialize.min.css') }}
      	{{ HTML::style('css/style.css') }}

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	</head>

	<body>

		<ul id="dropdownCus" class="dropdown-content">
  			<li><a href="/order">Individual</a></li>
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
	</body>

	<script>

	$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 10, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
	</script>

	{{ HTML::script('js/jquery-2.1.4.min.js') }}
 {{ HTML::script('js/materialize.min.js') }}
        
</html>