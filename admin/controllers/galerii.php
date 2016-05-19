<?php 
$query = $db->query('select * from galerii');
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>