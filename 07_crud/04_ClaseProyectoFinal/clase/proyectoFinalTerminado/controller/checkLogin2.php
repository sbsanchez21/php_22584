<?php 
/**
 * Recibimos x metodo post del formulario el user y pass ingresados por el usuario.
 * 
 * Nos conectamos a la DB, y verificamos que exista el user y pass,
 * si existe lo redirigimos al sistema, sino error
 */
    //recibimos los inputs del usuario
    $user=$_POST["user"] ;
    $pass=$_POST["pass"];

    //echo $user;
    //echo $pass;

    //nos conectamos a la db, verificamos si el user y pass existen en la tabla Usuario
    // dentro de la db cacproyecto
    require_once("../dao/UsuarioDAO2.php");
    $usuDAO=new UsuarioDAO2();
    $existeUserYPass=$usuDAO->validarUserYPass($user,$pass);
    if ($existeUserYPass) {
        header("Location: ../view/inicio.html");
        exit;
    } else {
        header("Location: ../view/loginError.html");
        exit;
    }
    

    

?>