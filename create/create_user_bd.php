<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

// Establece la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recupera los datos del formulario
$nombre = $_POST['nombre'];
$segundo_nombre = $_POST['segundo-nombre'];
$tercer_nombre = $_POST['tercer-nombre'];
$telefono = $_POST['telefono'];
$correo_electronico = $_POST['correo-electronico'];
$dpi = $_POST['dpi'];
$fecha_nacimiento = $_POST['fecha-nacimiento'];
$direccion = $_POST['direccion'];

// Campo de usuario y contraseña
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

// Consulta SQL para verificar si el nombre de usuario ya existe
$sql_verificar_usuario = "SELECT COUNT(*) FROM usuarios WHERE usuario = ?";
$stmt_verificar_usuario = $conn->prepare($sql_verificar_usuario);
$stmt_verificar_usuario->bind_param("s", $usuario);
$stmt_verificar_usuario->execute();
$stmt_verificar_usuario->bind_result($count_usuario);
$stmt_verificar_usuario->fetch();

// Verificar si el nombre de usuario ya existe
if ($count_usuario > 0) {
    echo "El nombre de usuario ya existe.";
    // Cierra la consulta de verificación
    $stmt_verificar_usuario->close();
} else {
    // Cierra la consulta de verificación
    $stmt_verificar_usuario->close();

    // Consulta SQL para insertar datos en la tabla de usuarios
    $sql_insertar = "INSERT INTO usuarios (usuario, pass, nombre, segundo_nombre, tercer_nombre, telefono, correo_electronico, dpi, fecha_nacimiento, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara la declaración SQL
    $stmt_insertar = $conn->prepare($sql_insertar);

    if ($stmt_insertar === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    // Enlaza los parámetros de la consulta
    $stmt_insertar->bind_param("ssssssssss", $usuario, $pass, $nombre, $segundo_nombre, $tercer_nombre, $telefono, $correo_electronico, $dpi, $fecha_nacimiento, $direccion);

    // Ejecuta la consulta para insertar el nuevo usuario
    if ($stmt_insertar->execute()) {
        echo "Usuario creado con éxito.";
    } else {
        echo "Error al crear el usuario: " . $stmt_insertar->error;
    }

    // Cierra la consulta de inserción
    $stmt_insertar->close();
}

// Cierra la conexión
$conn->close();
?>
