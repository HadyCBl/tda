<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descrip = $_POST['descrip'];
    $proveedor = $_POST['proveedor'];
    $cantidad = $_POST['cantidad'];
    $Unit_med = $_POST['Unit_med'];
    $precio = $_POST['precio'];
    // Asegúrate de agregar otros campos y validar los datos según sea necesario

    // Actualizar el registro en la base de datos
    $sql = "UPDATE productos SET nombre = '$nombre', descrip = '$descrip', proveedor = '$proveedor', cantidad='$cantidad',Unit_med='$Unit_med',precio='$precio' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: edit_prod.php");
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}

$conn->close();
?>




