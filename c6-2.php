<?php 

$fh = fopen('test.txt', 'a+'); // otvoranje na fajl
// echo $fh;

fwrite($fh, 'TEST! '); // zapis vo fajl

rewind($fh); // pozicioniranje na file read pointerot na pochetok na fajlot

$size = filesize('test.txt'); // zemanje na goleminata na fajlot

$text = fread($fh, $size); // chitanje od fajlot
echo $text;

fclose($fh); // zatovoranje na fajlot

unlink('test.txt'); // brishenje na fajlot

?>