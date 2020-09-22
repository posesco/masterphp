<?php

class Database{
	public static function connect(){
		$db = new mysqli('db', 'root', 'kv5OmlgW7@J4', 'tienda_master');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

