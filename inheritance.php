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
	}

?>

</body>
</html>