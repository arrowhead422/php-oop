
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
if(is_string("hello")){   // the frist string only echos out the if statment.

echo "hello and good day";
}
else
{
echo "hello my name is xiang"; // thats because the bracket is preven the if and else togeter, which causes display only one echo  

var_dump(is_string("XVY"));

var_dump(is_string("8008"));

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



if (is_string(":) hello") // 

echo ":)";

else

echo ":(";

var_dump(is_string("a string are character data"));

var_dump(is_string("7777"));

var_dump(is_string("123"));

var_dump(is_string("true"));



?>

</body>
</html>