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


			public function set_calificaciones($idJurado, $idGrupo) {
				$this->_sql = "INSERT INTO `calificaciones` (`jurados_cc_jurado`, `grupos_ubicacion_grupo`, `calificacion_1`, `calificacion_2`, `calificacion_3`, `calificacion_4`) VALUES ('".$idJurado."', '".$idGrupo."', '".$this->_Calificacion_1."', '".$this->_Calificacion_2."', '".$this->_Calificacion_3."', '".$this->_Calificacion_4."')";
				$this->set_query();
			}

			public function validar_Calificacion() {
				
			}
				
			/*public function get_grupo(){				
				$this->sql = "UPDATE `grupos` SET `estado_grupo` = 'calificado' WHERE `grupos`.`id_grupo` = '".$this->_Grupo."'";
				$this->set_query();
				
			}

			public function get_infoParticipante($id_grupo){
				$this->sql="SELECT `cc_participante`,`nombres_participante`,`apellidos_participante`,`programa_participante`,`semestre_participante` FROM `participantes` WHERE `grupos_id_grupo` = '".$id_grupo."'";
				$infoParticipante = $this->get_query();
				if ($infoParticipante == "vacio") {
					echo "<div class='row'><div class='col-sm-12 table-responsive'>";
						echo "<table class='table table-hover table-bordered'>";
							for ($i = 0; $i < count($infoParticipante) ; $i++) { 
							echo "<tr>";							
									for ($x = 1; $x < 5 ; $x++) { 
										echo "<td>".$infoParticipante[$i][$x]."</td>";
									}
							echo "<tr>";
							}
						echo "</table>";
					echo "</div></div>";
						
				}
				
			}

			public function get_infoGrupo($id_grupo){
				$this->sql="SELECT `id_grupo`,`nombre_grupo`,`modalidad_grupo`,`tema_grupo`,`genero_grupo` FROM `grupos` WHERE `id_grupo`= '".$id_grupo."'";
				$infoGrupo = $this->get_query();
					if ($infoGrupo == "vacio") {
						echo "<div class='row'><div class='col-sm-12 table-responsive'>";
							echo "<table class='table table-hover table-bordered'>";
								for ($i = 0; $i < count($infoGrupo) ; $i++) { 
								echo "<tr>";							
										for ($x = 1; $x < 5 ; $x++) { 
											echo "<td>".$infoGrupo[$i][$x]."</td>";
										}
								echo "<tr>";
								}
							echo "</table>";
						echo "</div></div>";
					
					}*/
	}
?>