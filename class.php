
<html>
<head>
	<title></title>
</head>
<body>
<?php
	/**
	* 
	*/
	class fish
	{

		public $breed;
		public $size;
		public $color;
		public $area;

		function fish($breed, $size, $color, $area)
		{
		
		return "{$this->$breed}"."{$this->$color}";



		}

		$fish = new fish();
		$fish->breed = "bass and has the color of";
		$fish->color = "light green";

	}
		print "a fish call {$fish->fish()}. ";



 ?>
</body>
</html>