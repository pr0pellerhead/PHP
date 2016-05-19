<?php 
include '../usercheck.php';
include '../db.php';


if(isset($_GET['id']) == true && strlen($_GET['id']) > 0){

	$sql = "delete from galerija_sliki where id = :id";
	$query = $db->prepare($sql);
	$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query->execute();

	unlink('../../uploads/'.$_GET['img']);

	header('location: ../admin.php?page=galerii_edit&id='.$_GET['gid']);
}

?>