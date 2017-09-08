<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Participantes</b></h3>
      </div>
      <div class="participantes">
        <?php
          require_once('../../modelos/participantes/claseParticipante.php');

          $participantes = new Participante();
          $rowParticipantes = $participantes->get_participantes($idJurado);
          if ($rowParticipantes == "vacio") {
             header("Location: ../../sitiosWeb/html/fin.php");
          }else{
            echo "<table class='table table-hover'>";
              echo "<tr>";
                echo "<th><h4><b>Nombre</b></h4></th>";
                echo "<th><h4><b>Modalidad</b></h4></th>";
              echo "</tr>";
              for ($i=0; $i < count($rowParticipantes); $i++) { 
                echo "<tr>";
                  echo "<td><h4><span class='glyphicon glyphicon-star-empty'></span> ".$rowParticipantes[$i][1]."</h4></td>";
                  echo "<td><h4>".$rowParticipantes[$i][7]."</h4></td>";
                echo "</tr>";
              }
          }  echo "</table>";
        ?>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Datos del participante</b></h3>
      </div>
      <div class="datos">
        <div class="row">
          <div class="col-sm-6">
            <h4><b>Participante</b></h4>
            <?php
               $turno = $rowParticipantes[0][6];
               $participanteActual = new Participante();
               $rowParticipante = $participanteActual->get_TurnoActual($turno);
               for ($i=0; $i < count($rowParticipante); $i++) { 
                 echo "<h4><b>-</b> ".$rowParticipante[$i][1]." ".$rowParticipante[$i][2]."</h4>";
               }
            ?>
          </div>
          <div class="col-sm-4">
            <h4><b>Tema</b></h4>
            <h4><b>-</b> <?php echo $rowParticipante[0][8] ?></h4>
            <h4><b>Genero</b></h4>
            <h4><b>-</b> <?php echo $rowParticipante[0][9] ?></h4>
          </div>
          <div class="col-sm-2">
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
        <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Formulario de Calificación</b></h3>
      </div>
      <div class="calificacion">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-2">
            <form class="form-horizontal" method="POST" action="../../modelos/calificaciones/calificacion.php">

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: left">Expresión Corporal</label>
                <div class="col-sm-2">
                  <input type="hidden" name="turno" value="<?php echo $turno;?>">
                  <input class="form-control" type="number" name="Calificacion_1" id="Calificacion_1" onKeyUp="Calcular()" min="1" max="100" placeholder="25%" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: left">Manejo Escenario</label>
                <div class="col-sm-2">          
                  <input class="form-control" type="number" name="Calificacion_2" id="Calificacion_2" onKeyUp="Calcular()" min="1" max="100" placeholder="25%" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: left">Afinación</label>
                 <div class="col-sm-2">          
                  <input class="form-control" type="number" name="Calificacion_3" id="Calificacion_3" onKeyUp="Calcular()" min="1" max="100" placeholder="25%" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: left">Medida</label>
                 <div class="col-sm-2">          
                  <input class="form-control" type="number" name="Calificacion_4" id="Calificacion_4" onKeyUp="Calcular()" min="1" max="100" placeholder="25%" required>
                </div>
              </div>
               
              <div class="form-group">        
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"> Calificar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>