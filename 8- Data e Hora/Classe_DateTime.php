<?php
//permite manipularmos a data
$dt = new DateTime();//intanciando um obj (criar objeto a partir de uma classe)

echo $dt->format("d/m/Y H:i:s"); // usamos a clase p chegar nesse resultado



$dt2 = new DateTime();

echo $dt2->format("d/m/Y H:i:s"); //antes

echo "<br>";

$periodo = new DateInterval("P15D"); //periodo de 15 dias

$dt2->add($periodo);

echo $dt2->format("d/m/Y H:i:s"); // depois
?>