<?php 

$err = 0;

if(!isset($_POST['ime']) && strlen(trim($_POST['ime'])) == 0){ $err++; }
if(!isset($_POST['prezime']) && strlen(trim($_POST['prezime'])) == 0){ $err++; }
if(!isset($_POST['rodenden']) && strlen(trim($_POST['rodenden'])) > 0){ $err++; }
if(!isset($_POST['email']) && strlen(trim($_POST['email'])) == 0){ $err++; }
if(!isset($_POST['pwd1']) && strlen(trim($_POST['pwd1'])) == 0){ $err++; }
if(!isset($_POST['pwd2']) && strlen(trim($_POST['pwd2'])) == 0){ $err++; }
if(!isset($_POST['drzava']) && strlen(trim($_POST['drzava'])) == 0){ $err++; }

if($err == 0 && trim($_POST['pwd1']) == trim($_POST['pwd2'])){

	echo "Uspeshno ste registrirani!";

} else {
	echo "Nekoi podatoci se vneseni pogreshno";
}

?>