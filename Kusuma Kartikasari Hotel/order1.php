<?php
  require_once 'session.php';?>

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
     <!--<script type="text/javascript" src="js/jquery-1.6.js"></script>-->
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Adamina_400.font.js"></script>
    <script type="text/javascript" src="js/jquery.jqtransform.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/kwicks-1.5.1.pack.js"></script>
    <script type="text/javascript" src="js/atooltip.jquery.js"></script>

    <!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
<![endif]-->
    <script>
        $(function() {
          $( "#tanggalin" ).datepicker({
            defaultDate: "+1w",
            dateFormat: 'yy-mm-dd',
            // changeMonth: true,
            numberOfMonths: 2,
            minDate: 0,
            onClose: function( selectedDate ) {
              $( "#tanggalout" ).datepicker( "option", "minDate", selectedDate );
            }
          });
          $( "#tanggalout" ).datepicker({
            defaultDate: "+1w",
            dateFormat: 'yy-mm-dd',
            // changeMonth: true,
            numberOfMonths: 2,
            onClose: function( selectedDate ) {
              $( "#tanggalin" ).datepicker( "option", "maxDate", selectedDate );
            }
          });
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
                </header>
                <div class="box">
                    <nav>
                        <ul id="menu">
                            <li><a href="index.php">About Us</a></li>
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
                            <div class="formorder">
                                <h2>1.Data Kamar :</h2>

                                <form id="ContactForm" action="order_query1.php" method="POST">
                                    <div class="order1">
                                        <div class="wrapper">
                                            Check-in :
                                            <input type="text" name="tanggalin" id="tanggalin">  </div>
                                        <div class="wrapper">
                                           Check-out :
                                           <input type="text" name="tanggalout" id="tanggalout">  </div>
                                        <div class="wrapper">
                                            Tipe Kamar : <select id="pilihan" name="rooms">
                                            <option disabled="disabled" value="">Tipe Kamar...</option>
                                            <option>Executive Suite 1</option>
                                            <option>Executive Suite 2</option>
                                            <option>Executive </option>
                                            <option>Executive Cottage</option>
                                           <option>Deluxe</option>
                                           <option>Bussiness Standart</option>
                                            </select>
                                        </div>
                                        <div class="wrapper">
                                            Jumlah Kamar : <select id="pilihan2" name="jumlah">
                                            <option disabled="disabled" value="">Jumlah Kamar...</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                          </select>
                                        </div>
                                        <?php echo $_SESSION['user_id'];?>
                                        <input type="hidden" name="idGuest" value="<?php echo $_SESSION['user_id'];  ?>"></input>
                                        <a class="button2" onclick="document.getElementById('ContactForm').submit()">Send</a>
                                        <a href="javascript:" class="button2" onclick="document.getElementById('ContactForm').reset()">Clear</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </article>
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
