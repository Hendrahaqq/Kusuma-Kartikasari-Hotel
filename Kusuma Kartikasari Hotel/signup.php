<?php
if(!isset($_SESSION))
{
		session_start();
}

if( isset($_SESSION['user_id']) ){
	header("Location: index.php");
}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):

	// Enter the new user in the database
	$sql = "INSERT INTO login (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
 	$var = password_hash($_POST['password'], PASSWORD_DEFAULT);
 	$stmt->bindParam(':password', $var);

	if( $stmt->execute() ):
		$message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;

endif;

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Kusuma Kartikasari Hotel | Sign up</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="css/php.css">
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

    <body id="page5">
        <div class="bg1">
            <div class="bg2">
                <div class="main">
                    <!-- header -->
                    <header>
                        <h1><a href="index.php" id="logo">Kusuma Kartika Sari Hotel</a></h1>
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
                                <div class="kotak1">
                                    <?php if(!empty($message)): ?>
                                    <p>
                                        <?= $message ?>
                                    </p>
                                    <?php endif; ?>
                                    <h4 id="log"><strong>Register</strong></h4>

                                    <form action="signup.php" method="POST">

                                        <input type="text" placeholder="Enter your email" name="email">
                                        <input type="password" placeholder="and password" name="password">
                                        <input type="password" placeholder="confirm password" name="confirm_password">
                                        <input type="submit">



                                    </form>
                                    <span>or <a href="sign.php">login</a></span>
                                </div>

                            </div>

                        </article>
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
                                        <li><a href="contact.php">Contact</a></li>
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
                </div>
            </div>
        </div>
    </body>

    </html>
