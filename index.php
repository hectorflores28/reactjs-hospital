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
            function cargarFormulario(){
                var xhttp = new XMLHttpRequest(); //Creamos nuestro objeto de instancia de XMLHTTPRequest.
    
                xhttp.onreadystatechange = function(){ //La propiedad onreadystatechange es una funcion que se ejecuta cada vez que el estado del objeto cambia
                if(this.readyState == 4 && this.status == 200){ //Cuando la propiedad readyState es 4 y el status es 200, la respuesta esta lista: El documento esta listo para hacer un request y obtener un response.
                    document.getElementById("CURPtabla").innerHTML = xhttp.responseText; //La propiedadresponseText nos devuelve la respuesta del servidor como un text o String.
                }
            };
    
            xhttp.open("GET", "formulariocurp.php", true);
            xhttp.send();
        }
        </script>
    </body>
</html>
