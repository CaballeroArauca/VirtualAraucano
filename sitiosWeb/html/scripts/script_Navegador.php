<?php
  $idJurado = $_SESSION['cedula'];
  $rol = $_SESSION['rol'];
  $usuario = $_usuario = $_SESSION['nombre']." ".$_SESSION['apellido']." ";
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><b>Noche de Talentos</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $usuario?></a></li>
        <li><a href="../../modelos/usuarios/cerrarSesion.php"><span class="glyphicon glyphicon-log-in"></span> salir</a></li>
      </ul>
    </div>
  </div>
</nav>