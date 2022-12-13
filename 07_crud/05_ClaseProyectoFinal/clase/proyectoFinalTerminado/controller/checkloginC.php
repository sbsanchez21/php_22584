<?php 
$usu=$_POST["inputEmail"];
$pass=$_POST["inputPassword"];

require_once("../dao/UsuarioDAOC.php");

$usuarioDAO = new UsuarioDAOC();
$loginValido = $usuarioDAO->validarUsuYPass($usu, $pass);

if ($loginValido) {
    header("Location: ../view/inicio.html");
    exit;
} else {
    header("Location: ../view/loginError.html");
    exit;
}






?>