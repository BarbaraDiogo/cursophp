<?php

echo date("d/m/Y H:i:s"); //dentro da data a gnt passa o parametro do que queremos receber

echo "<br>";

//obter o timestamp
echo time();


//converte uma string em timestemp
$ts = strtotime("2021-09-11");
//com esse resultado usamos dentro da função date()
date("l, d/m/Y", $ts);

?>