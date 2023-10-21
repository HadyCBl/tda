<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$descrip = $_POST['descrip'];
$cantidad = $_POST['cantidad'];
$Unit_med = $_POST['Unit_med'];
$proveedor = $_POST['proveedor']; // Asegúrate de que el campo 'proveedor' se recupere del formulario
$precio = $_POST['precio'];

// Preparar la consulta SQL para verificar si el producto ya existe
$verificar_sql = "SELECT id FROM productos WHERE nombre = '$nombre' AND descrip = '$descrip'";

// Ejecutar la consulta de verificación
$verificar_result = $conn->query($verificar_sql);

if ($verificar_result->num_rows > 0) {
    // El producto ya existe, muestra una ventana emergente
    echo "<script>alert('El producto ya ha sido registrado anteriormente.'); window.location.href='Registrar_producto.php';</script>";

} else {
    // Preparar la consulta SQL para insertar los datos en la tabla "productos"
    $sql = "INSERT INTO productos (nombre, descrip, cantidad, Unit_med, proveedor, precio)
            VALUES ('$nombre', '$descrip', $cantidad, '$Unit_med', '$proveedor', $precio)";

    // Ejecutar la consulta de inserción
    if ($conn->query($sql) === TRUE) {
        header("Location: Registrar_producto.php");
    } else {
        echo "<script>alert('Error al guardar el producto, comuniquese con el PROGRAMADOR:'); window.location.href='Registrar_producto.php';</script>";

    }
}

// Cerrar la conexión
$conn->close();
?>
