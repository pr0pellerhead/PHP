<?php 

// c7.php

class Marker {
	// osobini - properties
	private $boja = 'crna';
	private $golemina = 'L';
	private $proizvoditel = 'Faber Castel';

	// funkcionalnosti - methods
	public function setBoja($b){
		$boi = ['crvena', 'zelena', 'sina', 'siva', 'crna'];

		if(in_array($b, $boi)){
			$this->boja = $b;
		}else{
			echo "$b is not a predefined color!";
		}
	}

	public function getBoja(){
		return $this->boja;
	}

	public function crtaj(){
		echo "Crtam so ".$this->boja." boja";
	}

	public function __construct($b){
		$boi = ['crvena', 'zelena', 'sina', 'siva', 'crna'];

		if(in_array($b, $boi)){
			$this->boja = $b;
		}else{
			$this->boja = 'crna';
		}
	}

	public function __destruct(){
		echo "DESTRUCTORRRR!";
	}
}


$m1 = new Marker('siva'); // po avtomatizam go povikuva konstruktorot
// $m1->setBoja('zelena');
// echo $m1->getBoja();
$m1->crtaj();

unset($m1); // po avtomatizam go povikuva desctruktorot

echo "\n\n\n\nEND!\n";





class File {

	private $fh; // file handle
	private $filename;

	public function __construct($filename){

		$this->fh = fopen($filename, 'a+');
		$this->filename = $filename;
	}

	public function write($text){
		fwrite($this->fh, $text);
	}

	public function read(){
		$size = filesize($this->filename);
		rewind($this->fh);
		return fread($this->fh, $size);
	}

	public function delete(){
		fclose($this->fh);
		unlink($this->filename);
	}

	public function __destruct(){
		if(file_exists($this->filename)){
			fclose($this->fh);
		}
	}
}



/* DOMASHNA */

$f = new File('text.txt'); 
// go otvora fajlot text.txt (ako fajlot ne postoi, go kreira)

$f->write('Blah blah blah'); 
// zapishuva vo fajlot

echo $f->read(); 
// ja vrakja sodrzhinata na fajlot

$f->write('Some other text...');
echo $f->read();

$f->delete(); 
// go brishe fajlot

unset($f); 
// go zatvora (brishe) objektot






// class MobilePhone {
// 	private $width = 22; // cm
// 	private $dimensions = 'inch';
// }








class Student {
	private $ime;
	private $prezime;
	private $den_na_ragjanje;

	public function setIme($i){
		$this->ime = $i;
	}

	public function getIme(){
		return $this->ime;
	}

	public function __construct($dr){
		$this->den_na_ragjanje = $dr;
	}

	public function __destruct(){
		echo "destructor";
	}
}


$s = new Student('29/10/1982');

// $s->ime = 'Bojan';
// $s->prezime = 'Gavrovski';
// $s->den_na_ragjanje = '29/10/1982';
$s->setIme('Bojan');
echo $s->getIme();

unset($s);

?>