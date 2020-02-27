<?php require_once 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kusuma Kartika Sari Hotel | Package</title>
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

<body id="page3">
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
                            <li><a href="services.php">Facilities</a></li>
                            <li><a href="rooms.php">Rooms</a></li>
                            <li class="active"><a href="package.php">Package</a></li>
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
                                    <h2><img src="images/title_marker1.jpg" alt="">Paket Acara Hotel Kusuma Kartikasari</h2>
                                    <p><strong>Paket Pernikahan Super Hemat ( mulai Rp. 6.000.000,- Nett )Paket Pernikahan Super Hemat ( mulai Rp. 6.000.000,- Nett )</strong></p>
                                    <p>Paket Penikahan Super Hemat menyediakan fasilitas sebagai berikut :</p>
                                    <ul>
                                        <li>Gedung Kartika Hall</li>
                                        <li>Dekor Standard ( Tuwuhan, Kembar Mayang, Bunga Segar + Melati 1 titik, Karpet Merah)</li>
                                        <li>Kursi 700 buah</li>
                                        <li>Kamar rias pengantin</li>
                                        <li>Mini Garden standard</li>
                                        <li>Sound System Standart</li>
                                    </ul>
                                    <br>
                                    <p><strong>Paket Exclusive Racikan Komplit ( Rp. 41.650.000,- Nett )</strong></p>
                                    <p>Paket Exclusive menyediakan fasilitas sebagai berikut :</p>
                                    <ul>
                                        <li>Gedung Kartika Hall</li>
                                        <li>Dekorasi Bunga Segar + Melati 3 titik ( termasuk tuwuhan, kembar mayang)</li>
                                        <li>Kursi 800 buah</li>
                                        <li>Kamar Cottage</li>
                                        <li>Kembar Mayang</li>
                                        <li>Tuwuhan</li>
                                        <li>Solo Keyboard dan 2 penyanyi</li>
                                        <li>Kamar rias pengantin</li>
                                        <li>Mini Garden standard</li>
                                        <li>Foto & Video Shooting</li>
                                        <li>Kamar Pengantin dan dekorasi</li>
                                        <li>Undangan dan sovenir 800 pax (@Rp. 9000,-)</li>
                                        <li>Rias Pengantin dan Busana</li>
                                        <li>Menu sajian Racikan ( Terdiri : - Teh + Air Putih - Snack 2 macam - Sup Ayam/Galantine - Nasi Putih, Terik daging/Bestik daging, Sambel Goreng Ati, Capcay/Paklay/Orak-arik, Acar Segar, Krupuk. - Es Buah / Es Cream</li>
                                    </ul>
                                    <p>(Paket dapat diambil dengan minimal 800pax)</p>
                                    <br>
                                    <p><strong>Paket Racikan Just For Fun I ( Rp. 19.855.000,- Nett )</strong></p>
                                    <p>Paket Racikan Just For Fun I menyediakan fasilitas sebagai berikut :</p>
                                    <ul>
                                        <li>Gedung Kartika Hall</li>
                                        <li>Dekorasi Standart</li>
                                        <li>Kursi 800 buah</li>
                                        <li>Kamar Cottage</li>
                                        <li>Bunga segar 3 titik plus melati</li>
                                        <li>Solo Keyboard dan 1 penyanyi</li>
                                        <li>Kamar rias pengantin</li>
                                        <li>Foto & Video Shooting</li>
                                        <li>Kamar Pengantin dan dekorasi</li>
                                        <li>Undangan dan sovenir 800 pax (@Rp. 10.000,-)</li>
                                    </ul>
                                    <p>(Paket berlaku untuk min. 800 pax, jika kurang dari 800pax, akan dikenakan harga normal)</p>
                                    <br>
                                    <p><strong>Paket Gedung Pernikahan ( Rp. 7.650.000,- Nett )</strong></p>
                                    <p>Paket Gedung Pernikahan menyediakan fasilitas sebagai berikut :</p>
                                    <ul>
                                        <li>Gedung Kartika Hall</li>
                                        <li>Dekor Standard ( Tuwuhan, Kembar Mayang, Bunga Segar + Melati 3 titik, Karpet Merah)</li>
                                        <li>Kursi 800 buah</li>
                                        <li>Kamar rias pengantin</li>
                                        <li>Mini Garden standard</li>
                                        <li>Sound System Standart</li>
                                        <li>Kamar Cottage</li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                        <div class="pad">
                            <div class="wrapper line3">
                                <div class="col2">
                                    <h2>Reservasi Gedung Kartika</h2>
                                    Untuk melakukan reservasi Gedung Kartika maupun reservasi paket acara harus dilakukan langsung ditempat, silahkan hubungi atau datang ke hotel kusuma kartika sari.
                                </div>
                                <div class="col1 pad_left1">
                                    <h2>Booking Info</h2>
                                    <p class="pad_bot1"><strong class="color2">Jl. Ir. Sutami 63 Solo Jawa Tengah - Indonesia </strong></p>
                                    <br>
                                    <p> Telp. (0271) 656861 </p>
                                    <p>Fax (0271) 656862 </p>
                                    <p>Email: marketing@hotelkusumakartikasari.com</p>
                                    <a href="contact.php" class="button1">Read More</a>
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
                        <li><a href="rooms.php">Rooms</a></li>
                        <li class="active"><a href="Package.php">Package</a></li>
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

</html>