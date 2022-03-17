<?php 
class Conexion{
    public static function getConexion(){
        $database_username = 'a83578_taller2';
        $database_password = '1234emelec';
        $dbname='db_a83578_taller2';
        $dsn = 'mysql:host=MYSQL5040.site4now.net;dbname='.$dbname;
        $conexion = null;
        try{
            $conexion = new PDO($dsn, $database_username, $database_password ); 
        }catch(Exception $e){
                echo $e;
                die("error: " . $e->getMessage());
        }
        return $conexion;
    }
}

