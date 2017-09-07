<!DOCTYPE html>
<html lang="en">
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
     <?php
      require_once('../../modelos/participantes/claseParticipante.php');
      $lista = new Participante();
      $turnoActual = $lista->participante_actual();
      $rowLista = $lista->get_Lista($turnoActual);
      echo "<table class='table table-hover'>";
        echo "<tr>";
          echo "<th><h4><b>Participantes</b><h4></th>";
        echo "</tr>";
        for ($i=0; $i < count($rowLista); $i++){
          echo "<tr>";
            echo "<td><h4>".$rowLista[$i][0]." ".$rowLista[$i][1]."</h4></td>";
          echo "</tr>";
        }
      echo "</table>";
    ?>  

  <script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.js"></script>
  </body>
</html>