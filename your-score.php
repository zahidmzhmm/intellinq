<?php
include "php/autoload.php";
if (isset($_SESSION['score_check'])){
    $usr_id = $_SESSION['score_check'];
    $select = $config->query("SELECT * FROM `people` where id='$usr_id'");
    $checking = mysqli_num_rows($select);
    if ($checking==1){
        $data = mysqli_fetch_array($select);
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
        </head>

        <body>

            <section class="page_wrapper">
                <div class="page_contents">
                    <div class="top_logo">
                        <a href="javascript:void(0)">IntellinQ</a>
                    </div>

                    <div class="main_contents your_score_contents">
                        <div class="score_is">
                            <h2>Your Score Is:</h2>
                            <h3><?= $data['score'] ?></h3>
                        </div>
                        <div class="score_same_as">
                            <h3>Your score is same as:</h3>
                            <h5>Famous People 1</h5>
                            <h5>Famous People 2</h5>
                            <h5>Famous People 3</h5>
                        </div>
                        <div class="clickable_link">
                            <a href="https://www.instagram.com/p/CJ88SHHJJC1/?igshid=1fjs30oxv0euz">To Understand more what my score mean</a>
                        </div>
                        <div class="clickable_link share_link">
                            <a href="javascript:void(0)">Share</a>
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
<?php unset($_SESSION['score_check']); } }else{
    header("location:index.php");
} ?>