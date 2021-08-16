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
        <br><input type="text" placeholder="Introduce el Nombre" size=60 name="busqueda" class="form-control" required/>
        <input type="submit" value="BUSCAR" class="btn btn-info btn-info:hover" name="boton"/>
      </form>
   </div>
    <!--Cierre Metodo Busqueda-->
   <?php
          $busqueda=$_POST['busqueda'];
        if(ISSET($_POST['boton'])){
           $conexion= new Mysqli('localhost', 'userhafg', 'passw1hafg', 'dso');//Conexion a BD
	       if($conexion->connect_errno){//Verificamos si esta conectado
	           echo "error";
	       }
	       $consultar="SELECT * FROM `tblanalisis` where nombre='$busqueda'";
	       $query=mysqli_query($conexion,$consultar);
         $array = mysqli_fetch_array($query);//Funcion de Arreglos de Mysqli
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
                foreach ($query as $row){ 
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
      