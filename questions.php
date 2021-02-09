<?php
include "php/autoload.php";
if (!isset($_SESSION['step2'])){
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<!--Fonts Are Loads From Here-->
		<link rel="stylesheet" href="fonts/fonts.css"/>
		<!--Main Stylesheet-->
		<link rel="stylesheet" href="style.css"/>
		<!--Stylesheet For The Responsiveness-->
<!--		<link rel="stylesheet" href="css/responsive.css"/>-->
        <script src="script.js"></script>
        <style>
            .single_answer.btn.btn-light.active3 {
                border: 1px solid red;
            }
            .single_answer.btn.btn-light.active3 h5 {
                color: red;
            }
        </style>
	</head>
	
	<body onload="timeout()">
		<section class="page_wrapper">
			<div class="page_contents">
				<div class="top_logo">
					<a href="javascript:void(0)">IntellinQ</a>
				</div>
                <div class="contents">
                    <?php include "questionContent.php"; ?>
                </div>
			</div>
            <div class="timeh d-none"></div>
		</section>
		
		
		<!--jQuery Main Libraty Latest Version-->
		<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
		<!--Bootstrap v4.5.3 JS File-->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!--Custom JavaScript-->
        <?php
        if (isset($_SESSION['time'])){
            $explt = explode(':',$_SESSION['time']);
            ?>
            <script type="text/javascript">
                var timeLeft=<?= $explt[0] ?>*60;
            </script>
        <?php }else{ ?>
            <script type="text/javascript">
                var timeLeft=20*60;
            </script>
        <?php } ?>

			
	</body>

</html>