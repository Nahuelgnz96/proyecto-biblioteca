<?php

    session_start();

    if(!empty($_POST["btningresar"])) {
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql=$conexion->query(" select * from usuario where usuario='$usuario' and clave='$clave' ");
            if ($datos=$sql->fetch_object()) {
                $_SESSION["id"]=$datos->id;
                $_SESSION["nombre"]=$datos->nombres;
                $_SESSION["apellido"]=$datos->apellidos;
                header("location:admin.php");
            } else {
                echo '<div class="alert alert-danger">EL USUARIO O CONTRASEÑA NO EXISTEN</div>';
            }
            
        }
        

    }


?>