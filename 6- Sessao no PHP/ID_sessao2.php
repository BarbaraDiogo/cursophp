<?php

//antes do session start iremos recuperar uma id da sessão
session_id('valor atual do id que apareceu no browser');

require_once("config.php");

//gera um novo ID de sessão a cada reload do browser
session_regenerate_id();

echo session_regenerate_id();

//mostra o que tem dentro do array
var_dump($_SESSION);

?>