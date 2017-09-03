<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Calificacion</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

  
  <link rel="stylesheet" type="text/css" href="../css/Mycss2.css">
   
  </head>
  <body>
  <script type="text/javascript">
    function Activar(div) {
      obj = document.getElementById(div);
      obj.style.display = (obj.style.display=='none') ? 'block' : 'none';
    }
    function Activar1(div){
      obj=document.getElementById(div);
     obj.style.display = (ob.style.display=='none') ? 'block' : 'none';
     }
     function Activar2(div){
      obj=document.getElementById(div);
     obj.style.display = (ob.style.display=='none') ? 'block' : 'none';
     }
  </script>
  <div class="container">
    <div class="jumbotron img-jumbotron" style="background: url(../img/jumbotron.png);">
    <h1 align="center">Noche de talento </h1>      
    <p>informacion de la noche de talentos</p>
    <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <div><a onclick="Activar('div1')" href="#a1"> <img  class="img" align="center" src="../img/nav2.png"> </a></div>
            <p class="p-nav" align="center">Grupos</p>
          </div>
          <div class="col-xs-3">
              <div><a onclick="Activar('div2')" href="#a2"> <img  class="img" src="../img/nav1.png"> </a></div>
              <p class="p-nav" align="center">Información</p>
          </div>
          <div class="col-xs-3">
             <div><a onclick="Activar('div3')" href="#a3"> <img  class="img" src="../img/nav.png"></a></div>
             <p class="p-nav" align="center">Calificar</p>
          </div>
          <div class="col-xs-3">
             <div><a  href="#"> <img  class="img" src="../img/nav3.png"></a></div>
             <p class="p-nav" align="center">Salir</p>
          </div>
      </div>
      
    </div>
    
  
 

  </div>
  </div>
  
  <div class="row">
    <div class="col-sm-12 ">
      <div class="titulo2 ">
      <div class="col-sm-offset-1">
         <div class="">
            <h3><b><span class="glyphicon glyphicon-user"></span> Grupos</b></h3>
          </div>
      </div>
     
      </div>
    </div>
    
 
    
  </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
        <div >
        <a name="a1"></a>
          <div class="titulo">
            <h3><b><span class="glyphicon glyphicon-chevron-right" onclick="Activar('div1')"></span> Grupos</b></h3>
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
            <h3><b><span class="glyphicon glyphicon-chevron-right" onclick="Activar('div2')"></span> Infirmacion</b></h3>
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

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
           
             <img src="../img/logovac.png" class="img-rounded col-xs- col-sm-offset-6 " alt="Cinque Terre" width="15%" height="15%">
              
          </div>
         
        </div>
      </div>
      
      <br>
      <p align="center">©2017 virtual araucano. Todos los derechos reservados.</p>
    </div>
    
    </footer>

    

    
  </body>
  
</html>