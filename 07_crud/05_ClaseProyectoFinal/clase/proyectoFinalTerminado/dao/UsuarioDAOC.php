<?php 
class UsuarioDAOC {

    public function validarUsuYPass($usu, $pass) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        $sql ="SELECT * FROM usuarios WHERE usuario = '$usu' AND clave='$pass'";
        $conexionDB->ejecutar($sql);

        $existeUsuYPass = $conexionDB->cantFilas() > 0;
        if ($existeUsuYPass) {
            return true;
        } else {
            return false;
        }
        
    }

    /**
     * Da alta un usuario en la tabla Usuarios.
     * 
     * @param string $usu nombre de usuario, es un email válido
     * @param string $pass una contreseña, debe tener mayusculas, minúsculas y números
     * 
     * @return true si guardo ok, false si no guardo
     */
    public function guardarUsuario($usu, $pass) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        //todo: validar usu como email valido, pass con seguridad
        $sql="INSERT INTO usuarios( `usuario`, `clave`) VALUES ('$usu','$pass')";

        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    /**
     * Obtiene todos los usuarios de la tablas
     * usuarios de la db.
     * 
     * @return Array de objetos Usuario
     *
     */
    public function listarUsuarios() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        $sql="SELECT * FROM usuarios";
        $result = $conexionDB->ejecutar($sql);

        while ($usu = $result->fetch_assoc()) {
            $usuObj = new Usuario($usu["idusuario"], $usu["usuario"], $usu["clave"]);

            $listaUsu[] = $usuObj;
        }

        return $listaUsu;    
    }

     /**
     * Obtiene todos los usuarios de la tablas
     * usuarios de la db.
     * 
     * @return Array de objetos Usuario
     *
     */
    public function listarUsuariosXNombre($nomb) {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        $sql="SELECT * FROM usuarios";
        $result = $conexionDB->ejecutar($sql);  

        while ($usu = $result->fetch_assoc()) {
            $usuObj = new Usuario($usu["idusuario"], $usu["usuario"], $usu["clave"]);

            $listaUsu[] = $usuObj;
        }

        return $listaUsu;    
    }
}

?>