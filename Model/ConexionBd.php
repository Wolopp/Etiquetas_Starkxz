<?php
/*
    $conexion = mysqli_connect("localhost", "root", "Pirma407", "bascula_starkxz");
*/

class ConexionBd
{   //atributo
    public $conexion;
     
    //Creamos el metodo Conectar
    public function Conectar()
    {
        try
        {
            //Declaramos un dsn para especificar la base de datos
            $dsn = "mysql:host=localhost;dbname=".DBA;
            $opciones = array
            (
                //Usamos PDO para acceder a ala base de datos
                PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
            );

            //Se crea el objeto conexion, con los atributos correspondientes
            $this->conexion = new PDO($dsn,UsuarioDBA,PassDBA);

            return $this->conexion;

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();

        }

    }

    //Se crea el metodo Desconectar para cerrar la conexion
    public function Desconectar()
    {
        $this->conexion = null;
    }

}
 
?>