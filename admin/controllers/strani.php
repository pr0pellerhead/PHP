<?php 
$query = $db->query('select id, naslov, objavena_na from strani');
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$query_kategorii = $db->query('select * from kategorii');
$res_kategorii = $query_kategorii->fetchAll(PDO::FETCH_ASSOC);

$query_galerii = $db->query('select * from galerii');
$res_galerii = $query_galerii->fetchAll(PDO::FETCH_ASSOC);
?>