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
      <button class="sidebar__button sidebar__button--active " onclick="window.location.href='RegistrarP.php'">
        <i class='bx bxs-info-circle sidebar__icon'></i>
        <span class="sidebar__text">REGISTRO PROD.</span>
      </button>
    </li>
    <li class="sidebar__item">
      <button class="sidebar__button " onclick="window.location.href='RegistrarC.php'">
      <i class='bx bx-store sidebar__icon'></i> <
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
    <!-- Información sobre el proyecto -->
    <section>
      <h1 class="title"> <span class="date">Termino: x de febrero 20XX</span></h1>
      <p>
        
      </p>
      <!-- Keywords -->
      <h3>Personal Autorizado , AUTOCHECK</h3>
    
      <!-- tabla de ingreso de registro -->

      <!-- ... Código HTML anterior ... -->

<!-- tabla de ingreso de registro -->




<!DOCTYPE html>
<html>
<head>
    <!-- Agrega aquí tus etiquetas meta y enlaces a CSS si es necesario -->
</head>
<body>
<?php
// Mostrar el formulario de contraseña si no se ha autenticado
if (!isset($_SESSION['authenticated'])) {
  echo '<div style="text-align: center; margin: 100px auto; width: 300px; padding: 20px; background-color: #333; border: 1px solid #ccc; border-radius: 5px;">';
  echo '<form method="post" action="">';
  echo '<label for="contrasena_ingresada" style="display: block; margin-bottom: 10px; color: #fff;">Ingresa la contraseña:</label>';
  echo '<input type="password" id="contrasena_ingresada" name="contrasena_ingresada" required style="display: block; width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; transition: border-color 0.3s ease; margin-bottom: 10px;">';
  echo '<input type="submit" value="Ingresar" style="display: block; width: 100%; padding: 10px 20px; font-size: 16px; background-color: #0066ff; color: #fff; border: none; border-radius: 4px; transition: background-color 0.3s ease;">';
  echo '</form>';
  if (isset($error_message)) {
      echo '<p style="color: red; margin-top: 10px;">' . $error_message . '</p>';
  }
  echo '</div>';
} else {
  // El usuario ya está autenticado, redirigir a la página de inicio
  header("Location: Registrar_producto.php");
  exit();
}

?>

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

