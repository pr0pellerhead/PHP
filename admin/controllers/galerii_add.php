<?php
include '../usercheck.php';
include '../db.php';

if(isset($_POST['ime']) == true && strlen($_POST['ime']) > 0){

	$query = $db->prepare("insert into galerii (ime) values (:ime)");
	$query->bindValue(':ime', $_POST['ime'], PDO::PARAM_STR);
	$query->execute();

	$id = null;

	$query = $db->query("select last_insert_id() as id");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id = $res[0]['id'];

	echo $id;

	// print_r($_FILES);

	$upload_dir = "../../uploads/";
	$num_of_files = count($_FILES['sliki']['name']);

	for($i = 0; $i < $num_of_files; $i++){

		if($_FILES['sliki']['error'][$i] == 0){

			$tmp = $_FILES['sliki']['tmp_name'][$i];
			$new_name = rand(1000000, 9999999).'_'.$_FILES['sliki']['name'][$i];

			if(move_uploaded_file($tmp, $upload_dir.$new_name)){

				$query = $db->prepare("insert into galerija_sliki (id_galerija, ime) values (:id_galerija, :ime)");
				$query->bindValue(':id_galerija', $id);
				$query->bindValue(':ime', $new_name);
				$query->execute();
			}
		}
	}

	header('location: ../admin.php?page=galerii_edit&id='.$id);
}

?>