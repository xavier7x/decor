<?php require("vpos_plugin.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>BizPay - Pagos Seguros en Internet - Visa, Mastercard y American Express</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">

	//funcion para enviar los datos del formulario
	function submitform(){
	  document.params_form.submit();
	}
</script>
</head>

<?php

$codigo1='840'; 

$codigoAdquirente=107;
$codigoComercio=7252;

$idorden = 00001;//valor numerico de 5 dígitos, de preferencia correlativo /*cambiar para cadaa envio en pruebas*/
$array_send['acquirerId']=$codigoAdquirente;
$array_send['commerceId']=$codigoComercio;
$array_send['purchaseAmount']='100'; // monto del pedido
$array_send['purchaseCurrencyCode']=$codigo1;
$array_send['purchaseOperationNumber']=$idorden; // numero del pedido mkt
$array_send['billingEMail']='soluciones@bizlinks.la'; // correo de facturacion del cliente
$array_send['billingFirstName']='Tony'; // nombre cliente
$array_send['billingLastName']='Sanz'; // apellido cliente
$array_send['language']="SP"; //En espaÃ±ol,

$arrayOut['XMLREQ']="";
$arrayOut['DIGITALSIGN']="";
$arrayOut['SESSIONKEY']="";

# Vector
$VI = "67616E6F6465726D"; /*esta te la inventas tu*/

# Llaves (marcar las necesarias).
// llave publica cifrado Alignet
$llaveVPOSCryptoPub = "-----BEGIN PUBLIC KEY-----\n". /* esta la copias del jar*/
"MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDTJt+hUZiShEKFfs7DShsXCkoq\n".
"TEjv0SFkTM04qHyHFU90Da8Ep1F0gI2SFpCkLmQtsXKOrLrQTF0100dL/gDQlLt0\n".
"Ut8kM/PRLEM5thMPqtPq6G1GTjqmcsPzUUL18+tYwN3xFi4XBog4Hdv0ml1SRkVO\n".
"DRr1jPeilfsiFwiO8wIDAQAB\n".
"-----END PUBLIC KEY-----";

// llave privada firma comercio
$llavePrivadaFirmaComercio = "-----BEGIN RSA PRIVATE KEY-----\n". /*esta la copias del jar*/
"MIICXAIBAAKBgQDbw5FFhL2SaG3SSbfBDDPo0M12XaIaCvYaHbKRDfwWLOQg3P6n\n".
"ZqFBaboDk0t0GgHSlQJqse4tgaZ/NUDszMQGtESuNNXUbGOYOe1nSw5Xz7KNP+u5\n".
"3yC+8Bx5nb3KKW5fe7YGkj0SPebzHh8avGui5olENnBBV4798vOR5N0twQIDAQAB\n".
"AoGAFxBZSLB7rMfk7rLp5ArBz+dKCOgewRjxZyBCw1JyaGlhr8lBuJPezJyp9wIY\n".
"YyDvnAgjbsspsgDvVl5iZ/e9grzSO1MdEGAwBBySYkujO8lY2ACs5bIL5PL/BkYR\n".
"PQyVPBXGJ7zDK0aVPVGL+K3GsFHaeq0zO4WUKuEP/l0cGKECQQDwNvvoxpZ6YxkH\n".
"y+Cwqt+SMpMZxmGgA0uf/kc3g0vukJnoNF46wuQs6wg6S46jTIH5CoK1sDjqqHL3\n".
"142ltGi1AkEA6jSMgX5AWvK22vFntaa17flp08gOqhnXGqu8JcgJcJoBnKdXsFM/\n".
"DEZvlm9XoI1L7xpkBJZRyxQ7btTfgbEUXQJAdLUyJQE/IQ0+nwQWEZ+jaeN6hr5U\n".
"tiqDtqMTNMxsuua0cBXpZkFEHPLAF5qYHYzRZQ8PPHj23kOjP/kRT93cNQJAKAy6\n".
"Zj53tNXCjSgw6vBKNhqrjSqtz0rB7O6nKvLNInNDiU1Ygm+J3YiB9oCtxGfFL2sc\n".
"5WfrLsYT77z5R41HhQJBAKRWO4/agO6XMxF/8EvEsfFOrRlABlWuEA8bxCQr0kmy\n".
"ROJHSENX2BmwkY8oVQZEJ26RjmQq/9C6tHvrQ+ih4rk=\n".
"-----END RSA PRIVATE KEY-----\n";

if (VPOSSend($array_send,$arrayOut,$llaveVPOSCryptoPub,$llavePrivadaFirmaComercio,$VI)) {


}else{
	$msj = "Hay un problema con el conector de pago"; //puede haber un problema de mala configuraciÃ³n de las llaves, vector de
	//inicializacion o el VPOS no ha enviado valores correctos
}

echo $idorden;

?>


<form name="params_form" method="post" action="https://test2.alignetsac.com/VPOS/MM/transactionStart20.do" > <!--creear como parametro-->

   <table border="0">
  <tr>
    <td>IDACQUIRER:</td>
    <td><input name="IDACQUIRER" id="IDACQUIRER" value="107"></td>
  </tr>
  <tr>
    <td>COMMERCE:</td>
    <td><input name="IDCOMMERCE" id="IDCOMMERCE" value="7252"></td>
  </tr>
  <tr>
    <td>XML:</td>
    <td><input name="XMLREQ" id="XMLREQ" value="<?php echo $arrayOut['XMLREQ'];?>"></td>
  </tr>
  <tr>
    <td>SIGNATURE:</td>
    <td><input name="DIGITALSIGN" id="SIGNATURE" value="<?php echo $arrayOut['DIGITALSIGN'];?>"></td>
  </tr>
  <tr>
    <td>SESSIONKEY:</td>
    <td><input name="SESSIONKEY" id="SESSIONKEY" value="<?php echo $arrayOut['SESSIONKEY'];?>"></td>
  </tr>
  <tr>
    <td><input type="submit" name="envio" id="envio" value="Enviar" /></td>

    </tr>
</table>

</form>

</body>
</html>