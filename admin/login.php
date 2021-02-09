<?php
session_start();
if (isset($_SESSION['admin'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

<body class="login-body">

<div class="container">

    <div class="form-signin">
        <h2 class="form-signin-heading">sign in now</h2>
        <form action="../php/autoload.php" method="post" class="login-wrap">
            <?php if (isset($_SESSION['wrong_usr_pwd'])){ ?><div class="text-capitalize mt-3 alert alert-danger"><?= $_SESSION['wrong_usr_pwd'] ?></div> <?php unset($_SESSION['wrong_usr_pwd']); } ?>
            <div class="form-group mt-3">
                <input name="username" required type="text" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="form-group">
                <input name="password" required type="password" class="form-control" placeholder="Password">
            </div>
            <button name="signin_admin" class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        </form>
    </div>

</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
