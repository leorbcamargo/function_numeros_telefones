<?php

function numeros_certos($numeros) {
	for($i=0; $i <=9; $i++){
    //Retirar todos os caracteres, exeto números
		$num = preg_replace('/[^0-9]/is', '', $numeros);
    //Não deixa números repetir a partir de 8 até 14
    //Exemplo de bloqueios (11) 98888-8888,  (11) 99999-9999,  (11) 8888-8888, etc...
		if($num==str_repeat($i, 8) or $num==str_repeat($i, 9) or $num==str_repeat($i, 10) or $num==str_repeat($i, 11) or $num==str_repeat($i, 12) or $num==str_repeat($i, 13) or $num==str_repeat($i, 14)){
			return false;
		}
    //Aqui não deixa fazer números em sequencia, exemplo: 0123456, 1234567, 2345678, etc
		if(strpos($num, $i.($i+1).($i+2).($i+3).($i+4).($i+5))===false){}else{return false;}
		if(strpos($num, $i.($i+1).($i+2).($i+3).($i+4).($i+5).($i+6))===false){}else{return false;}
		if(strpos($num, $i.($i+1).($i+2).($i+3).($i+4).($i+5).($i+6).($i+7))===false){}else{return false;}
		if(strpos($num, $i.($i+1).($i+2).($i+3).($i+4).($i+5).($i+6).($i+7).($i+8))===false){}else{return false;}
	}
  //Se nada acima deu errado, ele vai retornar como certo
	return true;
}
$verificar_numero = "(11) 98989-7896";
if(numeros_certos($verificar_numero)){
    echo "Ok, número certo!"
} else {
    echo "Erro, número falso";
}
?>

