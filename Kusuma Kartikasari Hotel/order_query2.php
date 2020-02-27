<?php
  require 'db_oop.php';
  // require_once 'order_query1.php';

  class OrderQ{

    protected $idOrder;
    protected $guestName;
    protected $idNumber;
    protected $address;
    protected $country;
    protected $city;
    protected $province;
    protected $zipCode;
    protected $phone;
    protected $email;

    public function __construct(){
      $this->idOrder = $_POST['idiOrder'];
      $this->guestName = $_POST['nama'];
      $this->idNumber = $_POST['no_id'];
      $this->address = $_POST['address'];
      $this->country = $_POST['country'];
      $this->city = $_POST['city'];
      $this->province = $_POST['province'];
      $this->zipCode = $_POST['kodpos'];
      $this->phone = $_POST['no_hp'];
      $this->email = $_POST['email'];
    }

    public function order(){
      $this->db = new Database();
      $db = $this->db->query();
      $sql = "INSERT INTO order2 (idOrder, nama, noId, alamat, negara, kota, provisni, kodePos, noTelp, email)  values ('$this->idOrder','$this->guestName','$this->idNumber','$this->address','$this->country','$this->city','$this->province','$this->zipCode','$this->phone','$this->email')";

      echo $sql;
      $result = mysqli_query($db,$sql);
      if(!$result){
        echo "Pemesanan gagal";
      }
      header ('Location: cart.php');
    }

  }

  $order = new OrderQ();
  $order->order();

?>
