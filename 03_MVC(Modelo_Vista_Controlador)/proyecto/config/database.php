<?php

class database{
	public static function conectar(){
		$conexion = new mysqli("db", "root", "kv5OmlgW7@J4", "notas_master");
		$conexion->query("SET NAMES 'utf8'");
		
		return $conexion;
	}
}
