<?php

include "Math.php";

$math = new Math();

echo "<h2>Area do Circulo</h2>";
echo $math->calculateCircleArea($_POST["radius"]);
echo "<br><h2>Hipotenusa</h2>";
//$math1 = new Math();
echo $math->calculaHipotenusa($_POST["catetoAdj"],$_POST["catetoOp"]);
