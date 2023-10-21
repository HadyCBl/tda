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
  <link rel="stylesheet" href="assets/css/styleinicio.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-*************" crossorigin="anonymous" />

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
      <button class="sidebar__button sidebar__button--active" onclick="window.location.href='inicio.php'">
        <i class='bx bxs-directions sidebar__icon'></i>
        <span class="sidebar__text">INICIO</span>
      </button>
    </li>
    <li class="sidebar__item">
      <button class="sidebar__button " onclick="window.location.href='RegistrarP.php'">
        <i class='bx bxs-info-circle sidebar__icon'></i>
        <span class="sidebar__text">REGISTRO PROD</span>
      </button>
    </li>
    <li class="sidebar__item">
      <button class="sidebar__button " onclick="window.location.href='RegistrarC.php'">
      <i class='bx bx-store sidebar__icon'></i> <
          <span class="sidebar__text">INVENTARIO</span>
      </button>
  </li>
    
    <li class="sidebar__item">
    <button class="sidebar__button" onclick="window.location.href='Ventas.php'">
    <i class='bx bxs-cart sidebar__icon'></i> <!-- Cambia la clase del icono aquí -->
    <span class="sidebar__text">Venta</span>
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
      <a class="button button-highlighted" href="index.html">Cerra sesion</a>
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
    <section>
      <h1 class="title">Datos de la Empresa <span class="date">Termino: en curso</span></h1>
      <p>
        
      </p>
      <!-- Keywords -->
     
      <!-- Datos estudiante -->
      <h3>Nombre:</h3>
      <p>Ctrl
        _Inventario</p>
      <h3>No. Telefono</h3>
      <p>XXXXXXXXXX</p>
      <!-- Datos de profesorado -->
      <h3>Asesor</h3>
      <a class="link" href="#" target="_blank" rel="external"> Nombre SegNombre Apellido1 Apellido2<i
          class='bx bx-link-external'></i></a>
      <h3>Asesora</h3>
      <a class="link" href="#" target="_blank" rel="external">
        Nombre Apellido1 Apellido2<i class='bx bx-link-external'></i></a>
      <h2 id="a1">Welcome</h2>
      <p>
casi
      </p>
      <!-- Imágenes -->
      <div class="image">
        <img class="image__item" src="assets/img/img1.jpg" />
        <p class="image__descriptor">
          Qui proident elit et fugiat.
        </p>
      </div>
     
  
    <!-- Sección componentes -->

    <!-- Sección descargas -->
    <section id="downloads">
      <h2 class="title">REDES SOCIALES</h2>
      <p>Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>
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