<?php 

//Atributos
Class Usuario
{
    private $id;
    private $Nombre;
    private $Contraseña;

    //Contructor de la clase
    public function __construct($id, $nombre, $contraseña) {
        $this->id = $id;
        $this->Nombre = $nombre;
        $this->Contraseña = $contraseña;
    }

    //Geterrs y Setters

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    public function getContraseña()
    {
        return $this->Contraseña;
    }
    
    public function SetContraseña($contraseña)
    {
        $this->Contraseña = $contraseña;
    }

    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
        

    }

}





?>