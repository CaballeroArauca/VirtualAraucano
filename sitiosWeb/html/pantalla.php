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

      $turno = new Participante();
      $rowTurno = $turno->participante_actual();
      var_dump($rowTurno);
    ?>

  <script src="../bootstrap/js/jquery-3.1.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.js"></script>
  </body>
</html>