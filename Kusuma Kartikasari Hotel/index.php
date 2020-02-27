<?php require_once 'session.php'; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Kusuma Kartika Sari Hotel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--        <script type="text/javascript" src="js/jquery-1.6.js"></script>-->
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <script type="text/javascript" src="js/Adamina_400.font.js"></script>
<!--        <script type="text/javascript" src="js/jquery.jqtransform.js"></script>-->
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/kwicks-1.5.1.pack.js"></script>
<!--        <script type="text/javascript" src="js/atooltip.jquery.js"></script>-->
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

    <body id="page1">
        <div class="bg1">
            <div class="bg2">
                <div class="main">
                    <!-- header -->
                    <header>
                        <h1><a href="index.php" id="logo">Kusuma Kartikasari Hotel</a></h1>
												<?php include 'login_out.php'; ?>


                        <!--                            <div class="department"> <a href="sign.php" style="text-decoration:none">Sign in</a> | <a href="signup.php" style="text-decoration:none">Sign up</a></div>-->
                    </header>
                    <div class="box">
                        <nav>
                            <ul id="menu">
                                <li class="active"><a href="index.php">About Us</a></li>
                                <li><a href="services.php">Facilities</a></li>
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
                                        <br>
                                        <br>          
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        
                                    </fieldset>
                                </form>
                                    <div class="kwicks-wrapper marg_bot1">
                                        <ul class="kwicks horizontal">
                                            <li><img src="gambar/home1.jpg" alt="" width="600" height="400"></li>
                                            <li><img src="gambar/home2.jpg" alt="" width="600" height="400"></li>
                                            <li><img src="gambar/home3.jpg" alt="" width="600" height="400"></li>
                                            <li><img src="gambar/home4.jpg" alt="" width="600" height="400"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pad">
                                <div class="wrapper line3">
                                    <div class="col2">
                                        <h2>Selamat datang di Hotel Kusuma Kartikasari</h2>
                                        <p class="pad_bot1"><br> Terletak di bagian timur kota Solo, di jalur utama Solo - Surabaya. Lokasinya tidak jauh dengan Universitas Sebelas Maret Surakarta (UNS). Taman Budaya Surakarta (TBS) dan Sekolah Tinggi Seni Indonesia (STSI). Hanya 1 km dari sungai Bengawan Solo yang terkenal berikut Taman Satwa Taru Jurug.</p>
                                        <p class="pad_bot2"> Hotel Kusuma Kartikasari adalah pilihan tepat sebagai sarana representatif untuk keperluan rapat/meeting ataupun perhelatan anda.</p>
                                    </div>
                                    <div class="col1 pad_left1">
                                        <h2>Contact Us</h2>
                                        <div class="wrapper">
                                            <p class="pad_bot1"><strong class="color2">Jl. Ir. Sutami 63 Solo Jawa Tengah - Indonesia </strong></p>
                                            <br>
                                            <p> Telp. (0271) 656861 </p>
                                            <p>Fax (0271) 656862 </p>
                                            <p>Email: marketing@hotelkusumakartikasari.com</p>
                                        </div>
                                        <a href="contact.php" class="button1">Read More</a> </div>
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
                            <li class="active"><a href="index.php">About Us</a></li>
                            <li><a href="services.php">Facilities</a></li>
                            <li><a href="rooms.php">Rooms</a></li>
                            <li><a href="Package.php">Package</a></li>
                            <li class="last"><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- {%FOOTER_LINK} -->
            </footer>
            <!-- footer end -->
        </div>
        <script type="text/javascript">
            Cufon.now();

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.kwicks').kwicks({
                    max: 500,
                    spacing: 0,
                    event: 'mouseover'
                });
            })

        </script>
    </body>

    </html>
