<?php
// Clase = Molde para crear objetos
class Coche{
    //Atributos = Propiedades o variables
    // Visibilidad de atributos
    // public : Podemos acceder desde cualquier lugar
    // protected : Se pueden acceder desde la clase que los define
    // privated : Solo dentro de la clase
    protected $color;
    protected $marca;
    public $modelo;
    private $velocidad;
    public $caballaje;
    public $plazas;
    // Metodo Constructor = Da valor a las propiedades, setea informacion en las propiedades
    public function __construct(){
        $this->color     = 'Rojo';
        $this->marca     = 'Ferrari';
        $this->modelo    = 'Aventor';
        $this->velocidad = 300;
        $this->caballaje = 500;
        $this->plazas    = 2;
    }
    // Metodo = acciones del objeto 
    public function getColor(){
        // Buscar en esta clase la propiedad X
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function setMarca($marca){
        $this->marca=$marca;
    }
    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }
    // funcion para imprimir informacion
    public function mostrarInformacion($miobjeto){
        $informacion  = '<h1>Informacion del Coche</h1>';
        $informacion .= 'Modelo: '.$miobjeto->modelo; 
        $informacion .= 'Marca: '.$miobjeto->marca; 
        $informacion .= 'Color: '.$miobjeto->color; 
        $informacion .= 'Velocidad: '.$miobjeto->velocidad; 
        $informacion .= 'Caballaje: '.$miobjeto->caballaje; 

    }
}
?>

