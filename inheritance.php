<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

//=====example 1 =========

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








//======example 2 ==========


class fish {
	public $breed;
	public $type;
	public $name;
	public $size;
	public $fishing;
	public $where;
	public $season
	public $eat;
	public $lifeline;

function  liquid($type, $breed, $name, $size, $fishing, $where, $season, $eat, $lifeline) {
	$this->breed = $breed;
	$this->type = $type;
	$this->name = $name;
	$this->size = $size;
	$this->fishing = $fishing;
	$this->eat = $eat;
	$this->season = $season;
	$this->where = $where;
	$this->lifeline = $lifeline;

	

}

function MYfish() {

return "my brother loves".$this->fishing "at" $this->where "during the" $this->season = $season;

}

}

class bass extends fish {

function water() {

return $this->name;

}

class troud extends fish {

function liquid() {

return $this->lifeline;

}

}

//======example 2 =============


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