<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
?>

<!DOCTYPE html>
<html>
<html lang="pt-br">
<head>
	<title>Fiax - Controle de Vendas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/estilo.css" rel="stylesheet">
<script language="javascript" type="text/javascript">
	function validaForm(){
	
		var nome = document.getElementById("noCliente");
		
		var endereco = document.getElementById("encliente");
		
		if(nome.value == "" || endereco.value == "0"){
			alert("Atenção Nome e descrição devem ser preenchidos");
			return false;
		}else{
			return true;
		}
	}
</script>	
</head>
<body>
	<h4>Formulário de cadastro de Clientes</h4>
	<form method="post" action="funcoes/cadastros.php" name="frm" id="frm" onsubmit="return validaForm()";>

		Cliente:<br>
		<input type="text" name="noCliente"/><br>
		Endereço:<br>
		<input type="text" name="enCliente"/><br>
		Telefone:<br>
		<input type="text" name="teCliente"/><br>
		E-mail:<br>
		<input type="text" name="emCliente"/><br>
		Cidade:<br>
		<input type="text" name="ciCliente"/><br>
		Estado:<br>
		<input type="text" name="esCliente"/><br>
		Cep:<br>
		<input type="text" name="ceCliente"/><br>
		Empresa:<br>
		<select name="cliEmpresa">
			 <option><?php $listagem->geraAssociadosPag(); ?></option>				 
			 	 
		</select>
		<input type="submit" value="Enviar" name="btnEnvCliente"/><br>
		 <input name="txtLocal" type="hidden" id="txtLocal" value="formCadCliente" />

		<?php echo base64_decode($_GET["msn"]); ?>

	</form>
</body>
</html>


