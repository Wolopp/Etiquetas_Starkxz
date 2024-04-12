<?php 

require "Model/ConexionBd.php";
class login
{
    private $db;

    public function __construct()
    {
      
        $this->db = new ConexionBd();
    }

    public function login($Nombre,$Contraseña)
    {
        $this->db->Conectar();
        $Co = $this->db->conexion->prepare("Select * from usuarios where Nombre ='".$Nombre."' and Contraseña ='".$Contraseña."'");
        $Co->execute();
        if($Co->fetch(PDO::FETCH_OBJ))
        {
            return true;
        }
        else
        {
            return false;
        }
        
        $this->db->Desconectar();

    }


}

?>