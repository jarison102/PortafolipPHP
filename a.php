<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números ganadores enviados por el formulario
        $ganadores = array(
            $_POST["ganador1"],
            $_POST["ganador2"],
            $_POST["ganador3"],
            $_POST["ganador4"],
            $_POST["ganador5"],
            $_POST["ganador6"]
        );

        // Ordenar los números ganadores de menor a mayor
        sort($ganadores);

        // Mostrar los números ganadores ordenados
        echo "<h3>Números ganadores de la lotería:</h3>";
        foreach ($ganadores as $numero) {
            echo $numero . " ";
        }
    }
    ?>