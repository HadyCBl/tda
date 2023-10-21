<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $estado_inventario = $_POST['estado_inventario'];

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Actualizar el estado del inventario en la base de datos
    $sql = "UPDATE productos SET estado_inventario = $estado_inventario WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Actualización exitosa";
    } else {
        echo "Error al actualizar el estado del inventario: " . $conn->error;
    }

    $conn->close();
}
?>
