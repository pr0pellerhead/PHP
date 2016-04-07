<?php 

if(!file_exists('counter.txt')){
	$fh = fopen('counter.txt', 'a+');
	fwrite($fh, '0');
	fclose($fh);
}

$c = file_get_contents('counter.txt');
$fh = fopen('counter.txt', 'w');
$c++;
fwrite($fh, $c);
fclose($fh);

echo $c;
?>