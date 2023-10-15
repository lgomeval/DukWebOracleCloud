<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DukWeb</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Main JS -->
    <script src="main.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DukWeb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Proyectos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">DukWebOracleNube</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Foro Alura</a></li>
                                <li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Proyecto Clínica</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">JavaConversor</a></li>
                                <li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Decodificar de Texto</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Contacto</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <h1 class="text-capitalize py-3 bg-white">Hola Mundo Oracle Cloud Web Service</h1>

            <p>Primera pagina desplegada en el servidor x lgomeval.</p>
            <p>.</p>
        </div>
    </section>
    <footer>
        <?php
        echo "<p class='text-center'>Este contenido esta siendo mostrado mediante la fucnion echo, del lenguaje de programacion PHP Version 7.2.24</p>";
        ?>
    </footer>



    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>