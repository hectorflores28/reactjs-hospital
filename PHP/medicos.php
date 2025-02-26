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