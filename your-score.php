<?php
include "php/autoload.php";
if (isset($_GET['score'])){
    $usr_id = $_GET['score'];
    $select = $config->query("SELECT * FROM `people` where `id`like'$usr_id'and`pay`like'true'");
    $checking = mysqli_num_rows($select);
    if ($checking==1){
        $data = mysqli_fetch_array($select);
        $score = $data['score'];
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
                            <?php
                            $select2 = $config->query("SELECT * FROM `people` where `score`like'$score'and`pay`like'true'");
                            while ($data2 = mysqli_fetch_assoc($select2)){
                                $mail = $data2['mail'];
                                $explode = explode("@",$mail);
                                if ($data2['mail']==$data['mail']){ }else{
                            ?>
                            <h5><?= $explode[0] ?></h5>
                            <?php } } ?>
                        </div>
                        <div class="clickable_link">
                            <a href="https://www.instagram.com/p/CJ88SHHJJC1/?igshid=1fjs30oxv0euz">To Understand more what my score mean</a>
                        </div>
                        <div class="share_link">
                            <input type="text" id="link" class="form-control mb-2" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                            <button onclick="copy()" class="btn btn-success">Copy and Share</button>
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
                function copy() {
                    var copyText = document.getElementById("link");
                    copyText.select();
                    document.execCommand("copy");
                }
            </script>

        </body>

    </html>
<?php }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
} ?>