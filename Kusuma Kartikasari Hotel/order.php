<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kusuma Kartika Sari Hotel</title>
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
    <script type="text/javascript" src="js/kwicks-1.5.1.pack.js"></script>
    <script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
<![endif]-->
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
                                <form method="get" action="index.php" id="form">
                                    <label>Nama :</label>
                                    <input type="text" name="fnama" id="fnama" />
                                    <br />
                                    <label>Alamat :</label>
                                    <input type="text" name="lalamat" id="lalamat" />
                                    <br />
                                    <input type="submit" name="submit" id="submit" value="Submit">

                                    <?php include "proses.php";?>
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