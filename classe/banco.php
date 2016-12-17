<?php
$servidor		= "localhost";
$usuario		= "zacuser_ADMSist";
$senha			= "rootSist123";
$banco			= "zacuser_sistVendas";

$conn = mysql_connect($servidor,$usuario,$senha);
if ($conn){
	$banco = mysql_select_db($banco);
	if (!$banco){
		echo "Erro no banco";
	}
}
else{
	echo "Erro no servidor";
}
?>