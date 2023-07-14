<?php 

class Persona {

    public $nombre;
    public $edad;
    public $apellido;

    public function asignarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }
    public function asignarApellido($NuevoApellido){
        $this ->apellido = $NuevoApellido;
    }
    public function asignarEdad($NuevaEdad){
        $this ->edad = $NuevaEdad;
    }
}



$objAlumno =new Persona();
$objApellido = new Persona();
$objEdad =new Persona();



$objAlumno->asignarNombre("Jarison ");
$objApellido ->asignarApellido("Mican ");
$objEdad ->asignarEdad(16);

echo $objAlumno->nombre;

echo $objApellido ->apellido;

echo $objEdad ->edad;


class vehicular {
    public $color; 
    public $peso;
    public $numeropuertas;
    public $cilindrada;
    public $longitud;

    public function AsignarColor($NuevoColor){
        $this->color=$NuevoColor;
    }
    public function AsignarPeso($Nuevopeso){
        $this ->peso =$Nuevopeso;
    }
    public function AsignarPuertas($Nuevaspuertas){
        $this -> numeropuertas =$Nuevaspuertas;
    }
    public function AsignarCilindrada($NuevaCilindrada){
        $this->cilindrada=$NuevaCilindrada;
    }
    public function AsignarLongitud($Longitud){
        $this->longitud=$Longitud;
    }

}
$objColor =new vehicular();
$objPeso = new vehicular();
$objnumeropuertas =new vehicular();
$objcilindrada = new vehicular();
$objlongitud = new vehicular();


$objColor ->AsignarColor("Rojo" );
$objPeso ->AsignarPeso(55 );
$objnumeropuertas ->AsignarPuertas(2 );
$objcilindrada ->AsignarCilindrada(150 );
$objlongitud ->AsignarLongitud(30 );


echo $objColor -> color;
echo $objPeso -> peso;
echo $objnumeropuertas ->numeropuertas;
echo $objcilindrada -> cilindrada;
echo $objlongitud -> longitud;


class Calculadora {
    private $resultado;

    public function sumar($a, $b) {
        if (is_numeric($a) && is_numeric($b)) {
            $this->resultado = $a + $b;
        } else {
            $this->resultado = "Error: Los valores proporcionados no son numéricos.";
        }
    }

    public function obtenerResultado() {
        return $this->resultado;
    }
}
$calculadora = new Calculadora();  // Crear una instancia de la clase Calculadora
$calculadora->sumar(5, 5);         // Llamar al método sumar con los valores 5 y 5
$resultado = $calculadora->obtenerResultado();  // Obtener el resultado de la suma
echo $resultado;  // Mostrar el resultado en pantalla


?>