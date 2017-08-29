<?php
	
	require_once('claseCalificaciones.php');

	session_start();

	$id_jurado = $_SESSION['id'];
	$grupo = $_POST["nombre_grupo"];
	$ritmo = $_POST["ritmo"] * 0.2;
	$dificulta = $_POST["dificulta"] * 0.15;
	$zapateo = $_POST["zapateo"] * 0.2;
	$suma = $ritmo + $dificulta + $zapateo;
	$puntaje = round( $suma, 2, PHP_ROUND_HALF_UP);
	$calificaciones = new Calificaciones();

	$calificaciones->set_jurado($id_jurado);
	$calificaciones->set_nombreGrupo($grupo);
	$calificaciones->set_ritmo($ritmo);
	$calificaciones->set_dificulta($dificulta);
	$calificaciones->set_zapateo($zapateo);
	$calificaciones->set_puntaje($puntaje);
	$calificaciones->get_idValidar();
	$calificaciones->id_grupo();
	$calificaciones->set_calificaciones();
	header("Location: ../../sitiosWeb/html/calificacionExito.php?modalida=".$modalidad);
