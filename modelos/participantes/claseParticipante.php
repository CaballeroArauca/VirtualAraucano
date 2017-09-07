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

		public function get_Participantes($idJurado){
			$this->_sql="SELECT * FROM participantes WHERE id_participante NOT IN (SELECT participantes_id_participante FROM calificaciones WHERE jurados_cc_jurado = ".$idJurado.") GROUP BY turno_grupo LIMIT 5";
			$row = $this->get_query();
			return $row;
		}

		public function get_TurnoActual($turno){
			$this->_sql="SELECT * FROM `participantes` WHERE `turno_grupo` = ".$turno."";
			$row = $this->get_query();
			return $row;
		}

		public function get_idsParticipantes($turno){
			$this->_sql = "SELECT `id_participante` FROM `participantes` WHERE `turno_grupo` = ".$turno."";
			$row = $this->get_query();
			return $row;
		}

		public function participante_actual(){
			$participantes = $this->cantida_Participantes();
			$Jurados = $this->cantida_Jurados();
			for ($i=0; $i < count($participantes); $i++) { 
				$this->_sql = "SELECT `participantes_id_participante` FROM `calificaciones` WHERE `participantes_id_participante` = ".$participantes[$i][0]."";
				$row = $this->get_query();
				if ($row != "vacio") {
					if (count($row) != count($Jurados)) {
						$this->_sql = "SELECT `turno_grupo` FROM `participantes` WHERE `id_participante` = ".$row[0][0]."";
						$turno = $this->get_query();
						return $turno[0][0];
						exit();
					}	
				}else{
					return $participantes[$i][0];
				}
			}
		}

		public function get_Lista($turnoActual) {
			$this->_sql = "SELECT `nombres_participante`, `apellidos_participante` FROM `participantes` WHERE `turno_grupo` >= ".$turnoActual." GROUP BY turno_grupo LIMIT 3";
			$row = $this->get_query();
			return $row;
		}

		public function get_TurnoAnterior($turno){
			$this->_sql = "SELECT `nombres_participante`, `calificacion_1`, `calificacion_2`, `calificacion_3`, `calificacion_4` FROM `calificaciones`, (SELECT `id_participante`, `nombres_participante` FROM `participantes` WHERE `turno_grupo` = ".$turno." )AS tab WHERE `participantes_id_participante` = tab.`id_participante` ";
			$row = $this->get_query();
			return $row;
		}

		private function cantida_Participantes() {
			$this->_sql = "SELECT `turno_grupo` FROM `participantes` GROUP BY `turno_grupo`";
			$row = $this->get_query();
			return $row;
		}

		private function cantida_Jurados(){
			$this->_sql = "SELECT * FROM `usuarios` WHERE `rol_usuario` = 'Jurado'";
			$row = $this->get_query();
			return $row;
		}
	}
?>