<?php 
	$sliki = scandir('uploads/');
	// print_r($sliki);
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/lightbox.css">
	</head>
	<body>
		<?php foreach($sliki as $s){
			if($s != '.' && $s != '..'){
		?>
		<a href="uploads/<?php echo $s?>" data-lightbox="roadtrip">
			<img src="uploads/<?=$s?>" alt="" width="100">
		</a>
		<?php }} ?>
		
		<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
		<script src="js/lightbox.js"></script>
	</body>
</html>