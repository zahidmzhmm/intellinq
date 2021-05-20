<?php
session_start();
if (isset($_SESSION['step1'])){
    header("location:instructions.php");
}
if (isset($_SESSION['step2'])){
    header("location:questions.php");
}
if (isset($_SESSION['step3'])){
    header("location:get-result.php");
}
if (isset($_SESSION['step4'])){
    header("location:get-result.php");
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
			<div class="page_contents home_page_contents">
				<div class="top_logo">
					<a href="javascript:void(0)">IntellinQ</a>
				</div>
				
				<div class="main_contents first_page_contents">
					<div class="first_page_heading">
						<h4>Do Now The IQ Test And Match Yourself With The Most Intelligence People On The Planet.</h4>
					</div>
					<form action="php/autoload.php" method="post">
                        <div class="clickable_link">
                            <button type="submit" name="start_question">Start Here</button>
                        </div>
					</form>
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