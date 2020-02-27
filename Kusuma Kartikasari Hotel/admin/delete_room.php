<?php

  include 'include/database.php';

  class DeleteRoom{
    protected $roomNum;

    public function __construct(){
      $this->roomNum = $_GET['id'];

    }

    public function delete(){
      $this->db = new DB;
      $db = $this->db->query();
      $sql = "DELETE FROM room WHERE noKamar = '$this->roomNum'";
      $result = mysqli_query($db,$sql);
      if(!$result){
        header ('Location: room_data.php');
        echo "Data tidak bisa terhapus";
      }
      header ('Location: room_data.php');
    }
  }

  $obj = new DeleteRoom();
  $obj->delete();

?>
