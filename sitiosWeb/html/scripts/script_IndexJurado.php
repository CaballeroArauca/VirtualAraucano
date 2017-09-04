<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
    <div >
    <a name="a1"></a>
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right" onclick="Activar('div1')"></span> Participantes</b></h3>
      </div>
      <div style="display:none;" id="div1" class="participantes">
        <?php
          require_once('../../modelos/grupos/claseGrupo.php');
          require_once('../../modelos/participantes/claseParticipante.php');

          $grupo = new Grupo();
          $rowGrupos = $grupo->get_grupos();
          echo "<table class='table table-hover'>";
            echo "<tr>";
              echo "<th><h4><b>Nombre</b></h4></th>";
              echo "<th><h4><b>Modalidad</b></h4></th>";
            echo "</tr>";
            for ($i=0; $i < count($rowGrupos); $i++) { 
              echo "<tr>";
                echo "<td><h4><span class='glyphicon glyphicon-star-empty'></span> ".$rowGrupos[$i][2]."</h4></td>";
                echo "<td><h4>".$rowGrupos[$i][3]."</h4></td>";
              echo "</tr>";
            }
          echo "</table>";
        ?>
      </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div >
       <a name="a2"></a>
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right" onclick="Activar('div2')"></span> Datos del Grupo participante</b></h3>
      </div>
      <div style="display:none;" id="div2" class="datos">
        <div class="row">
          <div class="col-sm-4">
            <h4><b>Nombre</b></h4>
            <?php
               $rowGrupo = $grupo->get_grupo();
               $idGrupo = $rowGrupo[0][0];
            ?>
            <h4><b>-</b><?php echo $rowGrupo[0][1];?></h4>
            <h4><b>Modalidad</h4>
            <h4><b>-</b><?php echo $rowGrupo[0][2];?></h4>
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
      </div>
      <div >
      <div class="titulo">
       <a name="a3"></a>
        <h3><b><span class="glyphicon glyphicon-chevron-right" onclick="Activar('div3')"></span> Formulario de Calificacion</b></h3>
      </div>
      <div style="display:none;" id="div3" class="calificacion">
        <div class="row">
          <div class="col-sm-10 ">
            <form class="form-horizontal" method="POST" action="../../modelos/calificaciones/calificacion.php">

              <div class="form-group">
                <label class="col-sm-2 control-label">Expresión Corporal</label>
                <div class="col-sm-8">
                  <input type="hidden" name="idGrupo" value="<?php echo $idGrupo;?>">
                  <input class="form-control" type="number" name="Calificacion_1" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                </div>
              </div>

              <div class="form-group">
                 <label class="col-sm-2 control-label">Manejo Escenario</label>
                 <div class="col-sm-8">          
                 <input class="form-control" type="number" name="Calificacion_2" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Afinación</label>
                 <div class="col-sm-8">          
                 <input class="form-control" type="number" name="Calificacion_3" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Afinación</label>
                 <div class="col-sm-8">          
                 <input class="form-control" type="number" name="Calificacion_4" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                </div>
              </div>
               
              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
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
</div>