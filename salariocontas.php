<?php 
$salariohora=75;
$qtdhoras=55;
$dependentes=3;
$salariobruto=$salariohora*$qtdhoras+(50*$dependentes);
$ir=$salariobruto*5/100;
$ir1=$salariobruto*7/100;
if ($salariobruto<=1000) {
 
		echo "INSS desconto: ".$salariobruto*8.5/100," reais";
		
		 } else  {
		echo "Desconto INSS:
		".$salariobruto*9/100," reais";
	}

if  ( $salariobruto <=500 ) { 
	echo "<br/>Sem desconto em Imposto de Renda.";
	}if ($salariobruto<=1000) {
	 	echo "<br/>Desconto Imposto de Renda: ".$ir." reais";
	 }  else {
		echo "<br/>Desconto Imposto de Renda: ".$ir1." reais";
	}
	




 ?>