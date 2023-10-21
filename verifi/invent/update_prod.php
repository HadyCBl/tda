
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-*************" crossorigin="anonymous" />

</head>
<style>

body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
    transition: background-color 0.3s ease;
    animation: pulse 1s infinite;
}

input[type="submit"]:hover {
    background-color: #0069D9;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
    100% {
        transform: scale(1);
    }
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

            

            <p class="card__text">Sistema de Inventario</p>
        </div>
        <!-- Información sobre el proyecto -->
        <section>
        <div class="search-container">
    
</div>
<div id="resultados"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



     <section>
     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_tdla_bendi";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Crear la conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Obtener los datos actuales del registro
    $sql = "SELECT * FROM productos WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row["nombre"];
        $descrip = $row["descrip"];
        $proveedor = $row["proveedor"];
        $cantidad = $row["cantidad"];
        $Unit_med = $row["Unit_med"];
        $precio = $row["precio"];
        
    }
}
?>

<form action="save_update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
            <label for="descrip">descrip:</label>
            <input type="text" name="descrip" value="<?php echo $descrip; ?>"><br>
            <label for="proveedor">Proveedor:</label>
            <input type="Text" name="proveedor" value="<?php echo $proveedor; ?>"><br>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" value="<?php echo $cantidad; ?>"><br>

            <label for="Unit_med">Unidad de Medida:</label>
            <select class="form__input" name="Unit_med" id="Unit_med">
    <option value="unidad" <?php if ($Unit_med === 'unidad') echo 'selected'; ?>>Unidad</option>
    <option value="Por Quetzal" <?php if ($Unit_med === 'Por Quetzal') echo 'selected'; ?>>Por Quetzal</option>

    <option value="libra" <?php if ($Unit_med === 'libra') echo 'selected'; ?>>Libra</option>
    <option value="media_libra" <?php if ($Unit_med === 'media_libra') echo 'selected'; ?>>Media Libra</option>
    <option value="manojo" <?php if ($Unit_med === 'manojo') echo 'selected'; ?>>Manojo</option>
    <option value="media_docena" <?php if ($Unit_med === 'media_docena') echo 'selected'; ?>>Media Docena</option>
</select>
<label for="precio">Precio:</label>
            <input type="number" name="precio" value="<?php echo $precio; ?>"><br>

           <h1>
           
           </h1>
           <h1>

           </h1>
            <input type="submit" value="Guardar">
        </form>
<head>
    <title>Actualizar Producto</title>
</head>


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