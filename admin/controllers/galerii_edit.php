<?php 

if(isset($_GET['id']) == true && strlen($_GET['id']) > 0){

	$sql = "select 
			galerii.id as id,
			galerii.ime as galerija,  
			galerija_sliki.id as slika_id,
			galerija_sliki.ime as slika_ime
			from galerii
			join galerija_sliki
			on galerija_sliki.id_galerija = galerii.id
			where galerii.id = :id";

	$query = $db->prepare($sql);
	$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
}


?>