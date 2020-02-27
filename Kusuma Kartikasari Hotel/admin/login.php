<?php

if(!isset($_SESSION))
{
		session_start();
}

if( isset($_SESSION['admin_id']) ){
	header("Location: index.php");
}

require 'include/database.php';

class Login{

	var $error = '';
  public function __construct(){
		$this->db = new DB;

		if(!empty($_POST['username'])){
			$db = $this->db->query();
			$username = mysqli_real_escape_string($db,$_POST['username']);
			$pass = mysqli_real_escape_string($db,$_POST['password']);

			$sql = "SELECT idAdmin FROM admin WHERE userName = '$username' AND password = '$pass'";
			$result = mysqli_query($db,$sql);
			// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
				if($count == 1) {
								 $_SESSION['admin_id'] = $result;
								 header("location: index.php");
							}else {
								 $this->error = "Your Login Name or Password is invalid";
							}
				}
	}



}
$sign = new Login;

?>


  <?php include 'include/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    </body>
    <div class="container">
            <div class="card card-container">
							<?php
							$err_message = new Login();
							echo $err_message->error;
							?>
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="post" action="login.php">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input name="username" type="text" class="form-control" placeholder="User Name" required autofocus>
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Log in</button>
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->
    </html>
