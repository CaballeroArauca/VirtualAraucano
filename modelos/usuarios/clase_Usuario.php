<?php

	require_once('../../nucleo/claseDB.php');

	class Usuarios extends mySql{

		private $_Cedula;
		private $_Nombre;
		private $_Apellido;
		private $_Rol;
		private $_Password;

		public function set_Cedula($Cedula) {
			$this->_Cedula = $Cedula;
		}

		Public function get_Cedula() {
			return $this->_Cedula;
		}

		Public function set_Nombre($Nombre) {
			$this->_Nombre = $Nombre;
		}

		public function get_Nombre () {
			return $this->_Nombre;
		}

		public function set_Apellido($Apellido) {
			$this->_Apellido = $Apellido;	
		}

		Public function get_Apellido() {
				return $this->_Apellido;
		}

		public function set_Rol($Rol) {
			$this->_Rol = $Rol;
		}

		Public function get_Rol() {
			return $this->_Rol;
		}

		public function set_Password($Password) {
			$this->_Password = $Password;
		}

		Public function get_Password() {
			return $this->_Password;
		}

		public function validar_Usuario() {
			$this->_sql = "SELECT `cc_jurado`, `nombres_jurado`, `apellidos_jurado`, `rol_usuario` FROM `usuarios` WHERE `cc_jurado` = '".$this->_Cedula."' AND `pass_usuario` = '".$this->_Password."'";
			$row = $this->get_query();
			if ($row == "vacio") {
				echo "error";
			}else{
				$this->set_Cedula($row[0][0]);
				$this->set_Nombre($row[0][1]);
				$this->set_Apellido($row[0][2]);
				$this->set_Rol($row[0][3]);
				$this->get_Usuario();
			}
		}

		private function get_Usuario() {
			session_start();
			$_SESSION['cedula'] = $this->_Cedula;
			$_SESSION['nombre'] = $this->_Nombre;
			$_SESSION['apellido'] = $this->_Apellido;
			$_SESSION['rol'] = $this->_Rol;
			header('Location:../../sitiosWeb/html/index.html');
		}

		public function salir(){
			session_start();
			session_destroy();
			header('Location:../../sitiosWeb/html/login.html');
		}
	}
?>