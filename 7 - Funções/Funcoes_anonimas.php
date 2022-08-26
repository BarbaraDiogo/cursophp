<?php

function teste($callback){
    //processo lento
    $callback();
}

//função sem nome é a função anonima
teste(function(){
    echo "Terminou!";
});


//colocar a função dentro de uma variável
$fn = function($a){
    var_dump($a);
};

$fn("Oi!");

?>