<?php
include "php/autoload.php";
if (!isset($_SESSION['step1'])){
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
				
				<div class="main_contents instruction_contents">
					<div class="instructions_heading">
						<h4>Instructions</h4>
					</div>
					<div class="instructions">
						<ul>
							<li>You have 20 minutes to complete the test</li>
							<li>The test consists of 20 questions from different topics</li>
							<li>you can go back and forward at any time during the test</li>
						</ul>
					</div>
					<div class="clickable_link">
						<button onclick="window.location.href='php/autoload.php?stat_quiz'">Let’s Do It</button>
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