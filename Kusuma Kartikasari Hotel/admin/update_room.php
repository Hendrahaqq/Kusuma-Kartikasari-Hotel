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

?>
<?php include 'include/header.php';?>
<form action="updateRoom.php" method="POST">
  <table>
    <tr>
      <td> No Kamar </td>
      <td><input type="text" disabled="disable" name="noKamar" placeholder="Contoh 111" value="<?php   $obj = new UpdateRoom(); echo $obj->returnnoKamar();?>">
 </td>
    </tr>

      <tr>
        <td> Tipe Kamar </td>

        <td> <select name="tipeKamar" values="<?php $object = new UpdateRoom();  echo $object->getRoomType(); ?>" required>
          <option value="Executive Suite 1">Executive Suite 1</option>
          <option value="Executive Suite">Executive Suite</option>
          <option value="Executive">Executive</option>
          <option value="Executive Cottage">Executive Cottage</option>
          <option value="Deluxe">Deluxe</option>
          <option value="Bussines Standard">Bussines Standard</option>
        </select></td>
      </tr>
  </table>

  <?php $_POST['noKamar'] = $obj->returnnoKamar();?>
  <input type="submit" value="Update">
</form>
