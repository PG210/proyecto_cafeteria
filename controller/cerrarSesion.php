<?php

  // Eliminamos la sesion
  session_start();
  session_destroy();//destructor de clases

  header('location: ../index.php');

?>
