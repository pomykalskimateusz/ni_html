<!DOCTYPE html>
<html>
<head>
	<title>Restauracja</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="CSS/styles.css">
	<link rel="stylesheet" href="CSS/responsiveslides.css">
	<script src = "JS/scripts.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<script src="JS/responsiveslides.min.js"></script>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
</head>
<body>
<div class="container-fluid">
	<?php
		include_once('components/NavigationBar.php');
		include_once('components/MainPage.php');
		
		NavigationBar::content(true);
		MainPage::content();
	?>
	<footer style="background: white;">
		  <p>Wszystkie prawa zastrzeżone.</p>
	</footer>
</div>
</body>
</html>
