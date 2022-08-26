<?php

//Passagem por Valor
$a = 10;

//O $a dentro da função não é o mesmo que o que está fora
function TrocaValor($a){
    $a += 50;
    return $a;
}

echo TrocaValor($a);
echo "<br>";
echo $a;


//Paasagem por Referência
$a = 10;

//O $a dentro da função é o mesmo que o de fora
function TrocaValor2(&$a){
    $a += 50;
    return $a;
}

echo TrocaValor2($a);
echo "<br>";
echo $a;
//Então, mudando o valor por referencia ele muda tanto dentro qnt fora da função


$data = array(
    'nome' => 'João',
    'idade' => 20
);
foreach ($pessoa as $value){
    echo $value.'<br>';
}

foreach ($pessoa as &$value){ // usando a passsagem por valor o resultado da variavel muda dentro e fora do foreach
    if(gettype($value) === 'integer') $value += 10; // se o tipo da variavel $value for int é p somar 10 nela
    echo $value.'<br>';
}
print_r($pessoa); //printa o array

?>