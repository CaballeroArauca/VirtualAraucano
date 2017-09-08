<?php
		
	require_once('../../nucleo/claseDB.php');

	class Calificacion extends mySql{

		private $_Calificacion_1;
		private $_Calificacion_2;
		private $_Calificacion_3;
		private $_Calificacion_4;


		public function set_Calificacion_1($Calificacion_1) {
			$this->_Calificacion_1 = $Calificacion_1;	
		}

		Public function get_Calificacion_1() {
				return $this->_Calificacion_1;
		}
		public function set_Calificacion_2($Calificacion_2) {
			$this->_Calificacion_2 = $Calificacion_2;	
		}

		Public function get_Calificacion_2() {
				return $this->_Calificacion_2;
		}
		public function set_Calificacion_3($Calificacion_3) {
			$this->_Calificacion_3 = $Calificacion_3;	
		}

		Public function get_Calificacion_3() {
				return $this->_Calificacion_3;
		}
		public function set_Calificacion_4($Calificacion_4) {
			$this->_Calificacion_4 = $Calificacion_4;	
		}

		Public function get_Calificacion_4() {
				return $this->_Calificacion_4;
		}


		public function set_calificaciones($idJurado, $idParticipante) {
			$this->_sql = "INSERT INTO `calificaciones` (`jurados_cc_jurado`, `participantes_id_participante`, `calificacion_1`, `calificacion_2`, `calificacion_3`, `calificacion_4`) VALUES ('".$idJurado."', '".$idParticipante."', '".$this->_Calificacion_1."', '".$this->_Calificacion_2."', '".$this->_Calificacion_3."', '".$this->_Calificacion_4."')";
			$this->set_query();
			header("Location: ../../sitiosWeb/html/calificacionExito.html");
		}
	}
				
?>