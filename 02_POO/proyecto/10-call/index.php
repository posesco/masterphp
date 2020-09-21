<?php

class Persona
{
	private $nombre;
	private $edad;
	private $ciudad;
	private $estrato;

	public function __construct($nombre, $edad, $ciudad, $estrato)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->ciudad = $ciudad;
		$this->estrato = $estrato;
	}

	public function __call($name, $arguments)
	{
		$prefix_metodo = substr($name, 0, 3);

		if ($prefix_metodo == 'get') {
			$nombre_metodo = substr(strtolower($name), 3);

			if (!isset($this->$nombre_metodo)) {
				return "Lo escribiste bien pero el método que estas invocando no existe!!";
			}
			// $this->nombre
			return $this->$nombre_metodo;
		} elseif ($prefix_metodo == 'set') {
			$nombre_metodo = substr(strtolower($name), 3);
			$this->$nombre_metodo = $arguments[0];
		} else{
			return "El método que estas invocando no existe!!";
		}
	}
}

$persona = new Persona("Jesus David", 31, "Cucuta", 4);
echo $persona->setNombre('Nombre Seteado');
echo $persona->setEdad(43);
echo '<hr>';
echo $persona->getNombre();
echo '<hr>';
echo $persona->getEdad();
echo '<hr>';
echo $persona->getCiudad();
echo '<hr>';
echo $persona->getEsTrATo();
echo '<hr>';
echo $persona->HOLA();
echo '<hr>';
