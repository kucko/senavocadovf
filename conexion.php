<?php
    class conexion{
        const user='validadorinfo_iot';
        const pass='123Asd123@123';
        const db='validadorinfo_estacioniot';
        const servidor='localhost';

        public function conectardb(){
            $conectar = new mysqli(self::servidor, self::user, self::pass, self::db);
            if($conectar->connect_error){
                die("Error en la conexion".$conectar->connect_error);
            }
            return $conectar;
        }
    }
?>