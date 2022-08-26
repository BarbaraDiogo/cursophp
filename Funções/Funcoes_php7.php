<?php

function soma(int ...$valores){ //um array com todos os valores do mesmo tipo
    return array_sum($valores);
}
echo soma(2,3).'<br>';
echo soma(25,33).'<br>';
echo soma(1.5, 3.2);

function soma2(int ...$valores):string{ //conversao do tipo de dados para uma string
    return array_sum($valores);
}
echo var_dump(soma2(2,3)).'<br>';
echo soma2(25,33).'<br>';
echo soma2(1.5, 3.2);

?>