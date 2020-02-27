<?php
  require_once 'session.php';
  $message ='';
  require 'database.php';
  if (!empty($_POST['nama'])):
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $sql = "INSERT INTO pesan (nama, alamat, email, pesan) VALUES (:nama, :alamat, :email, :pesan)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nama', $_POST['nama']);
        $stmt->bindParam(':alamat', $_POST['alamat']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':pesan', $_POST['pesan']);

        if( $stmt->execute() ):
          $message = 'Pesan telah terkirim';
        else:
          $message = 'Pesan tidak terkirim';
        endif;

    endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LoungeHotel | Locations</title>
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
            $("#datein").datepicker();
            $("#dateout").datepicker();
        });
    </script>
</head>

<body id="page5">
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
                            <li><a href="package.php">Package</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
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
                                    <h2><img src="images/title_marker1.jpg" alt="">Contact Us</h2>
                                    <h2> Hotel Kusuma Kartikasari</h2>
                                    <ul>
                                        <li> Jl. Ir. Sutami 63 Solo Jawa Tengah - Indonesia </li>
                                        <li> Telp. (0271) 656861 </li>
                                        <li> Fax (0271) 656862 </li>
                                        <li> Email: marketing@hotelkusumakartikasari.com </li>
                                        <li> Untuk reservasi, silahkan kirim juga email (CC) ke kusumakartikasari_hotel@yahoo.com </li>
                                        <li> </li>
                                    </ul>
                                    <h2>Contact Form :</h2>
                                    <form id="ContactForm" action="contact.php" method="POST">
                                        <div>
                                            <div class="wrapper">
                                                <input type="text" class="input" name="nama"> Name: </div>
                                            <div class="wrapper">
                                                <input type="text" class="input" name="alamat"> Address: </div>
                                            <div class="wrapper">
                                                <input type="text" class="input" name="email"> Email: </div>
                                            <div class="textarea_box">
                                                <textarea class="input" cols="1" rows="1" name="pesan"></textarea> Message: </div>
                                            <a href="#" class="button2" onclick="document.getElementById('ContactForm').submit()">Send</a>
                                            <a href="javascript:" class="button2" onclick="document.getElementById('ContactForm').reset()">Clear</a>
                                        </div>
                                    </form>
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
                        <li><a href="Package.php">Package</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
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
</body>

</html>
