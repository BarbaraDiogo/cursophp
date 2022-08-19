<?php

//passando um texto por parametro dentro da função
function Ola($texto){
    return "Olá, $texto!";
}

//texto passado como parametro
echo Ola("Mundo");
echo Ola("Glaucio");
echo Ola("Glaucio");

//passando mais de um parametro
function Ola2($texto = "mundo", $periodo = "Bom dia!"){
    return "Olá, $texto! $periodo";
}

//texto passado como parametro
echo Ola2();
echo Ola2("");
echo Ola2("Glaucio", "Boa tarde");
echo Ola2("Glaucio", "");


//função que funciona dentro de outra
function Cumprimento(){
    //recupera e retorna num array todos os argumentos passados dentro da função
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(Cumprimento("Bom dia!"));
?>