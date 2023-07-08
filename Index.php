<?php
if ($_POST) {
    // Recibir información del formulario método POST
    $Nombre = $_POST['txtNombre'];
    $Edad = $_POST['intEdad'];
    $Trabajo = $_POST['textTrabajo'];
    $Pais = $_POST['textPais'];
    $Lenguajes = $_POST['txtLenguajes'];
    $EstadoCivil = $_POST['txtEstado'];
    $Fecha = $_POST['date'];
    $Correo = $_POST['Correo'];
    $Salario = $_POST['Salario'];
    $Idioma = $_POST['Idioma'];
    $ValorA = $_POST ['ValorA'];
    $ValorB = $_POST ['ValorB'];

    print($ValorA + $ValorB);
    print("Mi Nombre es " . $Nombre . " y mi edad es " . $Edad . ". Trabajo en " . $Trabajo . ". Soy del país " . $Pais . ". Manejo estos lenguajes: " . $Lenguajes . ". Soy " . $EstadoCivil . ". Fecha de registro: " . $Fecha . ". Mi correo es " . $Correo . ". Mi Salario es " );

    switch ($Salario) {
        case "1":
            print("4.180.880.000,00");
            break;
        case "2":
            print("3.580.150.000,00");
            break;
        case "3":
            print("1.000.709.000,00");
            break;
        case "4":
            print("8.180.680.000,00");
            break;
        case "5":
            print("2.180.220.000,00");
            break;
        default:
            print("Sin salario seleccionado");
            break;
    }
    switch ($Idioma){
        case 1:
            print("Ingles");
            break;
        case 2 :
            print("Español");
            break;
    }


}
?>