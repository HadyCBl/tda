<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

if (isset($_GET['estado_inventario_id'])) {
    $estado_inventario_id = $_GET['estado_inventario_id'];

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Actualizar el estado en la base de datos
    $sql_update = "UPDATE productos SET estado_inventario = 1 WHERE id = $estado_inventario_id";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: RegistrarC.php");
    } else {
        echo "Error al actualizar el estado: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Parámetro 'estado_inventario_id' faltante en la solicitud GET.";
}
?>
