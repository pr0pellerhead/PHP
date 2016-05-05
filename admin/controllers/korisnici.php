<?php 
$query = $db->query('select * from korisnici');
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>