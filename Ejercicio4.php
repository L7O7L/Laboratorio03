<?php
	$x=$_GET["numer1"];
	$y=$_GET["numer2"];
	$z=$_GET["numer3"];


if (($x > $y) or ($x > $z)){
	echo "$x es mayor que $y y $z";
}
elseif (($y > $z) or ($y > $z)){
	echo "$y es mayor que $x y $z";
}
elseif (($z > $y) or ($z > $x)){
	echo "$z es mayor que $y y $x";
}
else {
	echo "Los numero $x , $y y $z son iguales";
}
?>
