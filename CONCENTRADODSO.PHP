<!-- INDEX -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hospital</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbar.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="img/curp.jpg" alt="..." />
            </div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">¿Conoces tu CURP?
                </h1>
                <p>La consulta puede efectuarse proporcionando su nombre y datos de nacimiento.
                </p>
                <!--Boton CURP-->
                <div class="row">
                    <h6></h6>
                    <button class="btn btn-primary" type="button" onclick="cargarFormulario()">Solicitar formulario para CURP</button>
                </div>
                <div class="row">
                    <br><br>
                    <div id="CURPtabla">
                    </div>
                </div>
            </div>
        </div>
        <!--Separador-->
        <?php
        include("separador.php")
        ?>
        <!--Tarjetas Extras-->
        <div class="row gx-4 gx-lg-5">

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Covid-19</h2>
                        <p class="card-text">Algunas personas se encuentran en casa, muchos otros tienen que salir a trabajar con todas las medidas necesarias de protección, pero nuestro personal médico, de enfermería, atención prehospitalaria y voluntariado siguen las 24 horas en su labor de salvar vidas...</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Mas Información</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Emergencias Erupciones</h2>
                        <p class="card-text">El 9 de abril de 2021, el volcán de La Soufrière, en San Vicente y las Granadinas , entró en erupción de forma intensa, liberando una columna de ceniza de 10 km en el cielo, desplazando a unos 16.000 residentes...</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Mas Información</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Donaciones</h2>
                        <p class="card-text">Te invitamos a donar y a compartir nuestra causa. Estamos listo para recibir tu donativo las 24 horas de los 365 días del año. Puedes contar con que tu donativo llegará a quién y en donde más se necesita...</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Mas Información</a></div>
                </div>
            </div>
            <!--Fin de Tarjetas Extras-->
        </div>
        <!--Fin de Contenido-->
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!--Jquery para Boton CURP-->
    <script src="js/jquery.min.js"></script>
    <!--Bootstrap para Boton CURP-->
    <script src="js/bootstrap.js"></script>
    <!--Script Funcion Boton CURP-->
    <script>
        function cargarFormulario() {
            var xhttp = new XMLHttpRequest(); //Creamos nuestro objeto de instancia de XMLHTTPRequest.

            xhttp.onreadystatechange = function() { //La propiedad onreadystatechange es una funcion que se ejecuta cada vez que el estado del objeto cambia
                if (this.readyState == 4 && this.status == 200) { //Cuando la propiedad readyState es 4 y el status es 200, la respuesta esta lista: El documento esta listo para hacer un request y obtener un response.
                    document.getElementById("CURPtabla").innerHTML = xhttp.responseText; //La propiedadresponseText nos devuelve la respuesta del servidor como un text o String.
                }
            };

            xhttp.open("GET", "formulariocurp.php", true);
            xhttp.send();
        }
    </script>
</body>

</html>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php">Oxygen
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="citas.php">Citas</a></li>
                <li class="nav-item"><a class="nav-link" href="medicos.php">Medicos</a></li>
                <li class="nav-item"><a class="nav-link" href="iniciarsesion.php">Ingresar Sesion</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar Admin -->
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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php session_start();
                                                                                                                                                    $usuario = $_SESSION['usuario'];
                                                                                                                                                    echo "$usuario"; ?></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login/salir.php">Salir</a></li>
                    </ul>
                </li>
                <!--Cierre Dropdown-->
        </div>
    </div>
