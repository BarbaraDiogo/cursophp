<?php

function Ola(){
    //torna o código mais abstrato
    return "Ola, Mundo!";
}

echo Ola();
$frase = Ola();

//quantidade de caracteres
echo strlen($frase);


function salario(){
    return 946.00;
}

//colocamos em () pq iremos concatenar os dados
echo "Jose recebeu 3 salarios: " (salario()*3);
?>