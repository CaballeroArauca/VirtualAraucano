<?php
		
		require_once('../../nucleo/claseDB.php');

		class Grupo extends mySql{

			private $_Ubicacion;
			private $_Nombre;
			private $_Modalida;
			private $_Tema;
			private $_Genero;
			private $_Estado;


		public function set_Ubicacion($Ubicacion) {
			$this->_Ubicacion = $Ubicacion;	
		}

		Public function get_Ubicacion() {
				return $this->_Ubicacion;
		}

		public function set_Nombre($Nombre) {
			$this->_Nombre = $Nombre;	
		}

		Public function get_Nombre() {
				return $this->_Nombre;
		}

		public function set_Madalida($Madalida) {
			$this->_Madalida = $Madalida;	
		}

		Public function get_Madalida() {
				return $this->_Madalida;
		}

		public function set_Tema($Tema) {
			$this->_Tema = $Tema;	
		}

		Public function get_Tema() {
				return $this->_Tema;
		}

		public function set_Genero($Genero) {
			$this->_Genero = $Genero;	
		}

		Public function get_Genero() {
				return $this->_Genero;
		}

		public function set_Estado($Estado) {
			$this->_Estado = $Estado;	
		}

		Public function get_Estado() {
				return $this->_Estado;
		}

		public function get_grupos(){
			$this->_sql="SELECT `id_grupo`, `ubicacion_grupo`, `nombre_grupo`, `modalidad_grupo` FROM `grupos` WHERE `estado_grupo` IS NULL OR length(`estado_grupo`) = 0";
			$row = $this->get_query();
			return $row;
		}
	}
?>