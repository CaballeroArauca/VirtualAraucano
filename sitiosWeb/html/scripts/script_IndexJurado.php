<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
    <div >
    <a name="a1"></a>
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right" onclick="Activar('div1')"></span> Participantes</b></h3>
      </div>
      <div style="display:none;" id="div1" class="participantes">
        <table class="table table-hover">
          <tr>
            <th><h4><b>Nombre</b></h4></th>
            <th><h4><b>Modalidad</b></h4></th>
          </tr>
          <tr>
            <td>
              <h4><span class="glyphicon glyphicon-star-empty"></span> Ricardo Garcia Valaguera</h4>
            </td>
            <td><h4>Canto</h4></td>
          </tr>
          <tr>
            <td>
              <h4><span class="glyphicon glyphicon-star-empty"></span> Carlos Alverto Arevalo Aguillon</h4>
            </td>
            <td><h4>Declamación</h4></td>
          </tr>
          <tr>
            <td>
              <h4><span class="glyphicon glyphicon-star-empty"></span> Silvia Daniela Ariza Rincon</h4>
            </td>
            <td><h4>Canto</h4></td>
          </tr>
        </table>
      </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div >
       <a name="a2"></a>
      <div class="titulo">
        <h3><b><span class="glyphicon glyphicon-chevron-right" onclick="Activar('div2')"></span> Datos de los Grupos</b></h3>
      </div>
      <div style="display:none;" id="div2" class="datos">
        <div class="row">
          <div class="col-sm-4">
            <h4><b>Nombre</b></h4>
            <h4><b>-</b> Ricardo Garcia Valaguera</h4>
            <h4><b>Modalidad</b></h4>
            <h4><b>-</b> Canto</h4>
          </div>
          <div class="col-sm-4">
            <h4><b>Participantes</b></h4>
            <h4><b>-</b> Ricardo Garcia Valaguera</h4>
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
            <form class="form-horizontal" action="#">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Expresión Corporal</label>
                 <div class="col-sm-8">
                  <input class="form-control" type="number" id="Expresion" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                  </div>
                  </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Manejo Escenario</label>
                 <div class="col-sm-8">          
                 <input class="form-control" type="number" id="Escenario" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Afinación</label>
                 <div class="col-sm-8">          
                 <input class="form-control" type="number" id="Afinacion" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Afinación</label>
                 <div class="col-sm-8">          
                 <input class="form-control" type="number" id="Afinacion" onKeyUp="Calcular()" min="1" max="100" placeholder="33%" required>
                </div>
              </div>

              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success btn-block" onclick="ActivarNext()"><span class="glyphicon glyphicon-ok"> Calificar</button>
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