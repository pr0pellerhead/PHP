<?php 

// validi iminja na promenlivi
// $ime;
// $Prezime;
// $_naselba;

// nevalidni iminja na promenlivi
// $10tekst;
// $%tekst;
// $-pero;

// parnepar(12); // 0
// parnepar(17); // 1

function parnepar($a) {
	return $a % 2;
}

// echo parnepar(23);
// echo "<br/>";
// echo parnepar(12);
// echo "<br/>";
// echo parnepar(2);


// $a = 10;

// if($a == 10){
// 	echo "a e 10";
// } else {
// 	echo "a ne e 10";
// }

//  ==  - дали е еднакво на
//  === - дали е идентично со
//  < - е помало од
//  > - е поголемо од
//  >= - е поголемо или еднакво на
//  <= - е помало или еднакво на
//  != - neednakvo


// if($b == 2){
// 	echo 2;
// } else if($b == 3){
// 	echo 3;
// } else if($b == 4){
// 	echo 4;
// } else if($b == 5){
// 	echo 5;
// } else {
// 	echo "Nepoznat broj!";
// 	echo "<br/>";
// 	echo parnepar($b);
// }

// $b = 1001;
// $c = 30;

// if($c < 10 && $b < 10000){
// 	echo "Vistina!";
// }

// // && и
// // || или

// function pogolempomal($a) {
// 	if($a < 10){
// 		echo "pomal";
// 	} else if($a > 10) {
// 		echo "pogolem";
// 	} else {
// 		echo "ednakov";
// 	}
// }


// pogolempomal(3); // pomal
// pogolempomal(54); // pogolem
// pogolempomal(10); // ednakov


$den = 'ponedelnik';

switch($den){
	case 'ponedelnik':
		echo 'Prv den od nedelata!';
	break;
	case 'vtornik':
		echo 'Vtor den od nedelata';
	break;
	case 'sreda':
		echo 'Vtor tret od nedelata';
	break;
	case 'chetvrtok':
		echo 'Vtor chetvrt od nedelata';
	break;
	case 'petok':
		echo 'Weeeee petok';
	break;
	case 'sabota':
		echo 'YES! Sabota!';
	break;
	case 'nedela':
		echo 'Utre e ponedelnik';
	break;
	default:
		echo 'Nepoznat den';
	break;
}

function par_nepar_switch($a) {

	$vrednost = $a % 2;

	switch ($vrednost) {
		case 0:
			return 'par';
		break;
		// default:
		case 1:
			return 'nepar';
		break;
	}

}

echo "<br/>";
echo par_nepar_switch(10); // par
echo "<br/>";
echo par_nepar_switch(27); // nepar

function ovoshje($o){
	// $dolzina = strlen($o);
	// $v = $dolzina % 2;

	// if($v == 0){
	if(strlen($o) % 2 == 0){
		echo 'ubavo ovoshje';
	} else {
		echo 'neubavo ovoshje';
	}
}

ovoshje('banana'); // ubavo ovoshje
ovoshje('jabolko'); // neubavo ovoshje


function denovi($d){

	switch ($d) {
		case 'ponedelnik':
		case 'vtornik':
		case 'sreda':
		case 'chetvrtok':
		case 'petok':
			return 'Raboten den';
		break;
		case 'sabota':
		case 'nedela':
			return 'Vikend!';
		break;
		default:
			return 'Vakov den ne postoi';
		break;
	}
}

function denovi1($d){

	if($d == 'ponedelnik' || $d == 'vtornik' || $d == 'sreda' || $d == 'chetvrtok' || $d == 'petok'){
		return 'Raboten den';
	} else if($d == 'sabota' || $d == 'nedela'){
		return 'Vikend';
	} else {
		return 'Vakov den ne postoi';
	}
}

echo "<br/>";
echo denovi('vtornik'); // raboten den
echo "<br/>";
echo denovi1('petok'); // raboten den
echo "<br/>";
echo denovi('sabota'); // vikend
echo "<br/>";
echo denovi1('nedela'); // vikend
echo "<br/>";

?>