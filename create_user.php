<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacts - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/animate.min.css">
</head>

<style>
    /* Aplica un borde rojo a los campos requeridos que no están llenos */
input:required:invalid {
    border: 2px solid red;
}

</style>

<body>
    <nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/"></a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <img src="assets/img/brands/Tarjeta%20Horizontal%20Gracias%20por%20tu%20Compra%20Minimalista%20Beige%20(1).png" width="62" height="74">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="">Sistema de Inventario&nbsp;&nbsp;</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Inicia Sesión</p>
                    <h2 class="fw-bold">Crear Usuario</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div>
                    <form class="p-3 p-xl-4" method="post" action="create\create_user_bd.php">
                    <div class="mb-3"><input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario_For_Login"  required autocomple off></div>
                    <div class="mb-3"><input class="form-control" type="password" id="pass" name="pass" placeholder="Contraseña" required autocomplete="off"></div>
                            <div class="mb-3"><input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre"  required></div>
                            <div class="mb-3"><input class="form-control" type="text" id="segundo-nombre" name="segundo-nombre" placeholder="Segundo Nombre" required></div>
                            <div class="mb-3"><input class="form-control" type="text" id="tercer-nombre" name="tercer-nombre" placeholder="Tercer Nombre"></div>
                            <div class="mb-3"><input class="form-control" type="text" id="telefono" name="telefono" placeholder="Número de Teléfono" required></div>
                            <div class="mb-3"><input class="form-control" type="text" id="correo-electronico" name="correo-electronico" placeholder="Correo Electrónico"></div>
                            <div class="mb-3"><input class="form-control" type="text" id="dpi" name="dpi" placeholder="DPI" required></div>
                            <div class="mb-3"><input class="form-control" type="date" id="fecha-nacimiento" name="fecha-nacimiento" placeholder="Fecha de Nacimiento" required></div>
                            <div class="mb-3"><input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección" requerid></div>

                            <div class="mb-3"></div>
                            <div><button class="btn btn-primary shadow d-block w-100" data-bss-hover-animate="bounce" type="submit">Crear Usuario</button></div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>