</nav>
<!-- Formulario Curp -->
<form>
    <div class="form-group">
        <label for="name">Nombre(s):</label><br>
        <input type="text" name="nombre" id="name" class="form-control" placeholder="Ingresa tu nombre(s)">
    </div>
    <div class="form-group">
        <label for="name">Primer apellido:</label><br>
        <input type="text" name="primerApellido" id="name" class="form-control" placeholder="Ingresa tu primer apellido">
    </div>
    <div class="form-group">
        <label for="name">Segundo apellido:</label><br>
        <input type="text" name="segundoApellido" id="name" class="form-control" placeholder="Ingresa tu segundo apellido">
    </div>
    <div class="form-group">
        <label for="name">Dia de nacimiento:</label><br>
        <input type="text" name="diaNacimiento" id="name" class="form-control" placeholder="Seleccionar el dia">
    </div>
    <div class="form-group">
        <label for="name">Mes de nacimiento:</label><br>
        <input type="text" name="mesNacimiento" id="name" class="form-control" placeholder="Seleccionar el mes">
    </div>
    <div class="form-group">
        <label for="name">Año de nacimiento:</label><br>
        <input type="text" name="añoNacimiento" id="name" class="form-control" placeholder="Seleccionar el mes">
    </div>
    <div class="form-group">
        <label for="name">Sexo:</label><br>
        <input type="text" name="sexo" id="name" class="form-control" placeholder="Seleccionar el sexo">
    </div>
    <div class="form-group">
        <label for="name">Estado:</label><br>
        <input type="text" name="estado" id="name" class="form-control" placeholder="Seleccionar el estado">
    </div>
    <button class="btn btn-primary" type="button">Enviar formulario
    </button>
</form>
<!-- Citas -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbar.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <h1 class="font-weight-light">¿Gustas agendar una cita?
                </h1>
                <p>Para obtener su cita de primera vez esta sera unicamente para Medicina General o Familiar quien lo remitira con el Especialista si es necesario. Hay que llamar al Call Center a los teléfonos: XX XX-XX-XX-XX o XX XX-XX-XX-XX y del interior de la república llamar al número telefónico XX-XXX-XXX-XX-XX,
                </p>
                <a class="btn btn-primary" href="tel:+XXXXXXXXXXX">Llamanos! Haz click aqui!
                </a>
            </div>
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="img/citas.jpg" alt="..." />
            </div>
        </div>
        <!--Separador-->
        <?php
        include("separador.php")
        ?>
        <!--Fin de Contenido-->
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Formulario Sesion -->
<form id="login-form" class="form" action="login/conexion.php" method="POST">
    <div class="form-group">
        <label for="username">Usuario</label><br>
        <input type="text" name="usuario" id="username" class="form-control" placeholder="Escribe tu usuario" required>
    </div>
    <div class="form-group">
        <label for="password" class="">Contraseña:</label><br>
        <input type="text" name="contrasena" id="password" class="form-control" placeholder="Escribe tu contraseña" required>
    </div>
    <div class="form-group">
        <label for="remember-me" class=""><span>Recordarme</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
        <input type="submit" name="submitLogin" class="btn btn-info btn-md" value="Enviar">
    </div>
