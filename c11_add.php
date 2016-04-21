<?php 
// c11_add.php

$dsn = 'mysql:dbname=ljubenlape;host=127.0.0.1';
$username = 'root';
$password = 'root';

$db = new PDO($dsn, $username, $password);

// print_r($_POST);

$sql = 'insert into korisnici (ime, email, password, id_tip_korisnici) values (:ime, :email, :password, :id_tip_korisnici)';

$query = $db->prepare($sql);

$query->bindValue(':ime', $_POST['ime']);
$query->bindValue(':email', $_POST['email']);
$query->bindValue(':password', $_POST['password']);
$query->bindValue(':id_tip_korisnici', $_POST['id_tip_korisnici']);

$query->execute();

header('location: c11.php');

?>