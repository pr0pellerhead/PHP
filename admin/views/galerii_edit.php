<h3>Galerii &raquo; <?=$res[0]['galerija']; ?></h3>
<form action="controllers/galerii_slika_add.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$res[0]['id']; ?>">
	<input type="file" multiple name="sliki[]">
	<button type="submit">Add images</button>
</form>
<table width="80%" border="1">
	<tr>
		<td>Slika</td>
		<td>Ime</td>
		<td>Delete</td>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td>
			<img src="../uploads/<?=$row['slika_ime'] ?>" width="80" alt="">
		</td>
		<td>
			<?=$row['slika_ime'] ?>
		</td>
		<td>
			<a href="controllers/galerii_slika_delete.php?id=<?=$row['slika_id'] ?>&img=<?=$row['slika_ime'] ?>&gid=<?=$res[0]['id']; ?>">delete</a>
		</td>
	</tr>
	<?php } ?>
</table>