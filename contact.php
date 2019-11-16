<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <!-- <title>One Music - Modern Music HTML5 Template</title> -->

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>





    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                       <!--  <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a> -->

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Buy now!</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p>Purchase in one step</p>
                        <h2>Purchase Information</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="section-heading">
                        <!--  <p>Purchase in one step</p> -->
                        <h2>Personal Info</h2>
                    </div>
                    <div class="col-12">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <?php
                                $email = $_GET['email'];
                            ?>
                            <form id="personal-data" action="compra.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Address" placeholder="Address" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="zipcode" placeholder="zip code" name="zip">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad">
                                        </div>
                                    </div>
                                  <!--   <div class="col-12 text-center">
                                        <button class="btn oneMusic-btn mt-30" type="submit">Send <i
                                                class="fa fa-angle-double-right"></i></button>
                                    </div> -->
                                </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <div class="section-heading">
                        <!--  <p>Purchase in one step</p> -->
                        <h2>Payment Information</h2>
                    </div>
                    <div class="body-text">Write your name in the right fields. Also write your imaginary card number.
                        By
                        clicking CCV field card will turn.</div>

                        <div class="form-container">

                            <input type="hidden" name="email" value="<?php $email ?>">
                            <input id="column-left" type="text" name="first-name" placeholder="First Name" />
                            <input id="column-right" type="text" name="last-name" placeholder="Surname" />
                            <input id="input-field" type="text" name="number" placeholder="Card Number" />
                            <input id="column-left" type="text" name="expiry" placeholder="MM / YY" />
                            <input id="column-right" type="text" name="ccv" placeholder="CCV" />

                            <div class="card-wrapper"></div>
                            <input type="submit" name="submit" value="Submit">

                    </form>
                </div>
            </div>
        </div>


    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
