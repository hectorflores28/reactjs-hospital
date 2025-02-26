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