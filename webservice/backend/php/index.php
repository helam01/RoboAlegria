<?php
require_once "Api.php";

header("Access-Control-Allow-Origin: *");

$cod = $_GET['cod'];
if ( !isset($cod) ) {
	die( "Comando não informado" );
}

$api = new Api();
$response = $api->saveCommand( $cod );

header("Content-Type: application/json;charset=utf-8");
echo $response;