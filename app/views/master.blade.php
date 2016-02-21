<!DOCTYPE html>
<html>
	<head>
		<title>Tailoring</title>

		{{ HTML::style('css/materialize.min.css') }}
    {{ HTML::style('css/style.css') }}

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	</head>

	<body>

	


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
  </body>        
</html>