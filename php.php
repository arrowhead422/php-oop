
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	class weather{
				public $weather1 = "spring"; // for every varible you have to use the public, protected, and private keywords.
				public $weather2 = "summer";
				public $weather3 = "fall";
				public $weather4 = "winter";
	
				function theweather() {
				return “$this­>weather1” .  //any object­by­object basis using the characters ‘­>’ in conjunction with an object variable and property name.
				“{$this­>weather2}”;
				}

}
$me = new weather();

$me­> weather1 = “summber”;

$me­> weather4 = “winter”;

print “The weather is {$me­>theweather()}.”;

	





?>



</body>
</html>