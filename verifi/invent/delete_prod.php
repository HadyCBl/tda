<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $select_sql = "SELECT * FROM productos WHERE id = $id";
    $result = $conn->query($select_sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();


        $insert_sql = "INSERT INTO productos_eliminados (nombre, descrip, cantidad, Unit_med, precio, proveedor, fecha_eliminacion) 
                       VALUES ('" . $row["nombre"] . "', '" . $row["descrip"] . "', " . $row["cantidad"] . ", '" . $row["Unit_med"] . "', " . $row["precio"] . ", '" . $row["proveedor"] . "', NOW())";

        if ($conn->query($insert_sql) === TRUE) {

            $delete_sql = "DELETE FROM productos WHERE id = $id";

            if ($conn->query($delete_sql) === TRUE) {

                header("Location: edit_prod.php");

            } else {
                echo "Error al eliminar el registro: " . $conn->error;
            }
        } else {
            echo "Error al insertar en la tabla de productos eliminados, contacte a SOPORTE : " . $conn->error;
        }
    } else {
        echo "El producto no existe.";
    }
} else {
    echo "No se proporcionó un ID válido.";
}

$conn->close();
?>
