<?php

$qualSuaIdade = 32;

$idadeCrianca = 12;
$idadeMaior = 18;
$melhorIdade = 65;

if ($qualSuaIdade <= $idadeCrianca){
    echo "Criança";
}else if ($qualSuaIdade < $idadeMaior){
    echo "Adolescente";
}else if ($qualSuaIdade < $melhorIdade){
    echo "Adulto";
}else{
    echo "Idoso";
}

echo "<br>";

echo ($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade"; //pra condições simples

?>