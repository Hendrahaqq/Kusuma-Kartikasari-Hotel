<?php require_once 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kusuma Kartika Sari Hotel | Facilities</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.6.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Adamina_400.font.js"></script>
    <script type="text/javascript" src="js/jquery.jqtransform.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
<![endif]-->
</head>

<body id="page2">
    <div class="bg1">
        <div class="bg2">
            <div class="main">
                <!-- header -->
                <header>
                    <h1><a href="index.php" id="logo">Kusuma Kartika Sari Hotel</a></h1>
                    <?php include 'login_out.php'; ?>
                    <!-- <div class="department"> <a href="sign.php" style="text-decoration:none">Sign in</a> | <a href="signup.php" style="text-decoration:none">Sign up</a></div> -->
                </header>
                <div class="box">
                    <nav>
                        <ul id="menu">
                            <li><a href="index.php">About Us</a></li>
                            <li class="active"><a href="services.php">Facilities</a></li>
                            <li><a href="rooms.php">Rooms</a></li>
                            <li><a href="package.php">Package</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- header end -->
                    <!-- content -->
                    <article id="content">
                        <div class="box1">
                            <div class="wrapper">
                                <form action="#" id="form1">
                                    <h2>Book a Room</h2>
                                    <fieldset>
                                        <div class="row">
                                            <input type="text" class="input"> Your Name: </div>
                                        <div class="row">
                                            <input type="text" class="input"> E-Mail Address: </div>
                                        <div class="row">
                                            <input type="text" class="input"> Home Phone: </div>
                                        <div class="row">
                                            <div class="select1">
                                                <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                                            </div>
                                            Length of Stay: </div>
                                        <div class="row">
                                            <div class="select1">
                                                <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                                            </div>
                                            Number in Party: </div>
                                        <div class="row">
                                            <div class="select2">
                                                <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                                            </div>
                                            <div class="select2">
                                                <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                                            </div>
                                            <div class="select2">
                                                <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                                            </div>
                                            Arrival Date: </div>
                                        <div class="row_textarea"> Additional Comments:
                                            <textarea cols="1" rows="1"></textarea>
                                        </div>
                                        <div class="wrapper"> <a href="#" class="button1">Send</a> <a href="#" class="button1">Clear</a> </div>
                                    </fieldset>
                                </form>
                                <div class="col2 pad">
                                    <h2><img src="images/title_marker1.jpg" alt="">Featured Services</h2>
                                    <div class="wrapper pad_bot2">
                                        <figure class="left marg_right1"><img src="gambar/24hrs.jpg" alt="taxi" width="200" height="150"></figure>
                                        <p class="pad_bot1"><strong class="color3">Pelayanan Taxi 24 Jam</strong>
                                            <br> Fasilitas pemesanan taxi 24 jam memudahkan tamu untuk mencari transportasi kapan saja. </p>

                                        


                                    </div>
                                </div>

                            </div>
                        </div>
                    </article>
                    <!--content end-->
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <!-- footer -->
        <footer>
            <div class="col2">
                <nav>
                    <ul id="footer_menu">
                        <li><a href="index.php">About Us</a></li>
                        <li class="active"><a href="services.php">Facilities</a></li>
                        <li><a href="rooms.php">Rooms</a></li>
                        <li><a href="Package.php">Package</a></li>
                        <li class="last"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!--
            <div class="col1 pad_left1">
                <ul id="icons">
                    <li>
                        <a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a>
                    </li>
                </ul>
            </div>
-->
            <!-- {%FOOTER_LINK} -->
        </footer>
        <!-- footer end -->
    </div>
    <script type="text/javascript">
        Cufon.now();
    </script>
</body>

</html>

