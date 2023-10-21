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

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // Usuario ha iniciado sesión, obtén el nombre desde la base de datos
    $usuario = $_SESSION['usuario'];
    
    // Consulta SQL para obtener el nombre del usuario
    $sql_obtener_nombre = "SELECT nombre FROM usuarios WHERE usuario = ?";
    $stmt_obtener_nombre = $conn->prepare($sql_obtener_nombre);
    $stmt_obtener_nombre->bind_param("s", $usuario);
    $stmt_obtener_nombre->execute();
    $stmt_obtener_nombre->bind_result($nombre);

    // Obtiene el resultado de la consulta
    if ($stmt_obtener_nombre->fetch()) {
        // Asigna el nombre a la variable de sesión
        $_SESSION['nombre'] = $nombre;
    }

    // Cierra la consulta
    $stmt_obtener_nombre->close();
}

// Cierra la conexión
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
    <!-- Incluye la biblioteca Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="assets/css/styleinicio.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-*************" crossorigin="anonymous" />

</head>
<style>
    .btn-delete {
    background-color: #FF5733; /* Estilo rojo */
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-update {
    background-color: #33FF4E; /* Estilo verde */
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}
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

.button-red {
    background-color: #FF0000;
    /* Color de fondo rojo */
    color: #FFFFFF;
    /* Color de texto blanco */
    padding: 10px 20px;
    /* Ajusta el relleno según tus preferencias */
    border: none;
    /* Elimina el borde del botón si lo deseas */
    text-decoration: none;
    /* Elimina la decoración de texto subrayado */
}

.button-red:hover {
    background-color: #FF3333;
    /* Cambia el color de fondo cuando se pasa el mouse */
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

<body>
    <!-- Sidebar -->
    <!-- Sidebar -->
    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar">
        <div class="logo">
            <img class="logo__img" src="assets/img/logo.png">
            <!-- Título del sitio -->
            <a class="sidebar__titulo" href="#">
                <span class="sidebar__titulo sidebar__titulo-destacado">Ctrl
                    <span class="sidebar__titulo sidebar__titulo-alternativo"> _Biblioteca</span>
                </span>
            </a>
        </div>
        <ul class="sidebar__menu">

            <li class="sidebar__item">
                <button class="sidebar__button  " onclick="window.location.href='Registrar_producto.php'">
                    <i class='bx bx-cart-add sidebar__icon'></i>
                    <span class="sidebar__text">REGISTRO PROD.</span>
                </button>
            </li>
            <li class="sidebar__item">
                <button class="sidebar__button sidebar__button--active" onclick="window.location.href='edit_prod.php'">
                    <i class='bx bx-edit sidebar__icon'></i>
                    <span class="sidebar__text">EDITAR PRODUCTOS</span>
                </button>

            </li>


        </ul>
    </aside>


    <li>

    </li>
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
            <a class="button button-red" href="inicio.php">Regresar a INICIO</a>
        </div>
    </nav>
    <!-- Contenido de la página -->
    <main id="main" class="main">
        <!-- Sección sobre el proyecto -->
        <!-- Encabezado con nombre del proyecto -->
        <div id="about" class="card">
            <h1 class="card__title">INICIO</h1>

            <h2 class="fw-bold">¡Bienvenido, <?php echo $_SESSION['nombre']; ?>!</h2>

            <p class="card__text">Sistema de Inventario</p>
        </div>
        <!-- Información sobre el proyecto -->
        <h1></h1>
        <section>
        <div class="search-container">
    <form method="GET" action="">
        <input type="text" name="search" id="search-input" placeholder="Buscar..." onkeyup="buscarProductos()">
        <button type="submit" id="search-button">
            <i class="fas fa-search"></i>
        </button>
    </form>
    
</div>
<div id="resultados"></div>
<h1>
    
</h1>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function buscarProductos() {
        var search = document.getElementById('search-input').value;
        if (search.length >= 3) {
            $.ajax({
                type: "GET",
                url: "buscar.php",
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
    echo "<th>Acciones</th>"; 
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
                <a href="https://github.com/HadyCBl" target="_blank">Ctrl_Inventario</a>
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