<?php
		
		require_once('../../nucleo/claseDB.php');

		class Resultados extends mySql{

		
		public function get_ResulCanto(){
			$this->_sql="SELECT `nombres_participante`,`apellidos_participante`,`total` FROM `participantes` WHERE `modalidad_grupo` = 'Canto' ORDER BY `total` DESC";
			$row = $this->get_query();
			return $row;

		}

		public function get_ResulDeclama(){
			$this->_sql="SELECT `nombres_participante`,`apellidos_participante`,`total` FROM `participantes` WHERE `modalidad_grupo` = 'Declamacion' ORDER BY `total` DESC";
			$row2 = $this->get_query();
			return $row2;
		}

		
	}
?>