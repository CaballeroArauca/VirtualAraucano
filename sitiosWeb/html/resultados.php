<!DOCTYPE html>
<html>
<head>
	<title>resultados</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/Mycss3.css">
	<link rel="stylesheet" type="text/css" href="../css/animacion.css">
</head>
<body>
<div class="container ganadores">
	<p align="center"> <img  src="../img/ganadores.png"></p>
</div>
	<div class="container espacio">

		<div class="col-xs-6">
      <p align="center"> <img  src="../img/canto.png"></p>

      <?php
        require_once('../../modelos/resultados/claseResultados.php');
        $resultado = new Resultados();
          $rowcanto = $resultado->get_ResulCanto();
          $rowdeclama = $resultado->get_ResulDeclama();
         
          if ($rowcanto == "vacio") {
            echo "Todavia no se han calificado participantes ";
          }else{

           echo "<div class='participantes'>"; 
            echo "<table class='table table-hover'>";
             echo "<tr>"; 
                echo "<th><h4><b>Nombre</b></h4></th>";
                echo "<th><h4><b>Apellido</b></h4></th>";
                echo "<th><h4><b>Puntuacion</b></h4></th>";

              echo "</tr>";
              for ($i=0; $i <2 ; $i++) { 
                 echo "<tr>";
                    echo "<td>";
                      echo "<h4><span class='glyphicon glyphicon-star-empty'></span> ".$rowcanto[$i][0]."</h4>";
                    echo "</td>";

                    echo "<td>";
                      echo "<h4><span class='glyphicon glyphicon-star-empty'></span> ".$rowcanto[$i][1]."</h4>";
                    echo "</td>";   

                     echo "<td><h4 name='puntaje'>".$rowcanto[$i][2]." </h4> </td>";
                echo "</tr>";
              }
             
            echo "</table>";
          echo "</div>";

          }
          
    ?>  

			 
		</div>

      <div class="col-xs-6">
      <p align="center"> <img  src="../img/declamacion.png"></p>
       <div class="participantes">
       <?php
       if ($rowdeclama == "vacio") {
            echo "Todavia no se han calificado participantes ";
          }else{
              echo "<table class='table table-hover'>";
                echo "<tr>";
                  echo "<th><h4><b>Nombre</b></h4></th>";
                  echo "<th><h4><b>Apellido</b></h4></th>";
                  echo "<th><h4><b>Puntuacion</b></h4></th>";
                echo "</tr>";
                for ($x=0; $x <2 ; $x++) { 
                  echo "<tr>";
                    echo "<td>";
                       echo "<h4><span class='glyphicon glyphicon-star-empty'></span> ".$rowdeclama[$x][0]."</h4>";
                    echo "</td>";
                    echo "<td>";
                       echo "<h4><span class='glyphicon glyphicon-star-empty'></span> ".$rowdeclama[$x][1]."</h4>";
                    echo "</td>";
                  
                    echo "<td><h4 name='puntaje'>".$rowdeclama[$x][2]."</h4> </td>";
                  echo "</tr>";
                }
                
             echo "</table>";
          }
       ?>
            
          </div>
    </div>
	
	</div>
</body>
</html>