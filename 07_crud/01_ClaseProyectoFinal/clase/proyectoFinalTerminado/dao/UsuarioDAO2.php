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
        //nos conectamos a la db
        $conexionDB->conectar();
    }

}

?>