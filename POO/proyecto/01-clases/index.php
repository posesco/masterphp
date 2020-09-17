<?php
// Clase = Molde para crear objetos
class Coche{
    //Atributos = Propiedades o variables
    public $color     = 'Rojo';
    public $marca     = 'Ferrari';
    public $modelo    = 'Aventor';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas    = 2;
    // Metodo = acciones del objeto 
    public function getColor(){
        // Buscar en esta clase la propiedad X
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
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
}
// Creacion de objeto o instancia la clase
$coche  = new Coche();
$coche1 = new Coche();
$coche2 = new Coche();
// Usar el metodo 
$coche->setColor('Amarrillo');
$coche->acelerar();
echo $coche->getColor();
echo '<hr>';
echo $coche->getVelocidad();
echo '<hr>';
$coche1->setColor('Verde');
$coche1->frenar();
echo $coche1->getColor();
echo '<hr>';
echo $coche1->getVelocidad();
?>