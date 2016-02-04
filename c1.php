<?php

// kod
echo "<h1>Zdravo Svetu!</h1>";

$ime = 'Pero'; // string
$godini = 24; // integer
$polnoleten = true; // boolean
$tezhina = 76.2; // float

echo $ime;
echo '<br/>';
echo $godini;
echo '<br/>';
echo $polnoleten;
echo '<br/>';
echo $tezhina;


$grad = 'New York';
echo "Jas zhiveam vo $grad";
echo "<br/>";
echo 'Jas zhiveam vo '.$grad.' od 1990ta godina <br/>';

echo "<br/>";

$p = 'drzava';
$$p = 'France'; // variable variable - promenliva promenliva

echo $drzava;

echo "<br/>";
echo 10 * 23; // mnozenje
echo "<br/>";
echo 13 / 12; // delenje
echo "<br/>";
echo 234 % 22; // ostatok od delenje
echo "<br/>";
echo 23 + 82374; // sobiranje
echo "<br/>";
echo 234 - 99822; // odzemanje
echo "<br/>";
echo 23 * 12 - 11 / 27; // prednost imaat * i /
echo "<br/>";
echo 23 * (12 - 11) / 27; // prednost imaat operaciite vo zagrada
echo "<br/>";


$text = 'Jas ziveam vo Skopje';

echo str_replace('Skopje', 'New York', $text);


function pozdrav(){ // ne vrakja nishto
	echo "<br/>";
	echo "Zdravo";
}

pozdrav();

function pozdrav2(){ // vrakja Zdravo
	return "Zdravo";
}

echo "<br/>";

echo pozdrav2();

function sobiranje($a, $b){ // vlezni parametri a, b 
	return $a + $b;
}

echo "<br/>";

echo sobiranje(12, 11);


function odzemanje(){
	$args = func_get_args();
	print_r($args);
}

odzemanje(12, 22, 65, 8787, 'csdcsd', false);

?>