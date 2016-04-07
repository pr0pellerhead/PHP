<?php 

class Roditel {
	protected $parent_name = 'John Doe';
	protected $parent_age = 46;

	public function setParentName($name) {
		$this->parent_name = $name;
	}

	public function setParentAge($age) {
		$this->parent_age = $age;
	}

	public function getParentName() {
		return $this->parent_name;
	}

	public function getParentAge() {
		return $this->parent_age;
	
}}

class Dete extends Roditel {
	protected $child_name = 'Jane Doe';
	protected $child_age = 22;

	

	public function setChildName($name) 
{		$this->child_name = $name;
	}

	public function setChildAge($age) {
		$this->child_age = $age;
	}

	public function getChildName() {
		return $this->child_name;
	}

	public function getChildAge() {
		return $this->child_age;
	}
}

class Vnuche extends Dete{
	private $vnuche_name;
	private $vnuche_age;
}


$d = new Vnuche;
$d->setChildName('Pero');
$d->setParentName('Janko');

print_r($d);





?>