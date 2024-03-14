<?php

session_start();
// Acceso a la variable de sesión 'zona'
if(isset($_SESSION['zona'])) {
    $zona = $_SESSION['zona'];
    //echo "La zona es: " . $zona;
} else {
    echo "La zona no está definida";
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Xtreme Nights</title>
</head>
<body>

<h1>Bares en Xtreme Nights</h1>
<!-- Botón de volver -->
    <a class="btn btn-secondary btn-lg mt-3" href="procesar_zona.php">Volver</a>


<?php
// Configuración de la conexión a la base de datos
include 'db.php';

$sql = "SELECT * FROM bares where id_zonas = $zona";
$result = $conn->query($sql);


// Mostrar los datos en una tabla HTML
if ($result->num_rows > 0) {
    echo "<table border='2'>
    <tr>
    <th>Nombre</th>
    <th>Direccion</th>
    <th>Horario</th>
    <th>Estrellas</th>
    </tr>";

    // Mostrar los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Direccion"] . "</td>";
        echo "<td>" . $row["Horario"] . "</td>";
        echo "<td>" . $row["Estrellas"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>