<?php
		
		require_once('../../nucleo/claseDatos.php');

		class Calificaciones extends Datos{

			public function get_gruposCalificar(){

				$this->sql="SELECT `id_grupos`, `nombre_grupo`, `categoria_grupo`, `municipio_grupo` FROM `grupos` WHERE grupos.`modalida_grupo` = '".$this->_modalida."' && grupos.`id_grupos` NOT IN (SELECT `grupos_id_grupos` FROM `calificaiones` WHERE `jurados_id_jurados` = '".$this->_idJurado."') ORDER BY `ubicacion_grupo`";
				$gruposCalificar = $this->get_query();
				if (count($gruposCalificar) > 0) {
					$this->set_nombreGrupo($gruposCalificar[0][1]);
					$this->set_categoria($gruposCalificar[0][2]);
					$this->set_municipio($gruposCalificar[0][3]);
				}else{
					header('Location:../../sitiosWeb/html/finCalificaciones.php');
				}
			}


			public function set_calificaciones(){
				$this->sql = "INSERT INTO `calificaiones` (`id_calificaiones`, `ritmo`, `dificuta`, `zapateo`, `creatividad`, `desplazamiento`, `vestuario`, `calficacion_total`, `jurados_id_jurados`, `grupos_id_grupos`, `validacion_id_validacion`) VALUES (NULL, '".$this->_ritmo."', '".$this->_dificulta."', '".$this->_zapateo."', '".$this->_creatividad."', '".$this->_dezplazamiento."', '".$this->_vestuario."', '".$this->_puntaje."', '".$this->_jurado."', '".$this->_idGrupo."', '".$this->_idValidacion."')";
				$this->set_query();
			}

			public function get_grupo(){

				$this->sql = "SELECT `id_grupos` FROM `grupos` WHERE grupos.`modalida_grupo` = '".$this->_modalida."' && grupos.`id_grupos` NOT IN (SELECT `grupos_id_grupos` FROM `calificaiones` WHERE `jurados_id_jurados` = '".$this->_idJurado."')";
				$consulta = $this->get_query();
				if (count($consulta) > 0) {
					$this->sql = "SELECT `nombre_grupo`, `categoria_grupo`, `municipio_grupo` FROM `grupos` WHERE `nombre_grupo` = '".$this->_nombreGrupo."'";
					$grupo = $this->get_query();
					if (count($grupo) > 0) {
						$this->set_nombreGrupo($grupo[0][0]);
						$this->set_categoria($grupo[0][1]);
						$this->set_municipio($grupo[0][2]);
					}	
				}else{
					header('Location:../../sitiosWeb/html/finCalificaciones.php');
				}
			}

			public function get_idValidar(){
				$this->sql="SELECT `id_validacion` FROM `validacion` WHERE `estado_validacion` = 'abierto'";
				$id_validacion = $this->get_query();
				$this->set_idValidacion($id_validacion[0][0]);
			}
		}
?>