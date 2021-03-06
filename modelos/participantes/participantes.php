<?php
	require_once('claseParticipante.php');


	//Variables
	$_Peticion = $_GET['peticion'];

	switch ($_Peticion) {

		case 'get_Lista':
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
		break;

		case 'get_Img':
			$Img = new Participante();
			$turnoActual = $Img->participante_actual();
			echo "<img class='img-responsive' src='../img/participantes/".$turnoActual.".PNG'>";
		break;

		case 'get_Anterior':
			$anterior = new Participante();
			$turnoActual = $anterior->participante_actual();
			$turnoAnterior = $turnoActual - 1;
			if ($turnoAnterior > 0) {
				$total = 0;
				$rowAnterior = $anterior->get_TurnoAnterior($turnoAnterior);
				for ($i=0; $i < 2; $i++) { 
					for ($x=2; $x < 6; $x++) { 
						$suma = $total + $rowAnterior[$i][$x];
						$total = $suma; 
					}
				}
				$total = $total/2;
				$idParti = $rowAnterior[0][1];
				
	            echo "<h3>".$rowAnterior[0][0]."</h3>";
	          	echo "<div class='puntos'>";
	            	echo "<h3>Puntos</h3>";
	           		echo "<h1><b>".round($total, 2, PHP_ROUND_HALF_UP)."</b></h1>";
	          	echo "</div><br>";
	          	$anterior->set_Total($total,$idParti);
			}
			break;
		
	}
?>