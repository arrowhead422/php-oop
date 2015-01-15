
<html>
<head>
	<title></title>
</head>
<body>

<?php 

//========example 1 =============

	class mankind{
		public $woman;
		public $man;
		public $child;
		public $techology;
		public $philosophy;
		public $law;
	
	function __construct($woman, $man, $child, $techology, $philosophy, $law){
		$this->woman = $woman;
		$this->man = $man;
		$this->child = $child;
		$this->techology = $techology;
		$this->philosophy = $philosophy;
		$this->law = $law;
	}

	function HowBasic(){
		return "mankind first stared they alreally created the". $this->law. "and" $this->philosophy. ":)";
	}

	}

	class job extends mankind{
		function __construct($woman, $man, $child, $techology, $philosophy, $law){
			parent::__construct($woman, $man, $child, $techology, $philosophy, $law);
			$this->law = $law;
		}
		function meet(){
			return $this->law;

		}

	}

	class life extends animal{
		function __contruct($woman, $man, $child, $techology, $philosophy, $law)
		parent::__construct($woman, $man, $child, $techology, $philosophy, $law);
			$this->philosophy = $philosophy;

	}
	function intent(){
		return $this->philosophy;
	}

	$job = new job("man", "race", "million", "smart", 72, true);
	print "every human can and have". $cat->HowBasic();



//======example 2 =========

	class music {
		public $type;
		public $year;
		public $time;
		public $player;
		public $name;
		public $quality
		
		function hipster($type, $year, $time, $player, $name, $quality)
		{
			$this->type = $type;//The $this is a mechanism by which a class can refer to an object instance.
			$this->year = $year;
			$this->time = $time;
			$this->player = $player;
			$this->name = $name;
			$this->quality = $quality;



		}

		function Mymusic(){
			return "my favor type of music is" .$this->type "and the name is". $this->name;

		}

	}

	class coldplay extends music{ // you can created a child class, that can act as extends the class
		function yellow(){
			return $this->name;
		}

	}

	class icebaby extends music{
		function baby(){
			return $this->quality;
		}

	}
	$pop = new pop("when" "fame" "play");

print "this music has " . $pop­>Mymusic();


//=======example 3==========

class tvshow{
	public $familyguy;
	public $simpson;
	public $name;
	public $when;
	Public $publish;

	function watch($familyguy, $simpson, $name, $when, $publish){
		$this->familyguy = $familyguy;
		$this->simpson = $simpson;
		$this->name = $name;
		$this->when = $when;
		$this->publish = $publish;

	}
	function watchtwo(){
		return "my favor tvshow is".$this->$familyguy "and" $this->simpson;
	}

}
class peter extends tvshow{
	function hello(){
		return $this->familyguy.
	}
}
	class homor extends tvshow{
		function hi(){
			return $this->simpson;
		}
	}

$tv = new tv("when" "fame" "play");

print "this tv has " . $tv­>watchtwo();





?>

</body>
</html>