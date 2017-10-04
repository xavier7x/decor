<?php
include("../system/conexionMySql.php");
include("../system/funciones.php");

$conexion = new DBManager();
$conexion->DBConectar();

$respuesta = new stdClass();
$respuesta->estado = 2;
$respuesta->mensaje = "Sin acciones";

// Extraer los parametros

$resultado_param = $conexion->DBConsulta("
    SELECT *
    FROM cli_parametros
");

$pdet_valor = array();

foreach($resultado_param as $fila){
    $pdet_valor[trim($fila['idparametro'])] = trim($fila['valor']);
}

//****************************

$usuario = "";
$idfacturacion = 0;
$titulo = "";
$nombre = "";
$movil1 = "";
$movil2 = "";
$direccion = "";
$estado = "";
$mail = "";
$num_doc = "";

if(
    (isset($_POST['usuario']) && !empty($_POST['usuario'])) && 
    (isset($_POST['idfacturacion']) && !empty($_POST['idfacturacion'])) && 
    (isset($_POST['titulo']) && !empty($_POST['titulo'])) && 
    (isset($_POST['nombre']) && !empty($_POST['nombre'])) && 
    (isset($_POST['movil1']) && !empty($_POST['movil1'])) && 
    (isset($_POST['direccion']) && !empty($_POST['direccion'])) && 
    (isset($_POST['estado']) && !empty($_POST['estado'])) && 
    (isset($_POST['mail']) && !empty($_POST['mail'])) && 
    (isset($_POST['num_doc']) && !empty($_POST['num_doc'])) 
    
){
    $usuario = $_POST['usuario'];
    $idfacturacion = $_POST['idfacturacion'];
    $titulo = $_POST['titulo'];
    $nombre = $_POST['nombre'];
    $movil1 = $_POST['movil1'];
    $direccion = $_POST['direccion'];
    $estado = $_POST['estado'];
    $mail = $_POST['mail'];
    $num_doc = $_POST['num_doc'];
}

if(
    (isset($_POST['movil2']) && !empty($_POST['movil2'])) 
){
    $movil2 = $_POST['movil2'];
}

if(
    !empty($usuario) && 
    !empty($idfacturacion) && 
    !empty($titulo) && 
    !empty($nombre) && 
    !empty($movil1) && 
    !empty($direccion) && 
    !empty($estado) && 
    !empty($mail) && 
    !empty($num_doc) 
){ 


    // Verificar si trae un movil2 que es opcional
    $movil2_text = " NULL ";
    
    if($movil2 != ''){
        $movil2_text = " '".$movil2."' ";
    }

    $resultado = $conexion->DBConsulta("
        UPDATE cli_datos_facturacion SET 
        estado = '".$estado."',
        titulo = '".$titulo."',
        nombre = '".$nombre."',
        direccion = '".$direccion."',
        movil1 = '".$movil1."',
        movil2 = ".$movil2_text.",
        mail = '".$mail."',
        num_doc = '".$num_doc."',
        user_update = '".$usuario."',
        sys_update = NOW()
        WHERE idfacturacion = '".$idfacturacion."'
    ");
    
    if($resultado == true){    
        $respuesta->estado = 1;
        $respuesta->mensaje = "Registro actualizado con éxito";
    }else{
        $respuesta->estado = 2;
        $respuesta->mensaje = "Error al realizar la actualización";
    }
    
}else{    
    $respuesta->estado = 2;
    $respuesta->mensaje = "No envio los siguientes parámetros [ usuario - idfacturacion - titulo - nombre - movil1 - direccion - estado - mail - num_doc ]";
}

print_r(json_encode($respuesta));

?>