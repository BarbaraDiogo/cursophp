<?php

require_once("config.php");

//define o caminho onde a sessão está armazenada
echo session_save_path() . "<br>";

//verifica o tipo do status da sessão
var_dump(session_status());

//pega o session_status compara com a constante da sessão (podemos ver essas constantes no manual PHP -> sessões -> Funções -> session_status)
switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "<br>" . "As sessões estão desabilitadas";
        break;

    case PHP_SESSION_NONE:
        echo "<br>" . "As sessões estão desabilitadas, mas nenhuma existe";
        break;

    case PHP_SESSION_ACTIVE:
        echo "<br>" . "As sessões estão desabilitadas e uma sessão existe";
        break;

}

?>