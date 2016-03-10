<pre>
<?php //print_r($_FILES); ?>
</pre>

<?php 

// MULTIPLE FILE UPLOAD
if(isset($_FILES['slika'])){

	$num = count($_FILES['slika']['name']);

	for($i = 0; $i < $num; $i++){

		if($_FILES['slika']['error'][$i] == 0){
			upload($_FILES['slika']['name'][$i], $_FILES['slika']['tmp_name'][$i], $_FILES['slika']['type'][$i], $_FILES['slika']['size'][$i]);
		} else {
			echo "Can't upload <b>".$_FILES['slika']['name'][$i]."</b><br/>";
		}
	}
}


// SINGLE FILE UPLOAD
// if(isset($_FILES['slika']) && $_FILES['slika']['error'] == 0){
// 	upload($_FILES['slika']['name'], $_FILES['slika']['tmp_name'], $_FILES['slika']['type'], $_FILES['slika']['size']);
// }

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