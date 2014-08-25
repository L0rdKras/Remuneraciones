<?php

class Consulta{
	protected $string_query;
	public function __construct($la_query){
		$this->string_query=$la_query;
	}

	private function conectar(){
		$str_datos = file_get_contents("../Configuracion/base_datos.json");
		$data_conexion=json_decode($str_datos,true);
		$conexion= new mysqli($data_conexion['Servidor'],$data_conexion['usuario'],$data_conexion['clave'],$data_conexion['bd']);
		return $conexion;
		/*$numero="-1";
		if (mysqli_connect_errno()) {
		    $numero= mysqli_connect_error();		    
		}else{			
			if($result=$conexion->query($this->string_query))
			{
				$numero = $result->num_rows;
			}
		}
		return $numero;*/
		//return "valor ".$data_conexion["Servidor"]." ";
	}

	public function retorna_resultado(){
		$conexion=$this->conectar();
		$result=$conexion->query($this->string_query);
		$conexion->close();
		return $result;
	}

	public function filas_resultado(){		
		return $this->retorna_resultado()->num_rows;
	}

	public function numero_paginas($limite){
		$numero_filas=$this->filas_resultado();
		return ceil($numero_filas/$limite);		
	}

	public function devolver_por_pagina($pagina,$limite){
		$inicio=($pagina-1)*$limite;	
		$conexion=$this->conectar();
		$result=$conexion->query($this->string_query." LIMIT $inicio,$limite");
		$conexion->close();
		return $result;
	}
}