<?php 

interface iAvtomobil {
	public function vrtiLevo();
	public function vrtiDesno();
	public function trgni();
	public function kochi();
}

class Avtomobil implements iAvtomobil {
	public function vrtiLevo(){

	}

	public function vrtiDesno(){
		
	}

	public function trgni(){
		
	}

	public function kochi(){
		
	}
}

$a = new Avtomobil;


abstract class MotornoVozilo {

	private $br_na_trkala;

	public function setBrNaTrkala($br){
		$this->br_na_trkala = $br;
	}
}

class Mercedes extends MotornoVozilo {

}

// $mv = new MotornoVozilo;
$m = new Mercedes;
$m->setBrNaTrkala(4);
print_r($m);


?>