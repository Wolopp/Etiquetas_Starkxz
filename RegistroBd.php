<?php

    /*Importamos la conexion desde ConxionBd*/
    include 'ConexionBd.php'; 


    /*Variable Nombre que va almacenar los datos del campo Nombre del formulario*/
    $Nombre = $_POST['Nombre'];
    /*Variable Contraseña que va almacenar los datos del campo Contraseña del formulario*/
    $Contraseña = $_POST['Contraseña'];



    /*Creamos una variable que se llame insert_registro el cual va a tener un insert el cual agregara al usuario
    en la base de datos*/
    $insert_registro ="INSERT INTO usuarios(Nombre, Contraseña) VALUES ('$Nombre', '$Contraseña')";


    /*Creamos la variable execute el cual ejecutara nuestro query*/
    $execut = mysqli_query($conexion, $insert_registro);



?>