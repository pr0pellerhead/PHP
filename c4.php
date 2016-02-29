<?php 

// $niza = array(
// 	"A" => "eden",
// 	"B" => "dva",
// 	"C" => "tri",
// 	"D" => "chetiri",
// 	"E" => "pet",
// 	"F" => "shest",
// 	"G" => "sedum",
// 	"H" => "osum",
// 	"I" => "devet",
// 	"J" => "deset",
// );

// foreach($niza as $element){
// 	echo $element;
// 	echo "<br/>";
// }


// $c = count($broevi);
// $zbir = 0;

// foreach($broevi as $broj){
// 	$zbir += $broj;
// }

// echo $zbir / $c;$broevi = [2, 4, 7, 9, 23, 32, 65, 987, 32, 11];


$tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec augue auctor justo euismod semper quis quis nulla. In ut erat a felis dapibus malesuada in ut odio. Sed vitae ultricies arcu. In hac habitasse platea dictumst. In ante erat, interdum at massa et, condimentum bibendum sem. Praesent quis mauris augue. Aliquam tristique, erat eget iaculis efficitur, mauris tellus auctor urna, id porta eros tellus et risus. Pellentesque vitae lobortis tortor, sed tristique nisl. Fusce eget mi hendrerit, dictum mauris non, congue neque. Duis dapibus sem eget rhoncus volutpat. Morbi vitae sem nec mauris facilisis varius a vitae nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed viverra euismod metus, sit amet facilisis erat dapibus at. Donec dignissim gravida sollicitudin.

Proin laoreet tincidunt diam at scelerisque. Nam ac feugiat augue. Nam luctus rutrum augue, quis molestie erat. Nulla eget diam eget lectus semper rhoncus. Donec turpis erat, tempus eu metus sodales, sagittis placerat sapien. Fusce venenatis dignissim purus, vel dapibus eros tempus pellentesque. Duis at aliquam tortor. Nam et mauris aliquam, mollis nibh et, ultrices neque. Curabitur mattis lorem sit amet massa aliquet consequat. Nullam a neque pharetra, cursus purus convallis, tempus ligula. Sed sagittis eleifend molestie.

Nam quis scelerisque justo. Maecenas bibendum nec nisi bibendum eleifend. Pellentesque tempor, lorem luctus hendrerit suscipit, risus eros elementum elit, sit amet efficitur nisi orci eget turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elit vitae lacus bibendum dictum ut ac enim. Morbi vestibulum, justo fringilla cursus viverra, velit ex pellentesque risus, sit amet feugiat nibh lectus nec lectus. Praesent blandit nisl id orci sagittis varius. Integer nec erat et odio eleifend dignissim. Nulla viverra dignissim imperdiet. Fusce non congue purus. Nullam aliquam sit amet dolor ut viverra. Praesent vehicula volutpat porttitor. Nulla non justo et sapien laoreet efficitur eu ut dolor. Morbi augue mauris, aliquam convallis sapien sit amet, auctor aliquet purus. Nulla sed nunc luctus, blandit odio ut, interdum massa.

Aenean pellentesque nec dui non condimentum. Morbi dapibus sapien sed diam dapibus ullamcorper. Ut vitae lacinia tellus, ut vulputate nibh. Vestibulum nec massa vel nisi aliquam rhoncus. Proin sed molestie sapien. Phasellus maximus purus sit amet nulla lacinia pulvinar. Pellentesque semper vitae ipsum nec consequat. Curabitur facilisis mi quis mi mattis tristique. Donec sollicitudin metus felis, vel scelerisque lectus aliquam id. In hac habitasse platea dictumst. Nullam ac fermentum tellus. Quisque mi nulla, posuere rutrum tristique ut, scelerisque vitae ipsum. Aenean auctor est in scelerisque tempor. Donec luctus scelerisque posuere. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Proin a fringilla orci... Sed ut leo arcu. Vestibulum dapibus sollicitudin risus quis semper. Sed dolor augue, fringilla nec urna et, mollis fringilla justo. In eleifend odio sed enim tincidunt volutpat. Etiam vitae luctus ex, sed sodales orci. Duis in tellus nec erat ullamcorper egestas quis ultrices erat. Phasellus vitae nunc lorem. Aliquam sed varius elit, vel laoreet felis. Sed a malesuada eros, ut dictum ante.";

$recenici = explode('. ', $tekst);
$recenici_count = 0;

$zborovi = explode(' ', $tekst);
$zborovi_count = 0;

foreach ($recenici as $r) {
	$recenici_count++;
}

foreach ($zborovi as $r) {
	$zborovi_count++;
}

echo "Zborovi: ".$zborovi_count;
echo "<br/>";
echo "Recenici: ".$recenici_count;
echo "<br/>";
echo "<br/>";

$reverse = '';

for($i = count($recenici) - 1; $i >= 0; $i--){
	$reverse .= ' '.$recenici[$i].'.';
}

echo $reverse;

// Sed a malesuada eros, ut dictum ante {}[];':".
// Сед а малесуада ерос, ут дицтум анте ШЃшѓчќЧЌ.



?>