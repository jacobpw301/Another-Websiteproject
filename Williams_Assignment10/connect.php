<?php

	$dsn='mysql:host=localhost; dbname=jwill148_myHotel';
	$username='jwill148_user1';
	$password='password';
	
	try{
		$db= new PDO($dsn, $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	}
	catch(PDOException $e){
		echo 'ERROR' . $e->getMessage();
		exit();
	}
?>