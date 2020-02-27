<?php

include 'include/database.php';

if(!isset($_GET['noKamar'])){
  echo 'gas';
}else{
  echo 'get';
}

class Up{
  protected $roomNum;
  protected $roomType;
  protected $roomPrice;
  protected $roomStatus;

  public function __construct(){
    $this->roomNum = $_POST['noKamar'];
    $this->roomType = $_POST['tipeKamar'];
    //roomPrice
    if(strcmp($this->roomType, 'Executive Suite 1') == 0):
      $this->roomPrice = 550000;
    elseif(strcmp($this->roomType, 'Executive Suite') == 0):
      $this->roomPrice = 385000;
    elseif(strcmp($this->roomType, 'Executive') == 0):
      $this->roomPrice = 275000;
    elseif(strcmp($this->roomType, 'Executive Cottage') == 0):
      $this->roomPrice = 250000;
    elseif(strcmp($this->roomType, 'Deluxe') == 0):
      $this->roomPrice = 200000;
    elseif(strcmp($this->roomType, 'Bussines Standard') == 0):
      $this->roomPrice = 175000;
    else:
      $this->roomPrice = 0;
    endif;
    $this->roomStatus = 10;

  }


  public function update(){
    $this->db = new DB;
    $db = $this->db->query();
    $sql = "UPDATE room SET hargaKamar = '$this->roomPrice', tipeKamar = '$this->roomType', statusKamar = '$this->roomStatus' WHERE noKamar = '$this->roomNum'";
    $result = mysqli_query($db,$sql);
    // header('location: room_data.php');
  }
}

$obj = new Up();
$obj->update();

?>
