<?php

function upload($fname, $ftmp, $ftype, $fsize){

	$types = ['image/jpeg', 'image/png', 'image/gif'];
	$size  = 1024 * 1024 * 10;

	if(in_array($ftype, $types) && $fsize < $size){

		$r = rand(1000000000, 9999999999);
		$upload_dir = 'uploads/';
		$file_name = $fname;
		$temp_location = $ftmp;
		$new_location = $upload_dir.$r.'_'.$file_name; // uploads/4987235423_image.jpg

		if(move_uploaded_file($temp_location, $new_location)){
			echo "Upload successfull for image: <b>$fname</b> <br/>";
		} else {
			echo "Upload failed by unknown reason for image: <b>$fname</b> <br/>";
		}
	} else {
		echo "File does not fit the criteria for image: <b>$fname</b> <br/>";
	}
}

?>