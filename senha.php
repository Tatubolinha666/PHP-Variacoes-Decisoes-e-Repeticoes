<?php 
session_start();
echo "<br/>Cadastre sua senha:";
$senha=123456;
echo "<br/>Digite um número real:";
$n1=15;
echo "<br/>Digite outro número real";
$n2=3;
$div=$n1/$n2;
echo "<br/>Digite novamente sua senha: ";
if ($senha) {
	echo "<br/>O resultado da divisão é igual a: ",$div;
}else
echo "Erro";
session_destroy();
 ?>