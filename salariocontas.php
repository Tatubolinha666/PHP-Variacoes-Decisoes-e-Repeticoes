<?php 
$salariohora=75;
$qtdhoras=55;
$dependentes=3;

$salariobruto=$salariohora*$qtdhoras+(50*$dependentes);
if ($salariobruto<=1000) {
 
		echo "INSS desconto será igual a: ".$salariobruto*8.5/100;
		
		 } else  {
		echo "Desconto INSS será de:
		".$salariobruto*9/100;
	
	}





 ?>