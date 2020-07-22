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

  }//si esta el id ya no no registrado 

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
     <link rel="stylesheet"  href="../login/css/mis.css">

  </head>
  <body>
  
 <nav class="navbar navbar-inverse">
  <div class="container-fluid"style="background-color: #e06767">
    <div class="navbar-header" style="background-color: #e06767">
      <a class="navbar-brand"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" style="background-color: #e06767"><a href="index.php" style="background-color: #e06767">Home      <img class="circle right-align" src="img/caf.jpg" width="45" height="45"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a><button type="button" class="btn btn-default btn-lg" style="background-color: #e06767"data-toggle="modal" data-target="#ayuda">Ayuda</button></a></li> 
    </ul>
  </div>
</nav>

   <!--modal-ayuda-->
   <div id="ayuda" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ayuda de registro</h4>
      </div>
      <div class="modal-body bg-info">
        <p>
        	El registro en la página de la cafetería el buen sabor, debe ser realizado por persona, el usuario y contraseña es independiente a los datos que se utilizan en el sistema, para registrarse, se requiere que cuente con una cuenta de correo electrónico vigente y activa, para registrarse por favor realice los siguientes pasos:<br><br>

            1. Desde la pantalla principal del sistema de clic en el botón "Registrarse".<br>
            2. Ingresar los datos solicitados en el formulario.<br>
            3. Dar clic en el botón "Registrarse".<br>
            4. Aparecera un mensaje de "Registrado con éxito".


        	
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
   <!--end -->
    <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->


    <!-- Formulario Login -->
    <div class="container" >
      <div class="row" >
        <div class="col-xs-12 col-md-4 col-md-offset-4" style="background-color: #880e4f">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>

          <form id="formulario_registro">
            <!-- Estructura del formulario -->
            <fieldset>

              <legend class="center">Registro</legend>
              
              <div class="spacing-2"></div>
              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
              </div>
              
              <div class="spacing-2"></div>
              
               <label class="sr-only" for="ced">Cedula</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="number" autocomplete="off" class="form-control" name="ced" placeholder="Numero de cedula">
              </div>
              
               <div class="spacing-2"></div>
              
               <label class="sr-only" for="tel">Telefono</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="number" autocomplete="off" class="form-control" name="tel" placeholder="Numero de telefono">
              </div>
               
                <div class="spacing-2"></div>
              
               <label class="sr-only" for="dir">Dirección</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="text" autocomplete="off" class="form-control" name="dir" placeholder="Ingrese su dirección">
              </div>
                
                
              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Email</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="email" placeholder="Ingresa tu email">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Ingresa tu clave">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Verificar contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña">
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
                  <button type="button" style="background-color: #c51162" class="btn btn-primary btn-block" name="button" id="registro">Registrate</button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
    
    <!--footer-->

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
  Cafeteía el buen sabor 2020 Copyright © Todos los derechos reservados.<br>
  <i class="icon-facebook2"> Facebook</i>
  <i class="icon-twitter"> Twitter</i>
  <i class="icon-youtube"> YouTube</i>
  </p>
</div>
 <!--end footer-->

    <!-- / Final Formulario login -->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
  </body>
</html>
