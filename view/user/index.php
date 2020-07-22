<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
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
     <link rel="stylesheet"  href="../../css/mistyle.css">
  </head>
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color: #e91e63">
    <div class="navbar-header" style="background-color: #e91e63">
      <a class="navbar-brand" style="background-color: #e91e63"></a>
    </div>
    <ul class="nav navbar-nav" style="background-color: #e91e63">
      <li class="active text-danger " >
      <a style="background-color: #e91e63 "href="index.php" >Home</a>
    </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../../controller/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesión</button>
    </a></li> 
    </ul>
  </div>
</nav>

  <body  >
  <div class="container" align="right">
    <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->
    <img src="../../img/foto.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100">
    Hola usuario <?php echo ucfirst($_SESSION['nombre']); ?>
    </div>
    
<div class="container" align="center">
   <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../../php2/img/latte.jpg" alt="Card image cap" width="200" height="200">
  <div class="card-body">
    <h5 class="card-title">Bienvenido.</h5>
    <p>Adquiera algun tipo de café recien preparado y siempre a tiempo.</p>
   <a href="../../php2/index1.php">
      <button type="button" style="background-color: #880e4f"name="but">comprar</button>
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
   background-color: #e91e63;
   color: white;
   text-align: center;
}
</style>
<br><br>
<br><br>
<br>
<div class="footer">
  <p> 
  Cafeteía el buen sabor 2020 Copyright © Todos los derechos reservados.<br>
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
