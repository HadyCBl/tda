<?php
session_start();

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['pass'];

    // Consulta SQL para verificar el usuario y la contraseña
    $sql_verificar_usuario = "SELECT nombre, segundo_nombre, telefono FROM usuarios WHERE usuario = ? AND pass = ?";
    $stmt_verificar_usuario = $conn->prepare($sql_verificar_usuario);
    $stmt_verificar_usuario->bind_param("ss", $usuario, $contrasena);
    $stmt_verificar_usuario->execute();
    $result = $stmt_verificar_usuario->get_result();

    if ($result->num_rows === 1) {
        // Usuario y contraseña válidos, inicia sesión
        $_SESSION['usuario'] = $usuario;

        // Obtener información adicional del usuario
        $row = $result->fetch_assoc();
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['segundo_nombre'] = $row['segundo_nombre'];
        $_SESSION['telefono'] = $row['telefono'];

        echo "Inicio de sesión exitoso. Redireccionando a tu página principal...";
        // Puedes redirigir al usuario a su página principal aquí
        header("Location:invent\inicio.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    // Cierra la declaración de verificación
    $stmt_verificar_usuario->close();
}

// Cierra la conexión
$conn->close();
?>