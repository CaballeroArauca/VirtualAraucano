<?php

    abstract class mySql{

        //Variables con los datos de la base de datos
        private static $db_host = 'localhost';
        private static $db_user = 'root';
        private static $db_pass = '';
        private static $db_name = 'calificaciones';

        //https://www.youtube.com/watch?v=Wu79mONDsJc

        //Variables Globales
        private $_conexion;
        protected $_sql;
        

        //Funcion para conectarse a la base de datos
        private function abrir_conexion() {
            $this->_conexion = new mysqli(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);
        }

        //Funcion para desconectarse de la base de datos        
        private function cerrar_conexion() {
            $this->_conexion->close();
        }

        //Funcion para realizar consultas
        protected function set_query(){
            $this->abrir_conexion();
            if ($this->_conexion) {
                $query = $this->_conexion->query($this->_sql);
                return $query;
            }else{
                echo "Error en la conexion a la DB -> ".$this->_conexion->connect_error();
            }
            $this->cerrar_conexion();
        }

        //Funcion para obtener los resultados de las consultas
        protected function get_query() {
            $this->abrir_conexion();
            if ($this->_conexion) {
                $result = $this->_conexion->query($this->_sql);
                if ($result) { $x = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_array(MYSQLI_NUM)) {
                            for ($i=0; $i < $result->field_count; $i++) {
                                $data[$x][$i] = $row[$i];
                            }$x++;
                        } return $data;
                    }else{
                        return $result = "vacio";
                    }       
                }else{
                    return $result;
                }
            }else{
                echo "Error en la conexion a la DB -> ".$this->_conexion->connect_error();
            }
            $this->cerrar_conexion();
        }

        
    }
?>