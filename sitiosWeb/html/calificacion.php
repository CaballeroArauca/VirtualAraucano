<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>YAMAHA-MOTOS</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/mycss.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#"><b>UCC</b></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <div class="titulo">
            <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Participantes</b></h3>
          </div>
          <div class="participantes">
            <?php
              require_once('../../modelos/calificacion/claseGrupo');
              require_once('../../modelos/calificacion/claseParticipante');

              $grupo = new Grupo();
              $rowGrupos = $grupo->get_Grupos();

              echo "<table class='table table-hover'>";
                echo "<tr>";
                  echo "<th><h4><b>Nombre</b></h4></th>";
                  echo "<th><h4><b>Modalidad</b></h4></th>";
                echo "</tr>";
                for ($i=0; $i < count($rowGrupos); $i++) { 
                  echo "<tr>"
                    echo "<td><h4><span class='glyphicon glyphicon-star-empty'></span> ".."</h4></td>";
                    echo "<td><h4>".."</h4></td>";
                  echo "</tr>"
                }
            ?>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="titulo">
            <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Datos de los Grupos</b></h3>
          </div>
          <div class="datos">
            <div class="row">
              <div class="col-sm-4">
                <?php
                  $rowGrupo = $grupo->get_Grupo();
                ?>
                <h4><b>Nombre</b></h4>
                <h4><b>-</b> <?php echo $rowGrupo[][] ?></h4>
                <h4><b>Modalidad</b></h4>
                <h4><b>-</b> <?php echo $rowGrupo[][] ?></h4>
                <h4><b>Tema</b></h4>
                <h4><b>-</b> <?php echo $rowGrupo[][] ?></h4>
              </div>
              <div class="col-sm-4">
                <?php

                  $participante = new Participante();
                  $rowParticipantes = $participante->get_Participantes();
                ?>
                <h4><b>Participantes</b></h4>
                <?php
                  for ($i=0; $i < count($rowParticipantes); $i++) { 
                    echo "<h4><b>-</b> ".."</h4>";
                  }
                ?>
              </div>
              <div class="col-sm-4">
                <center>
                  <h4><b>Puntos</b></h4>
                  <div class="puntos">
                    <h1><b id="total">0</b></h1>
                  </div>
                </center>
              </div>
            </div>
          </div>
          <div class="titulo">
            <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Formulario de Calificacion</b></h3>
          </div>
          <div class="calificacion">
            <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                <form class="form-horizontal" method="post" action="../../modelos/calificaciones/calificaciones.php">
                  <div class="form-group">
                    <div class="col-sm-4">
                      <input class="form-control" type="number" id="Expresion" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                    </div>
                    <label class="col-sm-8 control-label">Expresión Corporal</label>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <input class="form-control" type="number" id="Escenario" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                    </div>
                    <label class="col-sm-8 control-label">Manejo Escenario</label>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <input class="form-control" type="number" id="Afinacion" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                    </div>
                    <label class="col-sm-8 control-label">Afinación</label>
                  </div>
                  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"> Calificar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../js/calificaciones/calculo_calificacion.js"></script>
    
  </body>
  <footer class="container-fluid text-center">
    <p>Diseñado y Desarrollado por Virtual Arauca S.A</p> 
  </footer>
</html>