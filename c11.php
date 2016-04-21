<?php 

// c11.php

$dsn = 'mysql:dbname=ljubenlape;host=127.0.0.1';
$username = 'root';
$password = 'root';

$db = new PDO($dsn, $username, $password);

// print_r($db);

// send query to database
$query = $db->query('select * from korisnici');

// fetch results from query
$res = $query->fetchAll(PDO::FETCH_ASSOC);

// print results in php
// print_r($res);
?>
<table border="1" width="80%">
	<tr>
		<td>id</td>
		<td>ime</td>
		<td>email</td>
		<td>password</td>
		<td>id_tip_korisnici</td>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['ime']?></td>
		<td><?=$row['email']?></td>
		<td><?=$row['password']?></td>
		<td><?=$row['id_tip_korisnici']?></td>
	</tr>	
	<?php } ?>
</table>

<form action="c11_add.php" method="post">
	Ime:<br/>
	<input type="text" name="ime" required><br/>
	Email:<br/>
	<input type="text" name="email" required><br/>
	Password:<br/>
	<input type="password" name="password" required><br/>
	Tip na korisnik:<br/>
	<input type="number" name="id_tip_korisnici" required><br/>
	<br/>
	<button type="submit">Save</button>
</form>




