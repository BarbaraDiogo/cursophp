<?php

include "exemplo-01.php"; // usaremos o include para trazer a função somar para esse arquivo
// quando o arquivo tiver em outro diretório nome_da_pasta/nome_arquivo, pa subir um diretorio ../nome_da_pasta/nome_arquivo
//te dá acesso ao include_path (procura arquivos não encontrados) e ao include dinamico (trazer URL como pasta -> péssima prática)

$resultado = somar(10, 20);

echo $resultado;

?>