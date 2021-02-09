<?php
include "php/autoload.php";
if (!isset($_SESSION['step3'])){
    header("location:index.php");
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>		
		<!--Metatags-->
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>		
		<meta http-equiv="X-UA-Compatble" content="ie=edge"/>		
		<!--Website Title-->
		<title>IntellinQ</title>		
		<!--Bootstrap v4.5.3 CSS FILE-->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>		
		<!--Fonts Are Loads From Here-->
		<link rel="stylesheet" href="fonts/fonts.css"/>
		<!--Main Stylesheet-->
		<link rel="stylesheet" href="style.css"/>		
		<!--Stylesheet For The Responsiveness-->
		<link rel="stylesheet" href="css/responsive.css"/>		
	</head>
	
	<body>
			
		<section class="page_wrapper">
			<div class="page_contents">
				<div class="top_logo">
					<a href="javascript:void(0)">IntellinQ</a>
				</div>
				
				<div class="main_contents test_over_contents">
					<div class="test_over_heading">
						<h1>Test Is Over <br /> Amazing Job!!!</h1>
					</div>
					<div class="clickable_link">
						<button onclick="window.location.href='php/autoload.php?completed2'">Reveal Your Score</button>
					</div>
				</div>
			</div>
		</section>
		
		
		<!--jQuery Main Libraty Latest Version-->
		<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
		<!--Bootstrap v4.5.3 JS File-->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!--Custom JavaScript-->
		<script type="text/javascript">
		
		</script>
			
	</body>

</html>