
<html>
<head>
	<title></title>
</head>
<body>

<?php

/**
* 
*/

//====example 1====//
//Question :notes why you think it outputs this along with your three other examples.

if(is_string("hello")){   // is because the function var_dump can check and display the structured information.

echo "hello and good day";// the frist string only echos out the if statment.
}
else
{
echo "hello my name is xiang"; // thats because the bracket is preven the if and else togeter, which causes display only one echo  

var_dump(is_string("XVY"));

var_dump(is_string("8008")); // the var_dump define as The var_dump() function is used to display structured information (type and value) about one or more  variables. 
var_dump(is_string("123"));

var_dump(is_string("false"));
}

//====example 2====//

if (is_string("string")) // second example. This example shows what happen if you dont have bracket.

echo "It is a string";

else

echo "it is a string";

var_dump(is_string("a string are character data"));

var_dump(is_string("7777"));

var_dump(is_string("123"));

var_dump(is_string("true"));

//=====example 3====//


$weather = "hello";
if (is_string("hello")){ // if and else statment can use many type of function

echo "yes"; // the bracket example
is_array($weather);
var_dump(is_double(555.5));
}
else

echo "no";
{
is_string("hello");



}








$b = 3.1;
$c = true;
var_dump($b, $c);


?>

</body>
</html>