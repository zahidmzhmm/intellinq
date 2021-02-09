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
<!--                        <input name="email" type="email" placeholder="Email Address" class="form-control mb-3" />-->
						<select name="age" required onfocus="this.size=4;" onblur="this.size=1;" onchange="this.size=1; this.blur();" id="" class="form-control">
							<option value="">Age</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
						</select>
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