<?php
//Definindo a configuração regional com setlocale()
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //trazer os dias, meses e afins em português
//LC_ALL => muda toda alocalização para portugues

echo ucwords(strftime("%A %B")); //Formata uma hora/data de acordo com as configurações locais

?>