</form>
<!-- Enfermedades -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enfermedades</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="historialmedico.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <h1 class="font-weight-light">Enfermedades
                </h1>
                <!--Tabla de Base de Datos -->
                <?php
                $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso');
                $consultar = "SELECT * FROM `tblenfermedades`";
                $query = mysqli_query($conexion, $consultar);
                $array = mysqli_fetch_array($query);
                ?>
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="enfermedadesSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">PDF</th>
                        </tr>
                    </thead>
                    <tbody id="datos"><!--Datos de Tabla-->
                        <?php
                        foreach ($query as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['tipo']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['pdf']; ?></td>
                            <tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
                <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Enfermedades Search -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enfermedades</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="enfermedades.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <!--Fin de Boton de Regreso-->
                <!--Titulo-->
                <h1 class="font-weight-light">Enfermedades
                </h1>
                <!--Tabla de Base de Datos -->
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="enfermedadesSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <?php
                $busqueda = $_POST['busqueda'];
                if (isset($_POST['boton'])) {
                    $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso'); //Conexion a BD
                    if ($conexion->connect_errno) { //Verificamos si esta conectado
                        echo "error";
                    }
                    $consultar = "SELECT * FROM `tblenfermedades` where nombre='$busqueda'";
                    $query = mysqli_query($conexion, $consultar);
                    $array = mysqli_fetch_array($query); //Funcion de Arreglos de Mysqli
                ?>
                    <!--Cierre Metodo Busqueda-->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">PDF</th>
                            </tr>
                        </thead>
                        <tbody id="datos"><!--Datos de Tabla-->
                            <?php
                            foreach ($query as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['tipo']; ?></td>
                                    <td><?php echo $row['descripcion']; ?></td>
                                    <td><?php echo $row['pdf']; ?></td>
                                <tr>
                        </tbody>
                <?php
                            }
                        }
                ?>
                    </table>
                    <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

</body>

</html>
<!-- Historial Medico -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hospital</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7">
                <h1>¡Bienvenido <strong><?php echo "$usuario"; ?></strong>!</h1>
            </div>
            <div class="col-lg-7">
                <br>
                <img class="img-fluid rounded mb-4 mb-lg-0" src="https://englishlive.ef.com/es-mx/blog/wp-content/uploads/sites/8/2018/09/Vocabulario-en-ingl%C3%A9s-que-todo-m%C3%A9dico-debe-conocer.jpg" alt="..." />
            </div>
            <div class="col-lg-5">
                <p>Comprometidos con tu salud, en Hospital Oxygen, mantenemos un área aislada y preparada para la atención de urgencias respiratorias por COVID-19. Manteniendo en operación regular el resto de nuestros servicios.
                </p>
                <a class="button is-success" href="https://twitter.com/search?q=%23SeguimosCuidandoDeTi&src=typed_query">#SeguimosCuidandoDeTi&nbsp;<i class="fa fa-plus"></i></a>
                <br><br>
                <p>“Cuando el tiempo significa vida, la atención inmediata es primordial. El servicio de Transporte Médico de Emergencia en Puerto Vallarta y Riviera Nayarit de Hospital Oxygen siempre está cerca de ti…”
                </p>
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
            <!--Mapa de Google-->
            <br><br><iframe src="https://www.google.com/maps/d/embed?mid=1-lFKQsYbZNj6ueTA2QATukNLi2Yma04Z" width="1080" height="400" style="pointer-events: none;"></iframe>
        </div>
        <!--Fin de Contenido-->
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Iniciar Sesion -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbar.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div id="login" class="margen-amplio-arriba fondo cafe">
            <h3 class="text-center text-black pt-5">Inicio de sesión
            </h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <!--Inicio de sesion Principal-->
                            <?php
                            include("formulariosesion.php")
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Separador-->
        <?php
        include("separador.php")
        ?>
        <!--Fin de Contenido-->
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Inicio Sesion -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbar.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div id="login" class="margen-amplio-arriba fondo cafe">
            <h3 class="text-center text-black pt-5">Inicio de sesión
            </h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <!--Inicio de sesion Principal-->
                            <!--Inicio Error de Logeo-->
                            <style>
                                /* Cuadro de Mensaje de Alerta */
                                .alert {
                                    padding: 20px;
                                    background-color: #f44336;
                                    /* Rojo */
                                    color: white;
                                    margin-bottom: 15px;
                                }

                                /* Boton de Cerrar */
                                .closebtn {
                                    margin-left: 15px;
                                    color: white;
                                    font-weight: bold;
                                    float: right;
                                    font-size: 22px;
                                    line-height: 20px;
                                    cursor: pointer;
                                    transition: 0.3s;
                                }

                                /* Cursor cerca de cerrar */
                                .closebtn:hover {
                                    color: black;
                                }
                            </style>

                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
                                </span>
                                "El nombre de usuario o contraseña es incorrecto."
                            </div>
                            <!--Fin Error de Logeo-->
                            <?php
                            include("formulariosesion.php")
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Separador-->
        <?php
        include("separador.php")
        ?>
        <!--Fin de Contenido-->
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Medicos -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbar.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <h1 class="font-weight-light">Conoce nuestros medicos
                </h1>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <!--Tarjeta1-->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="img/Dr1.jpg" alt="..." />
                    </div>
                    <h2 class="card-title">Dr. Sir Joseph Lister
                    </h2>
                    <p class="card-text" style="color: navy">Cirugía General.
                    </p>
                    <p class="card-text">Diagnóstico y tratamiento, mediante procedimientos quirúrgicos.
                    </p>
                </div>
            </div>
            <!--Tarjeta2-->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="img/Dr2.jpg" alt="..." />
                    </div>
                    <h2 class="card-title">Dr. Sir William Osler
                    </h2>
                    <p class="card-text" style="color: navy">Cardiología.
                    </p>
                    <p class="card-text">Diagnóstico, tratamiento e implementación de estrategias médicas y quirúrgicas.
                    </p>
                </div>
            </div>
            <!--Tarjeta3-->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="img/Dr3.jpg" alt="..." />
                    </div>
                    <h2 class="card-title">Dr. Ignaz Semmelweis
                    </h2>
                    <p class="card-text" style="color: navy">Neurología.
                    </p>
                    <p class="card-text">Prevención, diagnóstico, tratamiento e intervención del sistema nervioso central.
                    </p>
                </div>
            </div>
        </div>
        <!--Separador-->
        <?php
        include("separador.php")
        ?>
        <!--Fin de Contenido-->
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Pie -->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">Copyright &copy; Oxygen 2021</p>
    </div>
</footer>
<!-- Separador -->
<style>
    .bg-secondary {
        background-color: #5b92c3a8 !important;
    }
</style>
<div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
        <img style="width: 80px; height: auto;" class="img-fluid rounded mb-4 mb-lg-0" src="img/seccion.svg" alt="..." />
        <p class="text-white m-0">Ubica el hospital más cercano.
            <br>Ponemos a tu disposición Hospitales Oxygen en diferentes partes de la república.
        </p>
    </div>
</div>
<!-- Vacunas -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunas</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="historialmedico.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <!--Fin de Boton de Regreso-->
                <!--Titulo-->
                <h1 class="font-weight-light">Vacunas
                </h1>
                <!--Tabla de Base de Datos -->
                <?php
                $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso'); //Conexion a BD
                $consultar = "SELECT * FROM `tblvacunas`"; //Consulta
                $query = mysqli_query($conexion, $consultar); //Funcion de Consulta de Mysqli 
                $array = mysqli_fetch_array($query); //Funcion de Arreglos de Mysqli
                ?>
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="vacunasSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Vacuna</th>
                            <th scope="col">PDF</th>
                        </tr>
                    </thead>
                    <tbody id="datos"><!--Datos de Tabla-->
                        <?php
                        //Por cada dato de la tabla
                        foreach ($query as $row) {
                        ?>
                            <tr>
                                <!--Se Imprime por row-->
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['vacuna']; ?></td>
                                <td><?php echo $row['pdf']; ?></td>
                            <tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
                <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Vacunas Search -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunas</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="vacunas.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <!--Fin de Boton de Regreso-->
                <!--Titulo-->
                <h1 class="font-weight-light">Vacunas
                </h1>
                <!--Tabla de Base de Datos -->
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="vacunasSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre Completo" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <?php
                $busqueda = $_POST['busqueda'];
                if (isset($_POST['boton'])) {
                    $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso'); //Conexion a BD
                    if ($conexion->connect_errno) { //Verificamos si esta conectado
                        echo "error";
                    }
                    $consultar = "SELECT * FROM `tblvacunas` where nombre='$busqueda'";
                    $query = mysqli_query($conexion, $consultar);
                    $array = mysqli_fetch_array($query); //Funcion de Arreglos de Mysqli
                ?>
                    <!--Cierre Metodo Busqueda-->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Vacuna</th>
                                <th scope="col">PDF</th>
                            </tr>
                        </thead>
                        <tbody id="datos"><!--Datos de Tabla-->
                            <?php
                            //Por cada dato de la tabla
                            foreach ($query as $row) {
                            ?>
                                <tr>
                                    <!--Se Imprime por row-->
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['vacuna']; ?></td>
                                    <td><?php echo $row['pdf']; ?></td>
                                <tr>
                        </tbody>
                <?php
                            }
                        }
                ?>
                    </table>
                    <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

</body>

</html>
<!-- Radiografias -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiografias</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="historialmedico.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <h1 class="font-weight-light">Radiografias
                </h1>
                <!--Tabla de Base de Datos -->
                <?php
                $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso');
                $consultar = "SELECT * FROM `tblradiografias`";
                $query = mysqli_query($conexion, $consultar);
                $array = mysqli_fetch_array($query);
                ?>
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="radiografiasSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">PDF</th>
                        </tr>
                    </thead>
                    <tbody id="datos"><!--Datos de Tabla-->
                        <?php
                        foreach ($query as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['pdf']; ?></td>
                            <tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
                <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Radiografias Search -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiografias</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="radiografias.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <!--Fin de Boton de Regreso-->
                <!--Titulo-->
                <h1 class="font-weight-light">Radiografias
                </h1>
                <!--Tabla de Base de Datos -->
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="radiografiasSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <?php
                $busqueda = $_POST['busqueda'];
                if (isset($_POST['boton'])) {
                    $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso'); //Conexion a BD
                    if ($conexion->connect_errno) { //Verificamos si esta conectado
                        echo "error";
                    }
                    $consultar = "SELECT * FROM `tblradiografias` where nombre='$busqueda'";
                    $query = mysqli_query($conexion, $consultar);
                    $array = mysqli_fetch_array($query); //Funcion de Arreglos de Mysqli
                ?>
                    <!--Cierre Metodo Busqueda-->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">PDF</th>
                            </tr>
                        </thead>
                        <tbody id="datos"><!--Datos de Tabla-->
                            <?php
                            foreach ($query as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['descripcion']; ?></td>
                                    <td><?php echo $row['pdf']; ?></td>
                                <tr>
                        </tbody>
                <?php
                            }
                        }
                ?>
                    </table>
                    <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

</body>

</html>
<!-- Analisis -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="historialmedico.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <h1 class="font-weight-light">Analisis
                </h1>
                <!--Tabla de Base de Datos -->
                <?php
                $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso');
                $consultar = "SELECT * FROM `tblanalisis`";
                $query = mysqli_query($conexion, $consultar);
                $array = mysqli_fetch_array($query);
                ?>
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="analisisSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">PDF</th>
                        </tr>
                    </thead>
                    <tbody id="datos"><!--Datos de Tabla-->
                        <?php
                        foreach ($query as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['pdf']; ?></td>
                            <tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
                <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
<!-- Analisis Serach -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis</title>
    <!-- Icono de Titulo (Favicon)-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Iconos de Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Tema Principal CSS (Incluye Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <?php
    include("navbarAdmin.php")
    ?>
    <!--Contenido-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-5">
                <!--Boton de Regreso-->
                <form action="analisis.php">
                    <input type="submit" name="submitLogin" class="btn btn-info btn-info:hover" value="Volver"><br><br>
                </form>
                <!--Fin de Boton de Regreso-->
                <!--Titulo-->
                <h1 class="font-weight-light">Analisis
                </h1>
                <!--Tabla de Base de Datos -->
                <!--Metodo de Busqueda-->
                <div align="center">
                    <form action="analisisSearch.php" method="post" name="sesion">
                        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required />
                        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton" />
                    </form>
                </div>
                <!--Cierre Metodo Busqueda-->
                <?php
                $busqueda = $_POST['busqueda'];
                if (isset($_POST['boton'])) {
                    $conexion = new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso'); //Conexion a BD
                    if ($conexion->connect_errno) { //Verificamos si esta conectado
                        echo "error";
                    }
                    $consultar = "SELECT * FROM `tblanalisis` where nombre='$busqueda'";
                    $query = mysqli_query($conexion, $consultar);
                    $array = mysqli_fetch_array($query); //Funcion de Arreglos de Mysqli
                ?>
                    <!--Cierre Metodo Busqueda-->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">PDF</th>
                            </tr>
                        </thead>
                        <tbody id="datos"><!--Datos de Tabla-->
                            <?php
                            foreach ($query as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['descripcion']; ?></td>
                                    <td><?php echo $row['pdf']; ?></td>
                                <tr>
                        </tbody>
                <?php
                            }
                        }
                ?>
                    </table>
                    <!--Fin de Tabla de Base de Datos -->
            </div>
            <!--Separador-->
            <?php
            include("separador.php")
            ?>
        </div>
    </div>
    <!--Pie de Pagina-->
    <?php
    include("pie.php")
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

</body>

</html>