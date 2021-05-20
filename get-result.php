<?php
include "php/autoload.php";
if (!isset($_SESSION['step4'])){
    header("location:index.php");
}
if (isset($_SESSION['question'])){
    $total_question = count($_SESSION['question']);
    $user_age = $_SESSION['step4'];
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!--Fonts Are Loads From Here-->
        <link rel="stylesheet" href="fonts/fonts.css"/>
        <!--Main Stylesheet-->
        <link rel="stylesheet" href="style.css"/>
        <!--Stylesheet For The Responsiveness-->
<!--        <link rel="stylesheet" href="css/responsive.css"/>-->
    </head>
    <body>
    <section class="page_wrapper">
        <div class="page_contents">
            <div class="top_logo">
                <a href="javascript:void(0)">IntellinQ </a>
            </div>
            <div class="main_contents get_result_contents">
                <div class="score_is">
                    <h2>Your Score Is:</h2>
                    <h3>####</h3>
                </div>
                <div class="get_result">
                    <h3>Get your results from our experts for 5$ only</h3>
                </div>
                <div class="form_part">
<!--                    <form action="">-->
<!--                        <input type="email" placeholder="Receipt Mail Address" class="form-control" />-->
<!--                    </form>-->
                    <div class="payment_methods">
                        <div id="smart-button-container">
                            <div style="text-align: center;">
                                <div id="paypal-button-container"></div>
                            </div>
                        </div>
                        <script src="https://www.paypal.com/sdk/js?client-id=Aa46NaETJNzKR_IqHEUWogdkvgHYGBTEWyGjmCH7gps3tRTP3U_lOJ8cBVb_rV7oKKH7u8ozEes4zoze&currency=USD" data-sdk-integration-source="button-factory"></script>
                        <script>
                            function initPayPalButton() {
                                paypal.Buttons({
                                    style: {
                                        shape: 'pill',
                                        color: 'gold',
                                        layout: 'vertical',
                                        label: 'paypal',

                                    },

                                    createOrder: function(data, actions) {
                                        return actions.order.create({
                                            purchase_units: [{"amount":{"currency_code":"USD","value":5}}]
                                        });
                                    },

                                    onApprove: function(data, actions) {
                                        return actions.order.capture().then(function(details) {
                                            const email = details.payer.email_address;
                                            $.post("php/autoload.php", { email_paid: email, auth: "payment_completed" })
                                                .done(function( data ) {
                                                    if (data==200){
                                                        window.location.href='php/autoload.php?paid_success';
                                                    }else{
                                                        console.log(data);
                                                    }
                                                });
                                        });
                                    },

                                    onError: function(err) {
                                        console.log(err);
                                    }
                                }).render('#paypal-button-container');
                            }
                            initPayPalButton();
                        </script>
                    </div>
                </div>
<!--                <div class="clickable_link">-->
<!--                    <button href="your-score.php">Get My Result</button>-->
<!--                </div>-->
            </div>
        </div>
    </section>
    <!--jQuery Main Libraty Latest Version-->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <!--Bootstrap v4.5.3 JS File-->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!--Custom JavaScript-->
    <script type="text/javascript"></script>
    </body>
    </html>
<?php } ?>