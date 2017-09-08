<?php
		
	require_once('../../nucleo/claseDB.php');

	class Resultados extends mySql{

		
		public function get_Resultados() {

			for ($i=1; $i < 21 ; $i++) { 

				$this->_sql1 = "SELECT `nombres_participante`,`apellidos_participante`,AVG(Toltal1) AS Total2 FROM `participantes` INNER JOIN (SELECT (`calificacion_1`+`calificacion_2`+`calificacion_3`+`calificacion_4`) AS Toltal1,`participantes_id_participante`AS participante FROM `calificaciones` WHERE `participantes_id_participante` = ".$i.") AS Tota WHERE `id_participante` = participante";
				$resultado = $this->get_query();
			}
			return $resultado;
			
		}

		public function get_ConsultaDeclama() {	
			$this->_sql = "SELECT AVG(Toltal1) AS Total2 FROM `participantes` INNER JOIN (SELECT (`calificacion_1`+`calificacion_2`+`calificacion_3`+`calificacion_4`) AS Toltal1,`participantes_id_participante`AS participante FROM `calificaciones`INNER JOIN `participantes` WHERE `id_participante`=`participantes_id_participante` AND`turno_grupo` = 2) AS Tota WHERE `id_participante` = participante AND `modalidad_grupo` = 'Declamación'";
				$row = $this->get_query();				
				/*if ($i != 1) {
					for ($x=1; $x <= 2 ; $x++) { 
						if ($TotalesPuntos[$x] < $TotalesPuntos[$x+1]) {
							$aux = $TotalesPuntos[$x] ;
							$TotalesPuntos[$x] = $TotalesPuntos[$x+1];
							$TotalesPuntos[$x+1] = $aux;
						}						
					}
				}*/
									
		 
			
		}
		/*public function get_ConsultaCanto() {
			$TotalesPuntosC= array();
			for ($i=1; $i < 14 ; $i++) { 

				$this->_sql = "SELECT AVG(Toltal1) AS Total2 FROM `participantes` INNER JOIN (SELECT (`calificacion_1`+`calificacion_2`+`calificacion_3`+`calificacion_4`) AS Toltal1,`participantes_id_participante`AS participante FROM `calificaciones`INNER JOIN `participantes` WHERE `id_participante`=`participantes_id_participante` AND`turno_grupo` = ".$i.") AS Tota WHERE `id_participante` = participante AND `modalidad_grupo` = 'Canto'";
				$TotalesPuntosC[$i] = $this->get_query();
				for ($x=0; $x <14 ; $x++) { 
					if ($TotalesPuntosC[$x] < $TotalesPuntosC[$i]) {
						$aux=$TotalesPuntosC[$x] ;
						$TotalesPuntosC[$x] =$TotalesPuntosC[$i];
						$TotalesPuntosC[$i]= $aux;
					}					
				}						
				
			}

			return $TotalesPuntosC[$i];	
			
		}*/
	}
				
?>