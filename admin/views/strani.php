<h3>Strani</h3>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
	tinymce.init({ 
		selector:'textarea',
		height: 150,
		width: 700,
		plugins: [
	    'advlist autolink lists link image charmap print preview anchor',
	    'searchreplace visualblocks code fullscreen',
	    'insertdatetime media table contextmenu paste code'
		],
	  	toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	});
</script>
<form action="controllers/strani_add.php" method="post" enctype="multipart/form-data">
	<label>
		Naslov<br/>
		<input type="text" name="naslov">
	</label>
	<br/>
	<label>
		Sodrzina<br/>
		<textarea name="sodrzina"></textarea>
	</label>
	<br/>
	<label>
		Kategorii<br/>
		<select name="id_kategorija">
			<?php foreach($res_kategorii as $k){ ?>
			<option value="<?=$k[id];?>"><?=$k['kategorija'];?></option>
			<?php } ?>
		</select>
	</label>
	<br/>
	<label>
		Golema slika<br/>
		<input type="file" name="slika_golema">
	</label>
	<br/>
	<label>
		Mala slika<br/>
		<input type="file" name="slika_mala">
	</label>
	<br/>
	<label>
		Galerija<br/>
		<select name="id_galerija">
			<?php foreach($res_galerii as $g){ ?>
			<option value="<?=$g['id'];?>"><?=$g['ime'];?></option>
			<?php } ?>
		</select>
	</label>
	<br/>
</form>
<table border="1" width="80%">
	<tr>
		<td>id</td>
		<td>naslov</td>
		<td>objavena_na</td>
		<td>edit</td>
		<td>delete</td>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['naslov']?></td>
		<td><?=$row['objavena_na']?></td>
		<td>
			<a href="?page=strani_edit&id=<?=$row['id']?>">
				edit
			</a>
		</td>
		<td>
			<a href="controllers/strani_delete.php?id=<?=$row['id']?>">
				delete
			</a>
		</td>
	</tr>	
	<?php } ?>
</table>