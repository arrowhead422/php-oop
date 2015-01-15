
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
		return "mankind first stared they alreally created the".$this->law. "and" $this->philosophy. ":)";
	}

	}

	class job extends mankind{
		function __construct($woman, $man, $child, $techology, $philosophy, $law){
			parent::__construct($woman, $man, $child, $techology, $philosophy, $law);
			$this->meow = $meow;
		}
		function meet(){
			return $this->meow;

		}

	}

	class life extends animal{
		function __contruct()
	}

?>

</body>
</html>