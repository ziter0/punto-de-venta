<?php 
require_once "conexion.php";

class ModeloUsuarios{


	static public function MdlMostrarUsuarios($tabla,$item,$valor){

		$stmt = conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");
		$stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);

		$stmt->execute();
		return $stmt ->fetch();
	}
	
}