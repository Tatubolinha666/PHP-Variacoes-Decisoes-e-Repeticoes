<?php 
echo "Cadastre sua senha:";
$senha=123456;
echo "Digite um número real:";
$n1=15;
echo "Digite outro número real";
$n2=3;
$div=$n1/$n2;
echo "Digite novamente sua senha: ";
if (!preg_match('/^[123456]*/',$senha)) {
	echo "O resultado da divisão é igual a: ",$div;
}else
echo "Erro";
session_destroy();
header("Location: index.php");
 ?>