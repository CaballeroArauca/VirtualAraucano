<?php
	
	require_once('clase_Usuario.php');

	$_Peticion = $_GET['peticion'];

	switch ($_Peticion) {

		case 'validarUsuario':

			$_Cedula = $_POST['usuario'];
			$_Password = $_POST['password'];

			$validacion = new Usuarios();

			$validacion->set_Cedula($_Cedula);
			$validacion->set_Password($_Password);
			$validacion->validar_Usuario();
		break;
	}
?>