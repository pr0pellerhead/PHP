<h3>Galerii</h3>
<form action="controllers/galerii_add.php" method="post" enctype="multipart/form-data">
	<input type="text" name="ime" placeholder="gallery name" required>
	<input type="file" multiple name="sliki[]">
	<button type="submit">Save</button>
</form>
<table border="1" width="80%">
	<tr>
		<td>id</td>
		<td>ime</td>
		<td>edit</td>
		<td>delete</td>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['ime']?></td>
		<td>
			<a href="?page=galerii_edit&id=<?=$row['id']?>">
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