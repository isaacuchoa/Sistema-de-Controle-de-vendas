<!DOCTYPE html>
<html>
<html lang="pt-br">
<head>
	<title>Fiax - Controle de Vendas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="css/estilo.css" rel="stylesheet"> 
</head>
<body class="adm">
<div id="adm">
  <header>
    <div id="logomarca"><a href="#"><img src="img/logomarca.PNG" alt="logomarca do sistema"></a></div>  
  </header>
  	
  	<form id="frmLogin" name="frmLogin" method="post" action="classe/LoginSistema.php">   
          <div class="formadm">     
          Login:
            <input name="txtUsuario" type="text" id="txtacesso" size="25" maxlength="100" /><br><br></div>
          <div class="formadm">  
          Senha:
            <input name="txtSenha" type="password" id="txtacesso" size="25" maxlength="15" /><br><br></div>
            <input type="submit" name="btLogin" id="btLogin" class="formbtn" value="Enviar" />
            <input name="txtLocal" type="hidden" id="txtLocal"  value="frmLogin" /></td>
         
          
  	</form>
</div>
</body>
</html>