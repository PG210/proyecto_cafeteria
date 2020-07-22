<?php
 
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
     <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="../../css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="../../css/style.css">
     <link rel="stylesheet"  href="../../php2/img/icomoon1/style.css">
     <link rel="stylesheet"  href="../../css/miss.css">
  </head>
  
  <body>
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../../controller/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesión</button>
    </a></li> 
    </ul>
  </div>
</nav>
  
  <!--end-->
  <div class="container" align="right">
    <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->
    <img src="../../img/foto.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
    Hola Administrador <?php echo ucfirst($_SESSION['nombre']); ?>
    </div>
    
<div class="container" align="center">
   <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../../php2/img/latte.jpg" alt="Card image cap" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Bienvenido.</h5>
    <p>Ingrese para actualizar, eliminar y agregar cantidad de productos.</p>
   <a href="../../php2/index2.php">
      <button type="button" name="but">Entrar</button>
    </a>
   
  </div>
</div>
  </div> 
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
<br><br>
<br><br>
<br>
<div class="footer">
  <p> 
  Cafetería el buen sabor 2020 Copyright © Todos los derechos reservados.<br>
  <i class="icon-facebook2"> Facebook</i>
  <i class="icon-twitter"> Twitter</i>
  <i class="icon-youtube"> YouTube</i>
  </p>
</div>
    
      <!-- Jquery -->
    <script src="../../js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="../../js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="../../js/operaciones.js"></script>
  </body>
</html>
