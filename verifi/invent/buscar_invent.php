<style>
    
.action-button {
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

.inventariado-button {
    background-color: green;
    color: white;
}

.no-inventariado-button {
    background-color: red;
    color: white;
}

</style>

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

$sql = "SELECT * FROM productos WHERE nombre LIKE '%$search%' OR proveedor LIKE '%$search'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>"; 
    echo "<th>Descripción</th>"; 
    echo "<th>Proveedor</th>"; 
    echo "<th>Cantidad</th>"; 
    echo "<th>Precio</th>"; 
    echo "<th>Inventariado</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["descrip"] . "</td>"; 
        echo "<td>" . $row["proveedor"] . "</td>"; 
        echo "<td>" . $row["cantidad"] . "</td>"; 
        echo "<td>" . $row["precio"] . "</td>"; 
        echo "<td>";
        if ($row["estado_inventario"] == 1) {
            echo "Inventariado";
        } else {
            echo "No Inventariado";
        }
        echo "</td>";
        echo "<td>";
        if ($row["estado_inventario"] == 0) {
            echo "<button class='action-button prestado-button' onclick='markReturned(" . $row['id'] . ")'> ✔ </button>";
        } else {
            echo "<button class='action-button devuelto-button' onclick='redirectToUpdatedevuleto(" . $row['id'] . ")'> ✔ </button>";
        }
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros. Prueba buscar solamente con Nombres";
}

$conn->close();
?>
