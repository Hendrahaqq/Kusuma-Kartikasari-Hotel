<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

  
  if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM login WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}
?>
