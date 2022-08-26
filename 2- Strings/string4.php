<?php

$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";

$q = strpos($frase, $palavra); //qual palavra é o alvo? e o que estamos procurando dentro dessa variável

$texto = substr($frase, 0, $q); // determinar até onde quero que o texto me retorne

var_dump($q); //tipo e qual a posição dela
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //caso não queira que a palavra mãe apareça, fazendo de forma dinâmica $q + strlen($palavra) para contar a string

echo "<br>";

var_dump($texto2);

?>