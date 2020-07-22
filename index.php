<?php

  /*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

  session_start();

  // isset verifica si existe una variable 
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login en PHP</title>

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="../php2/img/icomoon1/style.css">
    
  </head>
  <body style="background-color: #fdbcbc">
    <!--encabezado-->
    <nav class="navbar navbar-inverse">
  <div class="container-fluid " style="background-color: #f78d8d" >
    <div class="navbar-header  " >
      <a class="navbar-brand"></a>
    </div>
    <ul class="nav navbar-nav" style="background-color: #e06767">
      <li class="active" style="background-color: #e06767">
        <a href="index.php" style="background-color: #f78d8d"> CAFETERIA EL 
          <img class="circle right-align" src="img/caf.jpg" width="45" height="45">
           BUEN SABOR</a>
          </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a><button type="button" class="btn btn-default btn-lg"style="background-color: #e06767" data-toggle="modal" data-target="#myModal">Ingresar</button></a></li> 
      <li><a href="registro.php"><button type="button"style="background-color: #e06767" class="btn btn-default btn-lg" data-toggle="modal">Registro</button></a></li> 
    </ul>
  </div>
</nav>

    <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->
    <!--modal-->
   

<!-- Modal_ ingresar -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">INGRESAR</h4>
      </div>
      <div class="modal-body  bg-info">
        <!--formulario-->
        
   <!-- slider_end-->
    <!-- Formulario Login -->
    
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>

          <!-- Estructura del formulario -->
          <fieldset>

            <legend class="center">Login</legend>

            <!-- Caja de texto para usuario -->
            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" placeholder="Ingresa tu usuario">
            </div>

            <!-- Div espaciador -->
            <div class="spacing-2"></div>

            <!-- Caja de texto para la clave-->
            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu usuario">
            </div>

            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <!-- Fin load -->

            <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="button" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesion</button>
              </div>
            </div>

            <section class="text-accent center">
              <div class="spacing-2"></div>
              
              <p>
                No tienes una cuenta? <a href="registro.php"> Registrate!</a>
              </p>
            </section>

          </fieldset>
        </div>
      </div>
   

    <!-- / Final Formulario login -->
        
        <!--end formulario-->
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!--end modal-->
    
   <!-- slider-->
 <div class="container">
  <h2 align="center"></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="../login/php2/img/ve.jpg" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h3>El café es un bálsamo para el corazón y el espíritu.
          </h3>
          <p>Giuseppe Verdi</p>
        </div>
      </div>

      <div class="item">
        <img src=".../../php2/img/cho.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>La vida es como una taza de café. Todo está en cómo la preparas, pero sobre todo en cómo la tomas.</h3>
          <p>Anónimo</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../login/php2/img/capuchino.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>El café es un bálsamo para el corazón y el espíritu.</h3>
          <p>Giuseppe Verdi</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--footer-->

<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#f78d8d;
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
 <!--end footer-->
     
    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
   
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
    <script src="js/fun.js"></script>
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
