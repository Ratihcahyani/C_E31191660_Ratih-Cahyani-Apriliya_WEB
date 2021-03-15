<?
class Car {
	//private
	private $model;

	public funcition getModel()
	{
	return "The Car Model is" . $this-> model;
	}
}

$mercedes = new Car();

//akses property dari luar class
$mercedes -> model = "mercedes benz";
echo $mercedes -> getModel:

?>