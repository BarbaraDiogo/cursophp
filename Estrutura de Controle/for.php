<?php

for($i = 0; $i < 1000; $i+=5){ // pula de 5 em 5
    if($i > 200 && $i< 800) continue;

    if($i === 900) break;

    echo $i . "<br>"; //concatenar com a quebra de linha
}


//exemplo de looping infinito, derruba o servidor
for($i=0; $i<10; $i--){
    echo $i . "<br>";
}

/*
Ultimos 100 anos, usando HTML
*/

echo "<select>";

for ($i = data("Y"); $i > data("Y") - 100; $i--){
    echo '<option value="' .$i. '">'.$i. '</option>';
}

echo "</select>";

?>