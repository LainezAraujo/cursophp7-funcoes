<?php 

function ola($texto="Mundo",$periodo = "Bom dia"){

	return "Olá $texto! $periodo!<br/>";
}

echo ola();// escreve valor padrão
echo ola(" ","Boa noite");// não escreve nada
echo ola("Glaucio","Boa Tarde");
echo ola("João","");
 ?>
