<?php

require "exemplo-01.php"; //obriga que o arquivo exista e que esteja funcioando corretamente, caso de errado gera um erro fatal
//require_once (traz o arquivo apenas uma vez)
require_once "exemplo-01.php";

$resultado = somar($a + $b);

echo $resultado;



?>