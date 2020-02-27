<?php require_once 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kusuma Kartikasari Hotel | Rooms</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
          <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--    <script type="text/javascript" src="js/jquery-1.6.js"></script>-->
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Adamina_400.font.js"></script>
<!--    <script type="text/javascript" src="js/jquery.jqtransform.js"></script>-->
    <script type="text/javascript" src="js/script.js"></script>
<!--    <script type="text/javascript" src="js/atooltip.jquery.js"></script>-->
    <!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
<![endif]-->
 <script>
        $(function() {
            $("#dateIn").datepicker();
            $("#dateOut").datepicker();
        });
    </script>
</head>

<body id="page4">
    <div class="bg1">
        <div class="bg2">
            <div class="main">
                <!-- header -->
                <header>
                    <h1><a href="index.php" id="logo">Kusuma Kartikasari Hotel</a></h1>
                    <?php include 'login_out.php'; ?>
                    <!-- <div class="department"> <a href="sign.php" style="text-decoration:none">Sign in</a> | <a href="signup.php" style="text-decoration:none">Sign up</a></div> -->
                </header>
                <div class="box">
                    <nav>
                        <ul id="menu">
                            <li><a href="index.php">About Us</a></li>
                            <li><a href="services.php">Facilities</a></li>
                            <li class="active"><a href="rooms.php">Rooms</a></li>
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
                                           Cek-in: <input type="text" name="datein" id="dateIn">  </div>
                                        <div class="row">
                                           Cek-out:  <input type="text" name="dateout" id="dateOut"></div>
                                        <div class="row">
                                           Tipe Kamar : 
                                           
                                                 
                                                <select id="roomsearch" name="rooms">
                                                   
                                                    <option disabled="disabled" value="">Tipe Kamar...</option>
                                                    <option>Executive Suite 1</option>
                                                    <option>Executive Suite 2</option>
                                                    <option>Executive </option>
                                                    <option>Executive Cottage</option>
                                                    <option>Deluxe</option>
                                                    <option>Bussiness Standart</option>
                                                 </select>
                                          
                                    </div>
                                        <div class="row">
                                             Jumlah Kamar : 
                                            
                                               
                                                <select name="jumlah">
                                                    <option disabled="disabled" value="">Jumlah Kamar...</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                      
                                      </div>
                                        <div class="wrapper"> <a href="#" class="button1">Send</a> <a href="#" class="button1">Clear</a> </div>
                                    </fieldset>
                                </form>
                                <div class="col2 pad">
                                    <h2>Pilihan Tipe Kamar di Hotel Kusuma Kartikasari</h2>
                                    <div class="wrapper line1">
                                        <div class="col3">
                                            <figure class="pad_bot3"><img src="gambar/execuitive%20suite%201.png" alt="exe-1" width="250" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Executive Suite 1</strong></p>
                                            <p>Tipe kamar ini merupakan tipe kamar eksklusif yang berada di lantai 1, terdapat 1 ruang tamu untuk privasi yang lebih saat anda menerima tamu, beserta disediakan set meja makan lengkap sesuai keinginan anda untuk menjamu teman atau kerabat,dan juga bathub.</p>

                                            <h3><strong>Harga = Rp. 550.000 nett/kamar/malam</strong></h3>

                                              <?php include 'ordersession.php'; ?>
                                        </div>
                                        <div class="col3 pad_left2">
                                            <figure class="pad_bot3"><img src="gambar/execuitive%20suite%202.png" alt="exe-2" width="250" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Executive Suite 2</strong></p>
                                            <p>Tipe kamar ini merupakan tipe kamar eksklusif yang berada di lantai 1, terdapat 1 ruang tamu untuk privasi yang lebih saat anda menerima tamu.</p>

                                            <br>
                                            <br>
                                            <br>
                                            <h3><strong>Harga = Rp. 385.000 nett/kamar/malam</strong></h3>

                                             <?php include 'ordersession.php'; ?>
                                        </div>
                                    </div>
                                       <div class="wrapper line1">
                                        <div class="col3">
                                            <figure class="pad_bot3"><img src="gambar/executive%20cottage.png" alt="exe-1" width="250" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Executive Cottage</strong></p>
                                            <p>Tipe kamar ini merupakan tipe kamar eksklusif yang berada di lantai 2,dengan kamar luas serta satu king bed.</p>


                                           <br>
                                           <br>
                                            <h3><strong>Harga = Rp. 250.000 nett/kamar/malam</strong></h3>

                                             <?php include 'ordersession.php'; ?> </div>

                                        <div class="col3 pad_left2">
                                            <figure class="pad_bot3"><img src="gambar/executive.png" alt="exe-2" width="250" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Executive</strong></p>
                                            <p>Tipe kamar ini merupakan tipe kamar eksklusif yang berada di lantai 2, dengan kamar luas, serta dua single bed.</p>

                                            <br>
                                            <br>
                                            <h3><strong>Harga = Rp. 275.000 nett/kamar/malam</strong></h3>
                                             <?php include 'ordersession.php'; ?>
                                        </div>
                                    </div>

                                    <div class="wrapper line1">
                                        <div class="col3">
                                            <figure class="pad_bot3"><img src="gambar/deluxe.png" alt="deluxe" width="250" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Deluxe</strong></p>
                                            <p>Tipe kamar ini merupakan tipe kamar deluxe di lantai 2,dengan dua single bed.</p>


                                           <br>
                                           <br>
                                            <h3><strong>Harga = Rp. 200.000 nett/kamar/malam</strong></h3>

                                             <?php include 'ordersession.php'; ?> </div>

                                        <div class="col3 pad_left2">
                                            <figure class="pad_bot3"><img src="gambar/bussiness%20standart.png" alt="exe-2" width="250" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Bussiness Standart</strong></p>
                                            <p>Tipe kamar ini merupakan tipe kamar deluxe di lantai 3,dengan dua single bed.</p>

                                            <br>
                                            <br>
                                            <h3><strong>Harga = Rp. 175.000 nett/kamar/malam</strong></h3>
                                             <?php include 'ordersession.php'; ?>
                                        </div>
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
                        <li><a href="services.php">Facilities</a></li>
                        <li class="active"><a href="rooms.php">Rooms</a></li>
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
