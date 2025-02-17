<?php
include('src/utils/config.php'); 
include('src/utils/autoload.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$entidad = $_GET['e'] ?? 'productos';
$entidad = ucfirst(strtolower($entidad));
$accion = $_GET['a'] ?? 'list';

$clase = 'App\\Controllers\\'.$entidad.'Controller';   
if( !class_exists($clase) ){
    die('no existe la clase'. $clase );
}

if( !class_exists($clase, $accion) ){
    die('no existe el metodo '.$accion.' en la clase'. $clase );
}

$respuesta = $clase::$accion( );

$archivo = $respuesta['view'];

include( VIEWS . '/inc/header.php' );
include( VIEWS .'/'.$archivo);
include( VIEWS . '/inc/footer.php' );

?>