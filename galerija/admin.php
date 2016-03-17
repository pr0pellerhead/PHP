<?php 
	// include('functions.php');
	include_once('functions.php');

	$FOLDER = 'uploads/';

	// upload
	if(isset($_FILES['images'])){
		$num = count($_FILES['images']['name']);

		for($i = 0; $i < $num; $i++){

			if($_FILES['images']['error'][$i] == 0){
				upload($_FILES['images']['name'][$i], $_FILES['images']['tmp_name'][$i], $_FILES['images']['type'][$i], $_FILES['images']['size'][$i]);
			} else {
				echo "Can't upload <b>".$_FILES['images']['name'][$i]."</b><br/>";
			}
		}
	}

	// delete
	if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['image'])){
		unlink($FOLDER.$_GET['image']);
	}

	$sliki = scandir($FOLDER);
?>

<form action="admin.php" method="post" enctype="multipart/form-data">
	<input type="file" name="images[]" multiple/>
	<button type="submit">Upload images</button>
</form>
<hr/>
<table width="50%" border="1">
	<tr>
		<th>Preview</th>
		<th>Image name</th>
		<th>Delete</th>
	</tr>
	<?php foreach($sliki as $s){
		if($s != '.' && $s != '..'){
	?>
	<tr>
		<td>
			<img src="uploads/<?=$s?>" alt="" width="100" height="100">
		</td>
		<td><?=$s?></td>
		<td>
			<a href="admin.php?action=delete&image=<?=$s?>">
				[delete]
			</a>
		</td>
	</tr>
	<?php }} ?>
</table>