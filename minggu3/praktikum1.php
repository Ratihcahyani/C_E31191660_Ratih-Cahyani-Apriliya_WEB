<?php
class Car {
	//public methods & properties.
	public $model;

	public function getModel()
	{
	return "The car model is". $this->model;
	}
}

$mercendes = new Car();
//akses property dari dalam class
$mercendes -> model ="Mercendes benz";
//akses property dari luar class
echo $mercendes ->getModel();

?>