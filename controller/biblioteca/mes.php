<?php
date_default_timezone_set('America/Lima');//-->definimos la zona horaria

include('../../config/conexion.php');
include('../../modelo/funciones.php');
//include('modelo/usuario.php');
include('../../modelo/biblioteca.php');

/*
	traer la informacion desde JSON
*/
$arrjson 	= "";
$data 		= json_decode(file_get_contents('php://input'), true);
$id 		= $data['id'];
$idArea 	= $data['idArea'];

$objfunc 	= new misFunciones();
$objbiblio   = new Bilioteca();
$datames 	= $objbiblio->listadoMes($idArea,$id,$objfunc);
$arrjson['arr']= $datames;

echo json_encode($arrjson);


?>