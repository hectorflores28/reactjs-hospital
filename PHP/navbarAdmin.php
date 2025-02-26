<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container px-5">
        <a class="navbar-brand" href="historialmedico.php">Oxygen
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!--Dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Historial Medico</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="vacunas.php">Vacunas</a></li>
                    <li><a class="dropdown-item" href="analisis.php">Analisis</a></li>
                    <li><a class="dropdown-item" href="radiografias.php">Radiografias</a></li>
                    <li><a class="dropdown-item" href="enfermedades.php">Enfermedades</a></li>
                </ul>
            </li>
                <!--Cierre Dropdown-->
                <!--Dropdown-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php session_start(); $usuario = $_SESSION['usuario']; echo "$usuario"; ?></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="login/salir.php">Salir</a></li>
                </ul>
            </li>
                <!--Cierre Dropdown-->
        </div>
    </div>
</nav>