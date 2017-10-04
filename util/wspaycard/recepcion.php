<?php include("vpos_plugin.php");?>
<?php

$llavePrivadaCifrado = "-----BEGIN RSA PRIVATE KEY-----\n".
"MIICXwIBAAKBgQDQh7tTjwOW1af5uLS49MdAbhmbscV2fjjRHz2EdxIIOfJ01A5P\n".
"Rinvir8f7oGGsUSXtQq0L7EkIltWiP6qWNwCom2wRJ61Hwo7sQyXB4jFvgn/R2ho\n".
"9ImYp54jN69dKpjvufU2DI74fujtjE94jDhqt698+98+tFzC7UkKgq3EPwIDAQAB\n".
"AoGBAIAWDzNJEhxRCkdyc9dzyvvBZQtkS3T4HPAer0uxU6sn5MxsAIoi/9k6MSFs\n".
"/7R7KDXDJ1r8PGOEkvP5W+vIfwInUboqB00fRvPOKifJ5pRqYLlt86HmlHNY5l65\n".
"gR7aan LA LLAVE PRIVADA DE CIFRADO QUE GENERASTE jksdRbHPfv5+lBC\n".
"Y8OcqbqiloAZ/J8Jw1TWkQ9lvEuisGKmahEVUimbfyh2+/mj+DAWGO1UeId1BCXz\n".
"ECZepMIGsQJBAOEpzK7xL8w1bFF9KfxWe2rqjecLYktVud6VWzxKwKfGf0HCPryW\n".
"lSOxDqKJ18PCYJAHcX/OxDRhJIx3U3ANFe8CQQCQkWUonK9PPQVeg/bRYCaoErDF\n".
"48w2OVMk3PiyGoS3fU/wOT6A/TH+FZSIDS84tUmkJYNug1qNDv7piBwJ5u3hAkEA\n".
"tv9R65z6S+3faxte1Ec1Z1/alL0b1j6GIfEhhY77pWAebUOB2aRI8gkk69U8F04T\n".
"TPu/szBJJokNO1x/48G+4QJBAJAGszZsrJ3WGO1VkrUX5nThZ0nCPprJYm926xL+\n".
"wABcsT/77WUvzXsOQ67HjBU4KlvUrF7YZ8PvSDKJrVUCf2I=\n".
"-----END RSA PRIVATE KEY-----\n";


//valor de la llave publica de firma de Alignet
$llavePublicaFirma = "-----BEGIN PUBLIC KEY-----\n".
"MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCvJS8zLPeePN+fbJeIvp/jjvLW\n".
"TEjFa LA LLAVE PUBLICA DE FIRMA QJHJHJK789HrLrQTF01010dL/gDQlLt0\n".
"Ut8ke QUE TE ENTREGAMOS EN EL KIT DE INTEGRACION M/PHdv0ml1SRkVO\n".
"pIs4aIDXarTYJGWlyQIDAQAB\n".
"-----END PUBLIC KEY-----";

 $arrayIn['IDACQUIRER'] = $_POST['IDACQUIRER'];
 $arrayIn['IDCOMMERCE'] = $_POST['IDCOMMERCE'];
 $arrayIn['XMLRES'] = $_POST['XMLRES'];
 $arrayIn['DIGITALSIGN'] = $_POST['DIGITALSIGN'];
 $arrayIn['SESSIONKEY'] = $_POST['SESSIONKEY'];

 $arrayOut = '';

//valor del vector de inicializacion
 $VI = "67616E6F6465726D";

 if(VPOSResponse($arrayIn,$arrayOut,$llavePublicaFirma,$llavePrivadaCifrado,$VI)){

	echo ('OK');
 //La salida esta en $arrayOut con todos los parámetros decifrados devueltos por  el VPOS
     $resultadoAutorizacion = $arrayOut['authorizationResult'];
     $codigoAutorizacion = $arrayOut['authorizationCode'];
	 $codigoError = $arrayOut['errorCode'];
	 $errormensaje = $arrayOut['errorMessage'];

     echo ('<br>');
     echo $resultadoAutorizacion;
	 echo ('<br>');
     echo $codigoAutorizacion;
	 echo ('<br>');
	 echo $codigoError;
	 echo ('<br>');
	 echo $errormensaje;
	 echo ('<br>');



 // se deben revisar luego los demas campos de acuerdo a lo indicado en la guia de integracion

 }else{

 //Puede haber un problema de mala configuración de las llaves,
 //vector deinicializacion o el VPOS no ha enviado valores
 //correctos
     echo "<br> Respuesta Inv&acute;lida";
 }

?>