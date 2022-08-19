<?php

//exibiu a sessão
require_once("config.php");

//para apagar um variavel de sessão
session_unset["nome"];

//conteudo da sessao e aqui nós apenas usamos essa atribuição
echo $_SESSION["nome"];

//outro comando para limpar e remove o usuario a variavel de sessão
session_destroy["nome"];
?>