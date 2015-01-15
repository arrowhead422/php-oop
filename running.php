<html>
<head>
	<title></title>
</head>
<body>

<?php 
	
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
		return "mankind first stared they alreally created the". $this->law . "and". $this->philosophy. ":)";
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

	class life extends mankind{
		function __contruct($woman, $man, $child, $techology, $philosophy, $law){
		parent::__construct($woman, $man, $child, $techology, $philosophy, $law);
			$this->philosophy = $philosophy;
		}

	}
	function intent(){
		return $this->philosophy;
	}

	$job = new job("man", "race", "million", "smart", 72, true);
	print "every human can and have". $job->HowBasic();


?>
</body>
</html>