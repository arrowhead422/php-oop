
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

		$fish1 = new fish();
		$fish1->breed = "bass and has the color of";
		$fish1->color = "light green";

	}
		print "a fish call {$fish->fish()}. ";



 ?>
</body>
</html>