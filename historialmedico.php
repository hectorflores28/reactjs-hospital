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
                    <br><br><p>“Cuando el tiempo significa vida, la atención inmediata es primordial. El servicio de Transporte Médico de Emergencia en Puerto Vallarta y Riviera Nayarit de Hospital Oxygen siempre está cerca de ti…”
                     </p>
                </div>
            <!--Separador-->
    <?php
        include("separador.php")
    ?>
        <!--Mapa de Google-->
        <br><br><iframe src="https://www.google.com/maps/d/embed?mid=1-lFKQsYbZNj6ueTA2QATukNLi2Yma04Z"width="1080" height="400" style="pointer-events: none;"></iframe>
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
