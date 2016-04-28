<?php 
// login.php

session_start();

$err = 0;

if(!isset($_POST['email']) && strlen($_POST['email']) == 0){$err++;}
if(!isset($_POST['password']) && strlen($_POST['password']) == 0){$err++;}

if($err == 0){
	include 'db.php';

	$sql = 'select * from korisnici where email = :email and password = :password';
	$query = $db->prepare($sql);
	$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
	$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
	$query->execute();

	$res = $query->fetchAll(PDO::FETCH_ASSOC);

	if(count($res) != 0){ // korisnikot postoi
		$_SESSION['user'] = $res[0];
		header('location: admin.php');
	}else{ // korisnikot NE postoi
		header('location: index.php');
	}

}else{
	header('location: index.php');
}

?>