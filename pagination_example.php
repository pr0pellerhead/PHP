<?php 

$dsn = 'mysql:dbname=ljubenlape;host=127.0.0.1';
$username = 'root';
$password = 'root';

$db = new PDO($dsn, $username, $password);

// *********************************************

$postsPerPage = 10;
$postsCount = 0;
$pagesNumber = 0;
$currentPage = 1;

$sql = "select count(*) as count from pagination_example";
$query = $db->query($sql);
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$postsCount = $res[0]['count'];
$nextPage = 2;
$previousPage = 1;

// $pagesNumber = ($postsCount - ($postsCount % $postsPerPage)) / $postsPerPage;
// if($postsCount % $postsPerPage != 0){$pagesNumber++;}

$pagesNumber = ceil($postsCount / $postsPerPage);


// *************************************************

if(isset($_GET['page']) && strlen($_GET['page']) > 0){
	$currentPage = (int)$_GET['page'];
}

$sql = "select * from pagination_example limit :page_number, :offset";
$query = $db->prepare($sql);
$query->bindValue(':page_number', (($currentPage - 1) * 10), PDO::PARAM_INT);
$query->bindValue(':offset', $postsPerPage, PDO::PARAM_INT);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);


if($currentPage != 1 && $currentPage != $pagesNumber){
	$nextPage = $currentPage + 1;
	$previousPage = $currentPage - 1;
}

if($currentPage == $pagesNumber){
	$nextPage = $currentPage;
	$previousPage = $currentPage - 1;
}

if($pagesNumber == 1){
	$nextPage = $currentPage;
	$previousPage = $currentPage;
}

?>

<!-- POSTS -->

<dl>
	<?php foreach($res as $row){ ?>
	<dt><?=$row['id'];?> - <?=$row['name'];?></dt>
	<dd><?=$row['content'];?></dd>
	<?php } ?>
</dl>

<!-- PAGINATION -->
<div style="text-align: center;">
	<a href="pagination_example.php?page=<?=$previousPage;?>">previous</a>
	<a href="pagination_example.php?page=1">first</a>
	<?php 

	for($i = 1; $i <= $pagesNumber; $i++){ 
	
		$class = '';
		if($i == $currentPage){
			$class = 'active-paging-member';
		}
	?>
	<a href="pagination_example.php?page=<?=$i;?>" class="<?=$class;?>"><?=$i;?></a>

	<?php } ?>
	<a href="pagination_example.php?page=<?=$pagesNumber;?>">last</a>
	<a href="pagination_example.php?page=<?=$nextPage;?>">next</a>
</div>