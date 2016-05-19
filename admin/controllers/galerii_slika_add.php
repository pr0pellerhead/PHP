<?php
include '../usercheck.php';
include '../db.php';

$id = $_POST['id'];

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

?>