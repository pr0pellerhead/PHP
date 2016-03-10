<?php 


// print_r($_POST);
// print_r($_FILES);

if(isset($_FILES['slika'])){

	$types = ['image/jpeg', 'image/png', 'image/gif'];
	$size  = 1024 * 1024 * 2;

	if(in_array($_FILES['slika']['type'], $types) && $_FILES['slika']['size'] < $size && $_FILES['slika']['error'] == 0){

		$r = rand(1000000000, 9999999999);
		$upload_dir = 'uploads/';
		$file_name = $_FILES['slika']['name'];
		$temp_location = $_FILES['slika']['tmp_name'];
		$new_location = $upload_dir.$r.'_'.$file_name;

		if(move_uploaded_file($temp_location, $new_location)){
			echo "Upload successfull";
		} else {
			echo "Upload failed by unknown reason!";
		}
	} else {
		echo "File does not fit the criteria!";
	}
} else {
	echo "No file was attached for upload";
}



?>