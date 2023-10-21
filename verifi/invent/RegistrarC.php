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

// Verificar si se ha enviado una contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contrasena_ingresada = $_POST['contrasena_ingresada'];

    // Consulta SQL para obtener la contraseña almacenada en la base de datos
    $sql_obtener_contrasena = "SELECT pass FROM pass LIMIT 1";
    $result = $conn->query($sql_obtener_contrasena);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contrasena_bd = $row['pass'];

        // Verificar si la contraseña ingresada coincide con la contraseña almacenada en la base de datos
        if ($contrasena_ingresada === $contrasena_bd) {
            // Contraseña válida, permitir el acceso
            $_SESSION['authenticated'] = true;
            header("Location: Registrar_producto.php");
            exit();
        } else {
            // Contraseña incorrecta, mostrar mensaje de error
            $error_message = "Contraseña incorrecta. Inténtalo de nuevo.";
        }
    } else {
        // No se encontró una contraseña en la base de datos
        $error_message = "Error: No se encontró una contraseña en la base de datos.";
    }
}

// Cerrar la conexión
$conn->close();
?>




<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8" />
  <title>inicio</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <link rel="stylesheet" href="assets/css/variables.css" />
  <link rel="stylesheet" href="assets/css/styleinicio.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-*************" crossorigin="anonymous" />

  <style>

.red-button {
    background-color: red;
    color: white;
    border: 2px solid white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
}

.red-button:hover {
    background-color: white;
    color: red;
}

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



.search-container {
  display: flex;
  align-items: center;
}

#search-input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  margin-right: 5px; /* Ajusta el margen derecho según tu preferencia */
}

#search-button {

  align-items: center
  justify-content: center;
  padding: 10px;
  background-color: #3498db;
  border: none;
  color: white;
  cursor: pointer;
  border-radius: 4px;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

#search-button:hover {
  background-color: #2980b9;

    .form__input {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s ease;
    }

    .form__input:focus {
      outline: none;
      border-color: #0066ff;
      box-shadow: 0 0 5px rgba(0, 102, 255, 0.3);
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      background-color: #0066ff;
      color: #fff;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #0044cc;
    }

    
  </style>
</head>




<body>
  <!-- Sidebar -->
<!-- Sidebar -->
<!-- Sidebar -->
<aside id="sidebar" class="sidebar">
  <div class="logo">
    <img class="logo__img" src="assets/img/logo.png">
    <!-- Título del sitio -->
    <a class="sidebar__titulo" href="#">
      <span class="sidebar__titulo sidebar__titulo-destacado">Ctrl_TDA
        <span class="sidebar__titulo sidebar__titulo-alternativo"> </span>
      </span>
    </a>
  </div>
  <ul class="sidebar__menu">
    <li class="sidebar__item">
      <button class="sidebar__button " onclick="window.location.href='inicio.php'">
        <i class='bx bxs-directions sidebar__icon'></i>
        <span class="sidebar__text">INICIO</span>
      </button>
    </li>
    <li class="sidebar__item">
      <button class="sidebar__button " onclick="window.location.href='RegistrarP.php'">
        <i class='bx bxs-info-circle sidebar__icon'></i>
        <span class="sidebar__text">REGISTRO PROD.</span>
      </button>
    </li>
    <li class="sidebar__item">
    <button class="sidebar__button sidebar__button--active" onclick="window.location.href='RegistrarC.php'">
  <i class='bx bx-store sidebar__icon'></i> <!-- Icono de inventario -->
  <span class="sidebar__text">INVENTARIO</span>
</button>
  </li>
   
    <li class="sidebar__item">
    <button class="sidebar__button " onclick="window.location.href='Ventas.php'">
    <i class='bx bxs-cart sidebar__icon'></i> <!-- Cambia la clase del icono aquí -->
    <span class="sidebar__text">Venta</span>
</button>

    </li>
  </ul>
</aside>
  <!-- Menú superior -->
  <nav id="navbar" class="navbar">
    <!-- Contenido izquierda -->
    <div class="navbar__container navbar__container-left">
      <a class="navbar__link navbar__button-left navbar__button-disabled">
        <i class='bx bx-menu bar__icono-left'></i>
      </a>
    </div>
    <!-- Contenido derecha -->
    <div class="navbar__container navbar__container-right">
      
 
      <ul class="navbar__ul">
        <li class="navbar__li">
          <a class="navbar__link">
            <i id="theme-enabled" class='bx bx-brightness-half bar__icono'></i>
            <span class="navbar__texto">Tema</span>
          </a>
          <!-- Menú desplegable -->
          <div id="navbar__theme-switcher" class="navbar__desplegable navbar__desplegable-disabled">
            <a class="navbar__desplegable__link navbar__theme-enabled">
              <i class='bx bx-brightness-half bar__icono'></i>
              <span id="theme-0" class="navbar__texto">SO por defecto</span>
            </a>
            <a class="navbar__desplegable__link">
              <i class='bx bx-sun bar__icono'></i>
              <span id="theme-1" class="navbar__texto">Claro</span>
            </a>
            <a class="navbar__desplegable__link">
              <i class='bx bx-moon bar__icono'></i>
              <span id="theme-2" class="navbar__texto">Oscuro</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Botón probar -->
      <a class="button button-highlighted" href="index.html">Cerra sesion</a>
    </div>
  </nav>
  <!-- Contenido de la página -->
  <main id="main" class="main">
    <!-- Sección sobre el proyecto -->
    <!-- Encabezado con nombre del proyecto -->
    <div id="about" class="card">
      <h1 class="card__title">Registro</h1>
      <p class="card__text">De Productos</p>
    </div>
    <a class="red-button" href="reset_invent.php">Redirigir a reset_invent.php</a>
    <!-- Información sobre el proyecto -->
    <section>
      <h1 class="title"> <span class="date">Termino: x de febrero 20XX</span></h1>
      <p>
        
     
      

