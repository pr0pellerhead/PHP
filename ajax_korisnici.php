<?php

// ajax_korisnici.php 

require 'admin/db.php';

$sql = "select * from korisnici";
$query = $db->query($sql);
$res = $query->fetchAll(PDO::FETCH_ASSOC);
unset($db);

$output = json_encode($res);
echo $output;

?>