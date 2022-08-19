<form>
<!--
    Em HTML o padrão é a própria página, como não tem method declarado p método será GET
    -->
<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="OK">

</form>

<?php

if(isset($_GET)){ // para não trazer o erro de não definido

    foreach($_GET as $key => $value){
        echo "Nome do campo: " . $key . "<br";
        echo "Valor do campo: " . $value;
        echo "<hr"; //linha horizoltal
    }

}

?>