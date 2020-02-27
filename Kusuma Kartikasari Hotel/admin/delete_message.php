<?php

  include 'include/database.php';

  class DeletePesan{
    protected $idPesan;

    public function __construct(){
      $this->idPesan = $_GET['id'];

    }

    public function delete(){
      $this->db = new DB;
      $db = $this->db->query();
      $sql = "DELETE FROM pesan WHERE idPesan = '$this->idPesan'";
      $result = mysqli_query($db,$sql);
      if(!$result){
        header ('Location: message.php');
        echo "Data tidak bisa terhapus";
      }
      header ('Location: message.php');
    }
  }

  $obj = new DeletePesan();
  $obj->delete();

?>
