<html>
<head>
<title>Christin Nandari</title>
</head>
<body>
<?php
$t = date("H");

if($t < "10") {
	echo "Have a good morning!" , "<br>";
} else
if($t < "20") {
	echo "Have a good day!" , "<br>";
} else {
	echo "Have a good night!";
}
$favcolor = "red";

switch ($favcolor) {
	case "red":
		echo "your favorite color is red!";
		break;
	case "blue":
		echo "your favorite color is blue!";
		break;
	case "green":
		echo "your favorite color is green!";
		break;
	default:
		echo "your favorite is neither red, blue, nor green!";
}

$x = 1;

while($x <= 5) {
	echo "The number is: $x <br>";
	$x++;
}
$x = 1;
do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);
for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
}
$colors = array("merah"=>"red", "green", "blue", "yellow");

foreach ($colors as $key => $value) {
	echo "$key => $value <br>";
}
$x = 10;
$y = 3;
//echo pow ($x,$y), "<br>";
//$x += $y;
//echo $x;
var_dump (is_string("Hello"));
echo "<br>";


var_dump ($x==10 xor $y==3);

$text="Hello";
$string=" world";
echo $text.$string;
$text.="world";
echo "<br>".$text;
?>
</body>
</html>