<?php
	session_start();
?>

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

	<?php
    	include 'scripts/script_jumbotron.php';
    ?>

	<body>
		<div class="container">

			<div class="row">
				<?php
		    		switch ($rol) {
		    			case 'JURADO':
		    				include 'scripts/script_IndexJurado.php';
		    			break;
		    		}
		        ?>				
			</div>
	  	</div>
	  	
  	</body>
</html>