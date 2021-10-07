<?php

    include("Basedatos.php");

    if (isset($_POST["botonEnvio"])){   
 
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        
        $foto=$_POST["foto"];

        $transaccion=new Basedatos();

        $consultaSQL="INSERT INTO usuarios(nombre, apellido, descripcion, foto) VALUES ('$nombre','$apellido','$descripcion','$foto')";

        $transaccion->agregarDatos($consultaSQL);

        header("location:formularioRegistro.php");
               
    }

?>