<body>

<div class="search-container">
    <form method="GET" action="">
        <input type="text" name="search" id="search-input" placeholder="Buscar..." onkeyup="buscarProductos()">
        <button type="submit" id="search-button">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>
<div id="resultados"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function buscarProductos() {
        var search = document.getElementById('search-input').value;
        if (search.length >= 3) {
            $.ajax({
                type: "GET",
                url: "buscar_invent.php",
                data: { search: search },
                success: function(response) {
                    $("#resultados").html(response);
                }
            });
        } else {
            $("#resultados").empty();
        }
    }
</script>

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

// Verificar si se ha enviado una consulta de búsqueda
$search = isset($_GET['search']) ? $_GET['search'] : '';
$whereClause = $search ? "WHERE nombre LIKE '%$search%'" : '';

$sql = "SELECT * FROM productos $whereClause"; // Corregido aquí
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Nombre</th>"; 
  echo "<th>Descripción</th>"; 
  echo "<th>Proveedor</th>"; 
  echo "<th>Cantidad</th>"; 
  echo "<th>Unidad de Medida</th>"; 
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
    echo "<td>" . $row["Unit_med"] . "</td>"; 
    echo "<td>" . $row["precio"] . "</td>"; 
    echo "<td>";
    if ($row["estado_inventario"] == 1) {
        echo "Inventariado";
    } else {
        echo "No Inventariado";
    }
    echo "</td>";
    echo "<td>";
    if ($row["estado_inventario"] == 1) {
        echo "<button class='action-button inventariado-button' onclick='markReturned(" . $row['id'] . ")'>✔</button>";
    } else {
        echo "<button class='action-button no-inventariado-button' onclick='redirectToUpdatedevuleto(" . $row['id'] . ")'>✔</button>";
    }
    echo "</td>";
    echo "</tr>";
}

  echo "</table>";
} else {
  echo "No se encontraron registros.";
}

$conn->close();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluye jQuery -->
<script>
                    function markReturned(estado_inventario_id) {
                        // Redirigir a updatedevuleto.php
                        window.location.href = 'est_invet_update.php?estado_inventario_id=' + estado_inventario_id;
                    }

                    function redirectToUpdatedevuleto(estado_inventario_id) {
                        // Redirigir a updatedevuleto.php con un query parameter
                        window.location.href = 'est_invet_update.php?estado_inventario_id=' + estado_inventario_id;
                    }
                    </script>


</body>


</html>



<!-- ... Código HTML posterior ... -->

   
      <hr />
    </section>
    <!-- Sección componentes -->

    <!-- Sección descargas -->
    <section id="downloads">
      <h2 class="title">REDES SOCIALES</h2>
      <table class="table__downloads">
      
      
  
       
      </table>
      <hr />
    </section>
  </main>
  <!-- Pie de página -->
  <footer class="footer">
    <div class="footer__container">
      <div class="footer__item">
        <a href="https://www.facebook.com/" target="_blank">
          <i class="fab fa-facebook-square fa-lg"></i>
        </a>
      </div>
      <div class="footer__item">
        <a href="https://www.instagram.com/_harveycbl/" target="_blank">
          <i class="fab fa-instagram fa-lg"></i>
        </a>
      </div>
      <div class="footer__item">
        <a href="https://github.com/HadyCBl" target="_blank">
          <i class="fab fa-github fa-lg"></i>
        </a>
      </div>
      <div class="footer__item">
        <a href="https://twitter.com/" target="_blank">
          <i class="fab fa-twitter fa-lg"></i>
        </a>
      </div>
      <!-- No quites esto  -->
      <hr class="footer__line" />
      <p class="info">
        Creada por Harvey Danny Enrique Chen Bol
        <a href="https://github.com/HadyCBl"
          target="_blank">Ctrl_Inventario</a>
        y
        <a href="https://github.com/HadyCBl" target="_blank">github</a>.
      </p>
    </div>
  </footer>
  
  

  <!-- Scripts -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="assets/js/index.js"></script>
</body>



</html>

