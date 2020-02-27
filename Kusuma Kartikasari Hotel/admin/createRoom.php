<?php

  include 'include/database.php';

  class CreateRoom{
    protected $roomNum;
    protected $roomType;
    protected $roomPrice;
    protected $roomStatus;

    public function __construct(){
      $this->roomNum = $_POST['nomorKamar'];
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
      $this->roomStatus = 0;

    }

    public function create(){
      $this->db = new DB;
      $db = $this->db->query();
      $sql = "INSERT INTO room (noKamar, tipeKamar, hargaKamar, statusKamar) values ('$this->roomNum','$this->roomType','$this->roomPrice','$this->roomStatus')";
      $result = mysqli_query($db,$sql);
      if(!$result){
        echo "Kamar tidak bisa ditambah";
      }
      header ('Location: room_data.php');
    }
  }

  $obj = new CreateRoom();
  $obj->create();

?>
