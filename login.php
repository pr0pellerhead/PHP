<?php 

if(strlen(trim($_POST['username'])) > 0 && strlen(trim($_POST['password'])) > 0){

	if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
		echo "Welcome";
	} else {
		echo "No!";
	}

} else {

	echo "No username or password set";
	
}

?>