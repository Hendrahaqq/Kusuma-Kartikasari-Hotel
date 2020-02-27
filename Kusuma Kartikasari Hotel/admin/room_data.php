<?php
if(!isset($_SESSION))
{
		session_start();
}

if(!isset($_SESSION['admin_id']) ){
	header("Location: login.php");
}
?>

<?php include 'include/header.php'; ?>
<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">

    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="index.php">
                    KUSUMA KARTIKASARI HOTEL
                </a>
            </div>
        </div>
    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li class="active"><a href="javascript:"><span class="glyphicon glyphicon-bed"></span> Data Kamar</a></li>
            <li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Data User</a></li>
            <li><a href="message.php"><span class="glyphicon glyphicon-envelope"></span> Pesan User</a></li>
						<li><a href="order.php"><span class="glyphicon glyphicon-ok"></span> Order</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

        </ul>
    </div><!-- /.navbar-collapse -->


</nav>
<div class="body">
    <?php

        require 'include/database.php';

        class Room{

          protected $header = '<table style="margin-left: 400px;" border="1">
            <tr>
              <th>No Kamar</th>
              <th>Tipe Kamar</th>
              <th>Harga</th>
              <th>Status Kamar</th>
              <th>Setting</th>
            </tr>';

          protected $body = '';

          protected $footer = '</table>

          <!--<a href="create_room.php" onclick="return confirm(\'Apakah anda yakin ingin menambah?\')"><span class="glyphicon glyphicon-plus-sign"></span>Create New Room</a>-->
          ';
          public function __construct(){
            $this->db = new DB;
            // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          }

          public function IncomingMessage(){
            $db = $this->db->query();
            $sql = "SELECT noKamar, hargaKamar, tipeKamar, statusKamar FROM room ORDER BY noKamar ASC";
            $result = mysqli_query($db,$sql);

            while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              $this->body.=  '<tr>
                  <td>'.$data['noKamar'].'</td>
                  <td>'.$data['hargaKamar'].'</td>
                  <td>'.$data['tipeKamar'].'</td>
                  <td>'.$data['statusKamar'].'</td>
                  <td>
                  <a href="update_room.php?id='.$data['noKamar'].'" onclick="return confirm(\'Apakah anda yakin ingin mengedit?\')" ><span class="glyphicon glyphicon-edit"></span></a>
                  <a href="delete_room.php?id='.$data['noKamar'].'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')"> <span class="glyphicon glyphicon-remove"></span> </a></td>
                </tr>';
            }

            echo $this->header.$this->body.$this->footer;
          }


        }
        $user = new Room();
        $user->IncomingMessage();

    ?>
</div>
</div>

<form style="padding-left:400px;" action="createRoom.php" method="POST">
  <table>
    <tr>
      <td> No Kamar </td>
      <td>  <input type="text" name="nomorKamar" placeholder="Contoh 111"  required></input>
 </td>
    </tr>

      <tr>
        <td> Tipe Kamar </td>
        <td> <select name="tipeKamar" required>
          <option value="Executive Suite 1">Executive Suite 1</option>
          <option value="Executive Suite">Executive Suite</option>
          <option value="Executive">Executive</option>
          <option value="Executive Cottage">Executive Cottage</option>
          <option value="Deluxe">Deluxe</option>
          <option value="Bussines Standard">Bussines Standard</option>
        </select></td>
      </tr>
  </table>

  <input type="submit" value="Create">
</form>
</body>
</html>
