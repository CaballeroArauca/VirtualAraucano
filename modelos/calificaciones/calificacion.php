<?php
	
	require_once('claseCalificacion.php');

	session_start();

	$idJurado = $_SESSION["cedula"];
	$idGrupo = $_POST["idGrupo"];
	$_Calificacion_1 = $_POST["Calificacion_1"] * 0.25;
	$_Calificacion_2 = $_POST["Calificacion_2"] * 0.25;
	$_Calificacion_3 = $_POST["Calificacion_3"] * 0.25;
	$_Calificacion_4 = $_POST["Calificacion_4"] * 0.25;

	$calificaciones = new Calificacion();

	$calificaciones->set_Calificacion_1($_Calificacion_1);
	$calificaciones->set_Calificacion_2($_Calificacion_2);
	$calificaciones->set_Calificacion_3($_Calificacion_3);
	$calificaciones->set_Calificacion_4($_Calificacion_4);
	$calificaciones->set_calificaciones($idJurado, $idGrupo);
	//header("Location: ../../sitiosWeb/html/calificacionExito.php);