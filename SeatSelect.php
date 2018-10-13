<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLEXTRA - Your personal event manager</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
    <link href="css/seats.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery.seat-charts.js"></script>
</head>

<body>
<br>
&nbsp;&nbsp;<a href="#" class="previous" onclick="goBack()">&laquo; Go Back</a>
<div class="content">
    <div class="main">

        <h2><?php
            // Echo session variables that were set on previous page
            echo $_SESSION["Theatre"] ;
            ?></h2>
        <div class="demo">
            <div id="seat-map">
                <div class="front">SCREEN THIS WAY</div>
            </div>
            <div class="booking-details">
                <ul class="book-left" style="list-style: none;">
                    <li>Movie </li>
                    <li>Date</li>
                    <li>Time </li>
                    <li>Tickets</li>
                    <li>Total</li>
                    <li>Seats :</li>
                </ul>
                <ul class="book-right" style="list-style: none;">
                    <li> : <?php
                        // Echo session variables that were set on previous page
                        echo $_SESSION["ELYSIUM"] ;

                        ?></li>
                    <li> : <?php
                        // Echo session variables that were set on previous page
                        echo $_SESSION["Showdate"] ;

                        ?></li>
                    <li> : <?php
                        // Echo session variables that were set on previous page
                        echo $_SESSION["Showtiming"] ;

                        ?></li>
                    <li>: <span id="counter">0</span></li>
                    <li>: <b><i>CAD &nbsp;</i><span id="total">0</span></b></li>
                </ul>
                <div class="clear"></div>
                <ul id="selected-seats" class="scrollbar scrollbar1" ></ul>

                <br>
                <div id="paypal-button"></div>
                <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                <script>
                    paypal.Button.render({
                        env: 'sandbox',
                        client: {
                            sandbox: 'demo_sandbox_client_id'
                        },
                        payment: function (data, actions) {
                            return actions.payment.create({
                                transactions: [{
                                    amount: {
                                        total: '0.01',
                                        currency: 'CAD'
                                    }
                                }]
                            });
                        },
                        onAuthorize: function (data, actions) {
                            return actions.payment.execute()
                                .then(function () {
                                    window.alert('Thank you for your purchase!');
                                });
                        }
                    }, '#paypal-button');
                </script>
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
                <div id="legend"></div>
            </div>
            <div style="clear:both"></div>
        </div>

        <script src="js/seating2.js"></script>
    </div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>