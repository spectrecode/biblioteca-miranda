<?php
class Bilioteca extends Conexion{
	function dameExperiencia($id){
		$sql = "SELECT * ";
		$sql.= "FROM mya_postmeta ";
		$sql.= "WHERE post_id = ".$id." ";
		$sql.= "and meta_key = 'area_experiencia' ";
		return $this->Sqlfetch_assoc($sql);
	}
	function dameDetalle($id){
		$sql = "SELECT * ";
		$sql.= "FROM mya_posts ";
		$sql.= "WHERE ID = ".$id." ";
		return $this->Sqlfetch_assoc($sql);
	}
	function listadoCategoriawp(){
		$sql = "SELECT id, post_content, post_title ";
		$sql.= "FROM mya_posts ";
		$sql.= "WHERE post_type = 'area'";
		$arrdata = $this->Sqlfetch_assoc($sql);
		$item = count($arrdata) - 1;
		$arrjson[0]['id'] = "0";
		$arrjson[0]['contenido'] = "";
		$arrjson[0]['name'] = "Todas las área";
		$arrjson[0]['pos_ini'] = "0";
		$arrjson[0]['pos_fin'] = "0";
		//$arrjson[0]['xx'] = "xx";
		$cont = 1;
		for ($i=0; $i<=$item; $i++){
			$data = $arrdata[$i];
			$arrjson[$cont]['id'] = $data['id']; 
			$arrjson[$cont]['contenido'] = $data['post_content'];
			//$arrjson[$cont]['xx'] = $data['post_title'];
			$arrjson[$cont]['pos_ini'] = 5;//strpos($data['post_title'], "[:es]");
			$arrjson[$cont]['pos_fin'] = strpos($data['post_title'], "[:en]") - 5;
			$arrjson[$cont]['name'] = substr($data['post_title'],$arrjson[$cont]['pos_ini'],$arrjson[$cont]['pos_fin']);
			$cont++;
		}
		return $arrjson;
	}
	function listadoAnio($id){
		$sql = "SELECT arc_anio ";
		$sql.= "FROM tar_archivo ";
		$sql.= "WHERE are_id_area = $id ";
		$sql.= "Group by arc_anio";
		$arrdata = $this->Sqlfetch_assoc($sql);
		$item = count($arrdata) - 1;
		$arrjson[0]['name'] = "--";
		$arrjson[0]['id'] = "0";
		$cont = 1;
		for ($i=0; $i<=$item; $i++){
			$data = $arrdata[$i];
			$arrjson[$cont]['id'] = $data['arc_anio'];
			$arrjson[$cont]['name'] = $data['arc_anio'];
			$cont++;
		}
		return $arrjson;
	}
	function listadoMes($idArea,$id,$objfunc){
		$sql = "SELECT arc_mes ";
		$sql.= "FROM tar_archivo ";
		$sql.= "WHERE are_id_area = $idArea ";
		$sql.= "and arc_anio = $id ";
		$sql.= "Group by arc_mes";
		$arrdata = $this->Sqlfetch_assoc($sql);
		$item = count($arrdata) - 1;
		$arrjson[0]['id'] = "0";
		$arrjson[0]['name'] = "--";
		$cont = 1;
		for ($i=0; $i<=$item; $i++){
			$data = $arrdata[$i];
			$arrjson[$cont]['id'] = $data['arc_mes'];
			$arrjson[$cont]['name'] = $objfunc->nombreMes($data['arc_mes']);
			$cont++;
		}
		return $arrjson;
	}
	function dameListado($page=NULL,$filtro=NULL,$inicio=NULL,$TAMANO_PAGINA=NULL){
		$page = $this->limpiacadena($page);
		$filtro = $this->limpiacadena($filtro);
		$arrfil = preg_split("/@/", $filtro);
		$sql = "Select * ";
		$sql.= "From tar_archivo ";
		//$sql.= "Where tmp1.usu_borrado = 1 ";
		$bool_where = false;
		if (!empty($arrfil[0])){
			$bool_where = true;
			$sql.= "Where are_id_area = ".$arrfil[0]." ";
		}
		if (!empty($arrfil[1])){
			if ($bool_where) 
				$sql.= "and arc_anio = ".$arrfil[1]." ";
			else	
				$sql.= "Where arc_anio = ".$arrfil[1]." ";
		}
		if (!empty($arrfil[2])){
			if ($bool_where) 
				$sql.= "and arc_mes = ".$arrfil[2]." ";
			else	
				$sql.= "Where arc_mes = ".$arrfil[2]." ";
		}
		if (!empty($arrfil[3]) && $arrfil[3]!= 1){
			if ($bool_where)
				$sql.= "and arc_tipo = ".$arrfil[3]." ";
			else
				$sql.= "Where arc_tipo = ".$arrfil[3]." ";
		}
		$sql.= "Group by arc_archivo ";
		$sql.= "Order by arc_anio DESC, arc_mes DESC, arc_dia DESC, arc_nombre DESC ";
		if ($TAMANO_PAGINA > 0)
			$sql.= "LIMIT ".$inicio."," . $TAMANO_PAGINA;

		//return $sql;
		return $this->Sqlfetch_assoc($sql);	
	}
	function dameListado2($page=NULL,$filtro=NULL,$inicio=NULL,$TAMANO_PAGINA=NULL){
		$page = $this->limpiacadena($page);
		$filtro = $this->limpiacadena($filtro);
		$arrfil = preg_split("/@/", $filtro);
		$sql = "Select * ";
		$sql.= "From tar_archivo ";
		//$sql.= "Where tmp1.usu_borrado = 1 ";
		$bool_where = false;
		if (!empty($arrfil[0])){
			$bool_where = true;
			$sql.= "Where are_id_area = ".$arrfil[0]." ";
		}
		if (!empty($arrfil[1])){
			if ($bool_where) 
				$sql.= "and arc_anio = ".$arrfil[1]." ";
			else	
				$sql.= "Where arc_anio = ".$arrfil[1]." ";
		}
		if (!empty($arrfil[2])){
			if ($bool_where) 
				$sql.= "and arc_mes = ".$arrfil[2]." ";
			else	
				$sql.= "Where arc_mes = ".$arrfil[2]." ";
		}
		if (!empty($arrfil[3]) && $arrfil[3]!= 1){
			if ($bool_where)
				$sql.= "and arc_tipo = ".$arrfil[3]." ";
			else
				$sql.= "Where arc_tipo = ".$arrfil[3]." ";
		}
		$sql.= "Order by arc_anio DESC, arc_mes DESC, arc_dia DESC, arc_nombre DESC ";
		if ($TAMANO_PAGINA > 0)
			$sql.= "LIMIT ".$inicio."," . $TAMANO_PAGINA;

		//return $sql;
		return $this->Sqlfetch_assoc($sql);	
	}
	
}
?>