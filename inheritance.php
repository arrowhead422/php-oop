<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	class music {
		public $type;
		public $year;
		public $time;
		public $name;
		public $quality
		
		function __construct($type, $year, $time, $name, $quality)
		{
			$this->type = $type;//The $this is a mechanism by which a class can refer to an object instance.
			$this->year = $year;
			$this->time = $time;
			$this->name = $name;
			$this->quality = $quality;



		}

		function Mymusic(){
			return "my favor type of music is" .$this->type "and the name is". $this->name;

		}

	}

	class pop extends music{ // you can created a child class, that can act as extends the class
		function yellow(){
			return $this->coldplay;
		}

	}

	class rock extends music{
		function highway(){
			return $this->hellye;
		}

	}



















class fish {
	public $breed;
	public $type;
	public $name;
	public $size;
	public $where;
	public $eat;
	public $lifeline;

function __construct($type, $breed, $name, $size, $where, $eat, $lifeline) {
	$this->breed = $breed;
	$this->type = $type;
	$this->name = $name;
	$this->size = $size;
	$this->where = $where;
	$this->eat = $eat;
	$this->lifeline = $lifeline;

	

}

function fishing() {

return “This is my “ . $this­>firstName .

}

}

class Cat extends Animal {

function greet() {

return $this­>meow”;

}

“ and last ” . $this­>lastName;

}

class Dog extends Animal {

function hello() {

return $this­>bark;

}

}
$cat = new Cat(“Cat”, “Mellow”, “Yellow”, “male”, 15);

print “Animal 1 is a ” . $cat­>getName();
?>

</body>
</html>