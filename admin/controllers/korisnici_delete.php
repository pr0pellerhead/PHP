<?php
include '../usercheck.php';
include '../db.php';

$query = $db->prepare("delete from korisnici where id = :id");
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();

header('location: ../index.php');
?>