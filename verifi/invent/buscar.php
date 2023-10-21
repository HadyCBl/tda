<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM productos WHERE nombre LIKE '%$search%'"; // Modifica la consulta según tus necesidades

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Descripción</th>";
    echo "<th>Proveedor</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Unidad de Medida</th>";
    echo "<th>Precio</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='border: 1px solid #ddd;'>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["descrip"] . "</td>";
        echo "<td>" . $row["proveedor"] . "</td>";
        echo "<td>" . $row["cantidad"] . "</td>";
        echo "<td>" . $row["Unit_med"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>";
    
    // Botón para eliminar 
    echo "<a href=\"delete_prod.php?id=" . $row["id"] . "\" onclick=\"return confirm('¿Estás seguro de que deseas borrar este registro?')\">";
    echo "<button class='btn-delete'><i class='fas fa-trash-alt'></i> </button>";
    echo "</a>";
    echo " ";
    // Botón para actualizar 
    echo "<a href=\"update_prod.php?id=" . $row["id"] . "\">";
    echo "<button class='btn-update'><i class='fas fa-edit'></i> </button>";
    echo "</a>";
    
    echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

$conn->close();
?>
