<h3>Korisnici</h3>
<table border="1" width="80%">
	<tr>
		<td>id</td>
		<td>ime</td>
		<td>email</td>
		<td>password</td>
		<td>id_tip_korisnici</td>
		<td>edit</td>
		<td>delete</td>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['ime']?></td>
		<td><?=$row['email']?></td>
		<td><?=$row['password']?></td>
		<td><?=$row['id_tip_korisnici']?></td>
		<td>
			<a href="?page=korisnici_edit&id=<?=$row['id']?>">
				edit
			</a>
		</td>
		<td>
			<a href="controllers/korisnici_delete.php?id=<?=$row['id']?>">
				delete
			</a>
		</td>
	</tr>	
	<?php } ?>
</table>