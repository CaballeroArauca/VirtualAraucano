<?php
	
	require_once('claseCalificacion.php');
	require_once('../participantes/claseParticipante.php');

	session_start();

	$idJurado = $_SESSION["cedula"];
	$turno = $_POST["turno"];
	$_Calificacion_1 = $_POST["Calificacion_1"] * 0.25;
	$_Calificacion_2 = $_POST["Calificacion_2"] * 0.25;
	$_Calificacion_3 = $_POST["Calificacion_3"] * 0.25;
	$_Calificacion_4 = $_POST["Calificacion_4"] * 0.25;

	$calificaciones = new Calificacion();
	$participantes = new Participante();

	$calificaciones->set_Calificacion_1($_Calificacion_1);
	$calificaciones->set_Calificacion_2($_Calificacion_2);
	$calificaciones->set_Calificacion_3($_Calificacion_3);
	$calificaciones->set_Calificacion_4($_Calificacion_4);


	$rowIds = $participantes->get_idsParticipantes($turno);
	for ($i=0; $i < count($rowIds); $i++) { 
		$idParticipante = $rowIds[$i][0];
		$calificaciones->set_calificaciones($idJurado, $idParticipante);	
	} 