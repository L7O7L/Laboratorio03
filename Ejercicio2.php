

<?php         
	$x=$_GET["numer1"];
	$y=$_GET["numer2"];
    $z=$_GET["numer3"];
    $a=$_GET["numer4"];

    $sum= $x+$y;
    $producto= $z * $a;

    echo "La suma de los 2 primeros numeros es $sum", "<br>";
    echo "El producto del tercer y cuarto numero es $producto", "<br>";
?>
