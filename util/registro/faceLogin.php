<?php

include("../system/session.php");
include("../system/conexionMySql.php");
include("../system/funciones.php");
require('../../lib/php/facebook/facebook.php');

$conexion = new DBManager();
$conexion->DBConectar();
$respuesta = new stdClass();
$respuesta->estado = 2;
$respuesta->mensaje = "Sin acciones";

function getParam(){

}
$fb = new Facebook\Facebook([
  'app_id' => '{app-id}', // Replace {app-id} with your app id
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>