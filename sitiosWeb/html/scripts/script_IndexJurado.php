<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Participantes</b></h3>
      </div>
      <div class="participantes">
        <?php
          require_once('../../modelos/grupos/claseGrupo.php');
          require_once('../../modelos/participantes/claseParticipante.php');

          $grupo = new Participante();
          $rowGrupos = $grupo->get_participantes($idJurado);
          if ($rowGrupos == "vacio") {
             header("Location: ../../sitiosWeb/html/fin.php");
          }else{
            echo "<table class='table table-hover'>";
              echo "<tr>";
                echo "<th><h4><b>Nombre</b></h4></th>";
                echo "<th><h4><b>Modalidad</b></h4></th>";
              echo "</tr>";
              for ($i=0; $i < count($rowGrupos); $i++) { 
                echo "<tr>";
                  echo "<td><h4><span class='glyphicon glyphicon-star-empty'></span> ".$rowGrupos[$i][1]."</h4></td>";
                  echo "<td><h4>".$rowGrupos[$i][2]."</h4></td>";
                echo "</tr>";
              }
          }  echo "</table>";
        ?>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right"></span> Datos del Grupo participante</b></h3>
      </div>
      <div class="datos">
        <div class="row">
          <div class="col-sm-4">
            <h4><b>Nombre</b></h4>
            <?php
               $idGrupo = $rowGrupos[0][0];
            ?>
            <h4><b>-</b><?php echo $rowGrupos[0][1];?></h4>
            <h4><b>Modalidad</h4>
            <h4><b>-</b><?php echo $rowGrupos[0][2];?></h4>
          </div>
          <div class="col-sm-4">
            <h4><b>Participantes</b></h4>
            <?php
              $participantes = new Participante();
              $rowParticipantes = $participantes->get_Participantes($idGrupo);
              for ($i=0; $i < count($rowParticipantes); $i++) { 
                echo "<h4><b>-</b>".$rowParticipantes[$i][0]." ".$rowParticipantes[$i][1]."</h4>";
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
          <div class="col-sm-10 col-sm-offset-2">
            <form class="form-horizontal" method="POST" action="../../modelos/calificaciones/calificacion.php">

              <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: left">Expresión Corporal</label>
                <div class="col-sm-2">
                  <input type="hidden" name="idGrupo" value="<?php echo $idGrupo;?>">
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
                <label class="col-sm-4 control-label" style="text-align: left">Afinación</label>
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