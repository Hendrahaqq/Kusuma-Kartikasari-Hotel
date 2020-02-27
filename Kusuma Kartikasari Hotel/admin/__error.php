<?php

  include 'include/database.php';

  class UpdateRoom{
    protected $roomNum;
    protected $roomType;
    protected $roomPrice;
    protected $roomStatus;

    public function __construct(){
      $this->roomNum = $_GET['id'];

    }

    public function read(){
      $this->db = new DB;
      $db = $this->db->query();
      $sql = "SELECT noKamar, hargaKamar, tipeKamar, statusKamar FROM room WHERE noKamar = '$this->roomNum'";
      $result = mysqli_query($db,$sql);
      while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $this->roomNum = $data['noKamar'];
        $this->roomType = $data['tipeKamar'];
        $this->roomPrie = $data['hargaKamar'];
        $this->roomStatus = $data['statusKamar'];

      }
    }

    public function returnnoKamar(){
      return $this->roomNum;
    }

    public function getRoomType(){
      return $this->roomType;
    }



  }



  $obj = new UpdateRoom();
  $obj->read();

echo '

<form action="update_room.php?id='.$obj->returnnoKamar().'" method="post">
  <table>
    <tr>
      <td> No Kamar </td>
      <td><input type="text" disabled="disable" name="nomor" placeholder="Contoh 111" value="'.$obj->returnnoKamar().'">
 </td>
    </tr>

      <tr>
        <td> Tipe Kamar </td>

        <td> <select name="tipe" values="'.$obj->getRoomType().'" required>
          <option value="Executive Suite 1">Executive Suite 1</option>
          <option value="Executive Suite">Executive Suite</option>
          <option value="Executive">Executive</option>
          <option value="Executive Cottage">Executive Cottage</option>
          <option value="Deluxe">Deluxe</option>
          <option value="Bussines Standard">Bussines Standard</option>
        </select></td>
      </tr>
  </table>

  <input type="submit" name="submit" value="Update">
</form>
';
if(isset($_GET['submit'])){
  $this->roomNum = $_GET['nomor'];
  $this->roomType = $_GET['tipeKamar'];
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

  $sql = "UPDATE room SET hargaKamar = '$this->roomPrice', tipeKamar = '$this->roomType', statusKamar = '$this->roomStatus' WHERE noKamar = '$this->roomNum'";
  $result = mysqli_query($db,$sql);
  if(!$result){
    echo $sql;
    echo "Error Updating Room";
  }
  header ('location: room_data.php');
}
