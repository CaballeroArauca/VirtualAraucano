<?php
		
		require_once('../../nucleo/claseDB.php');

		class Participante extends mySql{

			private $_Nombres;
			private $_Apellidos;
			private $_Telefono;
			private $_Programa;
			private $_Semestre;


		public function set_Nombres($Nombres) {
			$this->_Nombres = $Nombres;	
		}

		Public function get_Nombres() {
				return $this->_Nombres;
		}

		public function set_Apellidos($Apellidos) {
			$this->_Apellidos = $Apellidos;	
		}

		Public function get_Apellidos() {
				return $this->_Apellidos;
		}

		public function set_Telefono($Telefono) {
			$this->_Telefono = $Telefono;	
		}

		Public function get_Telefono() {
				return $this->_Telefono;
		}

		public function set_Programa($Programa) {
			$this->_Programa = $Programa;	
		}

		Public function get_Programa() {
				return $this->_Programa;
		}

		public function set_Semestre($Semestre) {
			$this->_Semestre = $Semestre;	
		}

		Public function get_Semestre() {
				return $this->_Semestre;
		}

		public function get_Participantes($idGrupo){
<<<<<<< HEAD
			$this->_sql="SELECT `cc_participante`,`nombres_participante`,`apellidos_participante`,`programa_participante`,`semestre_participante` FROM `participantes` WHERE `grupos_id_grupo` = '".$id_grupo."'";
=======
			$this->_sql="SELECT `nombres_participante`, `apellidos_participante` FROM `participantes` WHERE `grupos_id_grupo` = ".$idGrupo."";
>>>>>>> 4f2d98f6758e34c59e219c4f9a9b5aa09ebf0c38
			$row = $this->get_query();
			return $row;
		}
	}
?>