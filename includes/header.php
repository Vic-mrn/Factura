<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Portal Factura</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <!-- BOOTSTRAP 5 (OFFLINE)-->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <style>
    /* Estilos personalizados para la barra de navegación */
    .navbar-custom {
        background-color: #212529;
        /* Color oscuro */
        padding: 1rem;
    }

    .navbar-brand,
    .color {
        color: #ffffff !important;
        font-weight: bold;
        transition: color 0.3s;
    }

    .navbar-brand {
        font-size: 1.5rem;
    }

    .color:hover {
        color: #f8f9fa !important;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
    }

    .nav-item:not(:last-child) {
        margin-right: 1rem;
    }

    .rounded-shadow {
        max-width: 80%;
        margin: 50px auto;
        padding: 20px;
        border-radius: 15px;
        /* Borde redondeado */
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        /* Sombra */
        background-color: #ffffff;
        /* Fondo blanco */
    }
    </style>


    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/bootstrap.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom ">
        <a class="navbar-brand" href="portal.php">Portal Factura</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link color" href="MenuP.php">Padres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color" href="MenuA.php">Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color" href="#">Generar Factura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color" href="#">Historial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color" href="index.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>