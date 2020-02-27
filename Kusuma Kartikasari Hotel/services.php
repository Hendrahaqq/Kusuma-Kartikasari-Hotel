<?php require_once 'session.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kusuma Kartika Sari Hotel | Facilities</title>
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
                                            Cek-in: <input type="text" name="datein" id="dateIn"> </div>
                                        <div class="row">
                                            Cek-out: <input type="text" name="dateout" id="dateOut"></div>
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
                                    <h2><img src="images/title_marker1.jpg" alt="">Featured Services</h2>
                                    <div class="wrapper pad_bot2">
                                        <figure class="left marg_right1"><img src="gambar/24hrs.jpg" alt="taxi" width="200" height="150"></figure>
                                        <p class="pad_bot1"><strong class="color3">Pelayanan Taxi 24 Jam</strong>
                                            <br> Fasilitas pemesanan taxi 24 jam memudahkan tamu untuk mencari transportasi kapan saja. </p>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/receptionist.png_256" alt="resepsionis" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Pelayanan Resepsionis 24 Jam</strong><br> Pelayanan resepsionis 24 jam memudahkan untuk tamu cek-in serta cek-out kapan pun</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/roomservice.png" alt="laundry" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Rooms Service & Laundry 24 Jam</strong><br> Layanan rooms services serta laundry 24 jam siap melayani anda.</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/parking.jpg" alt="resepsionis" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Tempat Parkir yang sangat luas</strong><br> Ketersediaan tempat parkir didepan dan belakang hotel yang luas dapat menampung semua kendaraan tamu.</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/hall.jpg" alt="hall" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Kartika Convention Hall</strong><br> Terdapat convention hall untuk berbagai acara dengan kapasitas hingga 1500 pax dan menyediakan berbagai paket menarik untuk berbagai acara seperti : pernikahan, meeting, seminar dan lain-lain.</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/wifi.jpg" alt="wifi" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Free Wi-Fi</strong><br> Tersedianya Wi-Fi di seluruh area hotel dengan kecepatan mencapai 1 Mbps</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/telephone.jpg" alt="telp" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Central Telephone</strong><br> Tersedianya telephone tiap kamar memudahkan tamu untuk menghubungi layanan kamar atau resepsionis</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/bathub.png" alt="bathub" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Bathub dan Pemanas air</strong><br> Fasilitas bathub di beberapa tipe kamar serta pemanas air untuk memanjakan tamu.</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/ac.jpg" alt="ac" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">AC</strong><br> Fasilitas AC di tiap kamar.</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/joggging.jpg" alt="jogging" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Jogging Track</strong><br> Area hotel kami juga dapat menjadi rute jogging anda dipagi maupun siang hari untuk meregangkan otot dan sendi sejenak.</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/tv.jpg" alt="tv" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Color TV</strong><br> Fasilitas TV di tiap kamar.</p>
                                        </div>

                                        <div class="wrapper">
                                            <figure class="left marg_right1"><img src="gambar/drugstore.png" alt="drugstore" width="200" height="150"></figure>
                                            <p class="pad_bot1"><strong class="color3">Drugstore</strong><br> Tersedia apotek yang menjual obat untuk para tamu.</p>
                                        </div>


                                    </div>
                                </div>
                                <!--
                                <div class="pad">
                                    <div class="wrapper line3">
                                        <div class="col2">
                                            <h2>Main Services</h2>
                                            <p class="pad_bot1"><strong class="color2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</strong> </p>
                                            <p class="pad_bot1"> Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enigm ipsam voluptatem nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            <div class="wrapper pad_bot2">
                                                <div class="col1">
                                                    <ul class="list1">
                                                        <li><a href="#">Inventore veritatis et quasi architecto</a></li>
                                                        <li><a href="#">Beatae vitae dicta sunt explicabo</a></li>
                                                        <li><a href="#">Nemo enim ipsam voluptatem quivolupta</a></li>
                                                        <li><a href="#">Sit aspernatur aut odit aut fugit sed</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col1 pad_left1">
                                                    <ul class="list1">
                                                        <li><a href="#">Neque porro quisquam est, qui dolorem</a></li>
                                                        <li><a href="#">Ipsum quia dolor amet consectetur</a></li>
                                                        <li><a href="#">Adipisci velit, sed quia non numquam</a></li>
                                                        <li><a href="#">Eius modi tempora incidunt ut</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="#" class="button1">Read More</a>
                                        </div>
                                        <div class="col1 pad_left1">
                                            <h2>Special Offers</h2>
                                            <div class="wrapper">
                                                <figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
                                                <p class="pad_bot1"><strong class="color2">Sed ut perspiciatis</strong></p>
                                                <p class="pad_bot1">Lorem ipsum dolor tur adipisicing elited do eiusmod tempor incididunt.</p>
                                            </div>
                                            <div class="wrapper">
                                                <figure class="left marg_right1"><img src="images/page2_img4.jpg" alt=""></figure>
                                                <p class="pad_bot1"><strong class="color2">Totam aperiam</strong></p>
                                                <p class="pad_bot2">Ut enim ad minim veniam, quis exercitation ullaco laboris nisi ut aliquip.</p>
                                            </div>
                                            <a href="#" class="button1">Read More</a> </div>
                                    </div>
                                </div>
-->
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