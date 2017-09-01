<?php
	
	require_once('claseCalificaciones.php');

	session_start();

	$id_jurado = $_SESSION['id'];
	$grupo = $_POST["nombre_grupo"];
	$_Calificacion_1 = $_POST["Calificacion_1"] * 0.25;
	$_Calificacion_2 = $_POST["Calificacion_2"] * 0.25;
	$_Calificacion_3 = $_POST["Calificacion_3"] * 0.25;
	$_Calificacion_4 = $_POST["Calificacion_4"] * 0.25;
	$suma = $_Calificacion_1 + $_Calificacion_2 + $_Calificacion_3 + $_Calificacion_4;
	$puntaje = round( $suma, 2, PHP_ROUND_HALF_UP);
	$calificaciones = new Calificaciones();

	$calificaciones->set_Calificacion_1($_Calificacion_1);
	$calificaciones->set_Calificacion_2($_Calificacion_2);
	$calificaciones->set_Calificacion_3($_Calificacion_3);
	$calificaciones->set_Calificacion_4($_Calificacion_4);
	$calificaciones->get_infoParticipante($grupo);
	$calificaciones->get_infoGrupo($grupo);
	$calificaciones->set_calificaciones($grupo,$id_jurado);
	header("Location: ../../sitiosWeb/html/calificacionExito.php?modalida=".$modalidad);
