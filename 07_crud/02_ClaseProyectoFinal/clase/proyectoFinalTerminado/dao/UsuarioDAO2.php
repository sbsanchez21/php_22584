<?php 
class UsuarioDAO2 {

    /**
     * Verifica que exista el user y pass en
     * la tabla Usuarios de la DB.
     * Si existe devuelve true, si no false
     */
    public function validarUserYPass($user,$pass) {
        require_once("../dataBase/ConexionDB.php");

        //construimos la conexión
        $conexionDB=new ConexionDB("localhost","root","","cacproyecto");
        //nos conectamos a la db|
        $conexionDB->conectar();
        $conexionDB->ejecutar("SELECT * FROM usuarios WHERE usuario='$user' AND clave='$pass'");
        
        // $esValido=$conexionDB->cantFilas()==1;
        // if ($esValido) {
        //     return true;
        // } else {
        //     return false;
        // }
        //si encontro el user y pass devuelve cantFilas==1, sino cantFilas==0
        return $conexionDB->cantFilas()==1;
    }

    /**
     * Busca todo los usuarios de la tabla Usuarios
     * y devuelve un array con Objetos Usuarios
     */
    public function listarUsuarios() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");
        $conexionDB=new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();
        $result=$conexionDB->ejecutar("SELECT * FROM usuarios");

        while ($usuario=$result->fetch_assoc()) {
            $usuObj=new Usuario($usuario["idusuario"],$usuario["usuario"],$usuario["clave"]);

            $listUsu[]=$usuObj;
        }

        return $listUsu;
    }
}

?>