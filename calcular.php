<?php

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "calculadora");

// Obtener los datos del formulario
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacion = $_POST["operacion"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

// Realizar la operación
switch ($operacion) {
  case "suma":
    $resultado = $numero1 + $numero2;
    break;
  case "resta":
    $resultado = $numero1 - $numero2;
    break;
  case "multiplicacion":
    $resultado = $numero1 * $numero2;
    break;
  case "division":
    $resultado = $numero1 / $numero2;
    break;
}

// Mostrar el resultado
echo "<div class='resultado'>";
echo "Nombre: " . $nombre. "<br>";
echo "Apellido: " . $apellido. "<br>";
echo "Resultado: " . $resultado;
echo "</div>";

// Almacenar los datos en la base de datos
$sql = "INSERT INTO operaciones (numero1, numero2, operacion, resultado, nombre, apellido) VALUES ('$numero1', '$numero2', '$operacion', '$resultado', '$nombre', '$apellido')";
mysqli_query($conexion, $sql);

// Cerrar la conexión a la base de datos