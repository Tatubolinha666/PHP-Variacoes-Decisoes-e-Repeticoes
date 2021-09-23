<?php 
$horaaula=21.4;
$hrssemana=30;
$qtdsemana=5;
$salbruto=$horaaula*($hrssemana*$qtdsemana);
$descinss=$salbruto*9/100;
$total=$salbruto-$descinss;


echo "Salário bruto professor da rede Municipal de São Paulo é: ".$salbruto."<br/> Seu desconto no INSS:  ".$descinss."<br/> Salário líquido será de: ".$total;

 ?>