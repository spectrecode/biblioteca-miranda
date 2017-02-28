<?php
date_default_timezone_set('America/Lima');//-->definimos la zona horaria

include('../../config/conexion.php');
include('../../modelo/funciones.php');
//include('modelo/usuario.php');
include('../../modelo/biblioteca.php');


$arrjson = false;
$data = json_decode(file_get_contents('php://input'), true);
$page 		= $data['page'];
$filtro 	= $data['filtro'];

$objnot 	= new Bilioteca();
$datanot 	= $objnot->dameListado($page,$filtro,0,0);
$num_total_registros = count($datanot);
$arrjson['paginado']['num_total_registros'] = $num_total_registros;
//Limito la busqueda
$TAMANO_PAGINA = 8;
$arrjson['paginado']['TAMANO_PAGINA'] = $TAMANO_PAGINA;

$pagina = $page;

if (!$pagina) {
   $inicio = 0;
   $pagina = 1;
}
else {
   $inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
$arrjson['paginado']['pagina'] = $pagina;
$arrjson['paginado']['inicio'] = $inicio;


//calculo el total de páginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

$arrjson['paginado']['total_paginas'] = $total_paginas;


// Imprimimos
$objnot 	= new Bilioteca();
$datanot 	= $objnot->dameListado($page,$filtro,$inicio,$TAMANO_PAGINA);
$arrjson['cc'] = $datanot; 
$item 		= count($datanot) - 1;
$contItem   = $inicio; 
$objfunc 	= new misFunciones();
$html = "";
$aux_cont = 1;
$arrjson['documentos']['html'] = "";
for($i=0; $i<=$item; $i++){
	$contItem++;
	$data 			= $datanot[$i];
	$items 	 		= $contItem;
	$id 		 	= $data['arc_id'];
	$idarea 	 	= $data['are_id_area'];
	$categoria 		= $data['arc_categoria'];
	$arc_nombre 	= $data['arc_nombre'];
	$arc_archivo 	= $data['arc_archivo'];
	$arc_imgportada = $data['arc_imgportada'];
	$arc_dia 		= $data['arc_dia'];
	
	if ($arc_dia < 10)
		$arc_dia = "0".$arc_dia;

	$arc_anio 		= $data['arc_anio'];
	$arc_mes 		= $objfunc->nombreMes($data['arc_mes']);
	$arc_tipo 		= $data['arc_tipo'];
	$ruta = '';
	if ($categoria == 1)
		$ruta = './public/documentos/'.$arc_archivo;
	if ($categoria == 2)
		$ruta = $arc_archivo;
	if ($categoria == 3)
		$ruta = './public/revistas_online/'.$arc_archivo;
	if ($aux_cont==1){
		$html.="<div class='mesa'>";	
	}
	$html.="<div class='row'>";
	$html.="<div class='inner-text'>";
	$html.="<p class='center-p'>".$arc_nombre."</p><span>".$arc_dia.",  ".$arc_mes.", ".$arc_anio."</span>";
	$html.="</div>";
	$html.="<figure><img src='./public/documentos/".$arc_imgportada."' alt='' width='70%'></figure>";
	$html.="<div class='plus'>";
	$html.="<figure><a href='".$ruta."' target='_blank'><img src='./public/image/lupa.png'></a></figure>";
	$html.="</div>";
	$html.="</div>";
	if ($aux_cont==4){
		$aux_cont = 0;
		$html.="</div>";
	}
	$aux_cont++;
}	
$arrjson['documentos']['html'] = $html;
echo json_encode($arrjson);
?>

