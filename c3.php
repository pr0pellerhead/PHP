<?php 

// $gradovi[0] = "New York";
// $gradovi[1] = "Berlin";
// $gradovi[2] = "Paris";
// $gradovi[3] = "Vienna";
// $gradovi[4] = "London";

// // echo $gradovi; // array to string conversion
// print_r($gradovi);
// var_dump($gradovi);

// $drzavi = array("USA", "Germany", "Austria", "France");
// print_r($drzavi);

// $kontinenti = array();

// $kontinenti[] = "Europe";
// $kontinenti[] = "Africa";
// $kontinenti[] = "Asia";
// $kontinenti[] = "North America";
// $kontinenti[] = "South America";
// $kontinenti[] = "Antartica";
// $kontinenti[] = "Australia";
// var_dump($kontinenti);

// $iminja = ["Janko", "Pero", "Stanko"];
// print_r($iminja);

// for($i = 0; $i < 10; $i = $i + 1){
// 	echo $i;
// 	echo "<br/>";
// }

// for ($i = 13; $i < 99; $i++) { 
// 	if ($i % 2 == 0) {
// 		echo $i;
// 		echo "<br/>";
// 	}
// }

// for($j = 50; $j > 30; $j--){
// 	if ($j % 2 == 1) {
// 		echo $j;
// 		echo "<br/>";
// 	}
// }


// for($i = 0, $j = 50; $i > 30, $j > 0; $i++, $j--){
// 	echo "i: ".$i." j: ".$j."<br/>";
// }


// $a = 0;

// while($a < 10){
// 	echo $a;
// 	$a++;
// }

// $b = 0;

// do{
// 	echo $b;
// 	$b++;
// }while($b < 10);


// $b = 55;
// $print = true;

// while($b < 127){
// 	if($b % 2 == 0){
// 		if($print == true){
// 			echo $b.'<br/>';
// 			$print = false;
// 		}else{
// 			$print = true;
// 		}
// 	}
// 	$b++;
// }


// $kontinenti = array();

// $kontinenti[] = "Europe";
// $kontinenti[] = "Africa";
// $kontinenti[] = "Asia";
// $kontinenti[] = "North America";
// $kontinenti[] = "South America";
// $kontinenti[] = "Antartica";
// $kontinenti[] = "Australia";

// $c = count($kontinenti);

// // echo $c;

// for ($i=0; $i < $c; $i++) { 
// 	echo $kontinenti[$i].'<br/>';
// }


$student['ime'] = 'Bojan';
$student['prezime'] = 'Gavrovski';
$student['prosek'] = 6.4;

// print_r($student);

// echo $student['prezime'];

$studenti = array(
	array(
		'ime' => 'Bojan',
		'prezime' => 'Gavrovski',
		'prosek' => 6.4
	),
	array(
		'ime' => 'Pero',
		'prezime' => 'Perovski',
		'prosek' => 8.0
	),
	array(
		'ime' => 'Janko',
		'prezime' => 'Jankovski',
		'prosek' => 7.3
	),
);

// print_r($studenti);
// echo $studenti[1]['prezime'];

$c = count($studenti);

// for ($i=0; $i < $c; $i++) { 
// 	echo $studenti[$i]['ime'];
// 	echo '<br/>';
// }

$max_prosek = 0;
$student = '';

for($i = 0; $i < $c; $i++) {
	if($studenti[$i]['prosek'] > $max_prosek){
		$max_prosek = $studenti[$i]['prosek'];
		$student = $studenti[$i]['ime'].' '.$studenti[$i]['prezime'];
	}
}


echo 'Student so najvisok prosek ('.$max_prosek.') e studentot: '.$student;
?>