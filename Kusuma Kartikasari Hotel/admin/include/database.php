<?php
// DB.class.php
   // 
  //  define('DB_SERVER', 'localhost');
  //  define('DB_USERNAME', 'root');
  //  define('DB_PASSWORD', '');
  //  define('DB_DATABASE', 'db_hotel');
  //  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

class DB {

	protected $db_host = 'localhost';
	protected $db_user = 'root';
	protected $db_pass = '';
	protected $db_name = 'db_hotel';

	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.

	public function connect() {

		$connect_db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );

		if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\ ", mysqli_connect_error());
			exit();
		}
		return true;

	}

  public function query(){
    return new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
  }

  public function getDBName(){
    return $this->db_name;
  }

}
