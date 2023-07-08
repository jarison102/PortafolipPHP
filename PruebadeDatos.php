<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $genero = $_POST['Genero'];

  echo "Que genero eres?:
        <input type='text' name='Genero' id='genero' value='$genero'>
        <br>
        Listado:
        <select name='Listado' id='listado'>";
  
  if ($genero === 'masculino') {
    echo "<option value='Hombre'>Jarison</option>
          <option value='Hombre'>Sergio</option>
          <option value='Hombre'>Sebastian</option>
          <option value='Hombre'>Fabian</option>
          <option value='Hombre'>Daivison</option>";
  } elseif ($genero === 'femenino') {
    echo "<option value='Mujer'>Rosalia</option>
          <option value='Mujer'>Maricel</option>
          <option value='Mujer'>Ligia</option>
          <option value='Mujer'>Paula</option>
          <option value='Mujer'>Carol</option>";
  } else {
    echo "<option value='Hombre'>Jarison</option>
          <option value='Hombre'>Sergio</option>
          <option value='Hombre'>Sebastian</option>
          <option value='Hombre'>Fabian</option>
          <option value='Hombre'>Daivison</option>
          <option value='Mujer'>Rosalia</option>
          <option value='Mujer'>Maricel</option>
          <option value='Mujer'>Ligia</option>
          <option value='Mujer'>Paula</option>
          <option value='Mujer'>Carol</option>";
  }

  echo "</select>
        <br>
        <input type='submit' value='Enviar'>
        </form>";
}
?>
