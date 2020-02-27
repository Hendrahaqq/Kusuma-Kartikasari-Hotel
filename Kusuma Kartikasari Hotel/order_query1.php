<?php
  require 'db_oop.php';
  class Order{
    protected $idOrder;
    protected $check_in;
    protected $check_out;
    protected $roomType;
    protected $totalRoom;
    protected $idGuest;

    public function __construct(){
      $this->check_in = $_POST['tanggalin'];
      $this->check_out = $_POST['tanggalout'];
      $this->roomType = $_POST['rooms'];
      $this->totalRoom = $_POST['jumlah'];
      $this->guestID = $_POST['idGuest'];

    }

    public function order(){
      $this->db = new Database();
      $db = $this->db->query();
      $sql = "INSERT INTO order1 (check_in, check_out, tipeKamar, jumlahKamar, idGuest) values ('$this->check_in','$this->check_out','$this->roomType','$this->totalRoom', '$this->guestID')";

      $result = mysqli_query($db,$sql);
      echo "<pre>";
      var_dump($result);
      echo "</pre>";

      exit();
      if(!$result){
        echo "Kamar tidak bisa ditambah";
      }

      $idiOrder = mysqli_insert_id($db);
      echo $idiOrder;
      // $sql2 = "SELECT idOrder FROM order1 WHERE idOrder = '$this->isOrder";
      // echo $sql2;
      // $result2 = mysqli_query($db,$sql2);
      // $data = mysqli_fetch_array($result2,MYSQLI_ASSOC);
      // $results = $data['inOrder'];
      header ("Location: order2.php?id=$idiOrder");
    }

    // public function selectIdOrder(){
    //   session_start();
    //   $data = mysqli_fetch_array($sql,MYSQLI_ASSOC);
    //   $sql2 = "SELECT idOrder FROM order1 WHERE idOrder = '$this->isOrder'";
    //   $result2 = mysqli_query($db, $sql);
    //   $_SESSION['idOrderan'] = $result2;
    // }

  }

  $order = new Order();
  $order->order();

?>
