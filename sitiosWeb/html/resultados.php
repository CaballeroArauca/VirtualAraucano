<!DOCTYPE html>
<html>
<head>
	<title>resultados</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/Mycss3.css">
	</head>
<body>

	

	<div class="container espacio">
		<div class="col-xs-12">
			 <div class="participantes">
       <?php
          require_once('../../modelos/resultados/claseResultados.php');
          $resultado = new Resultados();
          $rowDeclama = $resultado->get_ConsultaDeclama();
          if (count($rowDeclama) < 0) {
            echo "no se ha terminado de calificar los participantes";
          }else{
            echo "hola";
            var_dump($rowDeclama);
          }

          ?>
            <table class="table table-hover">
              <tr>
               <th><h4><b>Puesto</b></h4></th>
                <th><h4><b>Nombre</b></h4></th>
                <th><h4><b>Puntuacion</b></h4></th>
              </tr>
              <tr>
                <td>
                  <h4><span class="glyphicon glyphicon-star-empty"></span> <?php 

                  ?></h4>
                </td>
                <td><h4>Canto</h4></td>
              </tr>
              <tr>
              <td>
                  <h4><span class="glyphicon glyphicon-star-empty"></span> 1</h4>
                </td>
                <td>
                  <h4><span class="glyphicon glyphicon-star-empty"></span> Carlos Alverto Arevalo Aguillon</h4>
                </td>
                <td><h4>123</h4></td>
              </tr>
              <tr>
              <td>
                  <h4><span class="glyphicon glyphicon-star-empty"></span> 2</h4>
                </td>
                <td>
                  <h4><span class="glyphicon glyphicon-star-empty"></span> Silvia Daniela Ariza Rincon</h4>
                </td>
                <td><h4>123</h4></td>
              </tr>
            </table>
          </div>
		</div>
	
	</div>
</body>
</html>