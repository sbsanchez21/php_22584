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
        //importa ConexcionDB para luego utilizarlo
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Usuario.php");
        $conexionDB=new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();
        //ejecuta el sql y el resultado de todos los usuarios se guarda en $result
        //en la variable $result tengo todo el resultado de la consulta
        $result=$conexionDB->ejecutar("SELECT * FROM usuarios");

        //recorro uno por uno las filas de la consulta y la coloco en la var $usuario
        while ($usuario=$result->fetch_assoc()) {
            //$usuario=[id=1,usuario='prueba@gmail.com',clave='909090']
            //$usuario=[id=2,usuario='mail@gmail.com',clave='808080']
            //$usuario=[id=6,usuario='jjuarez@gmail.com',clave='111']

            //convertimos las filas en un objeto Usuario por que trabajamos en POO
            //$usuObj=new Usuario(1,'prueba@gmail.com','909090');
            //$usuObj=new Usuario(2,'mail@gmail.com','808080');
            //$usuObj=new Usuario(6,'jjuarez@gmail.com','111');
            $usuObj=new Usuario($usuario["idusuario"],$usuario["usuario"],$usuario["clave"]);

            
            $listUsu[]=$usuObj;
        }

        return $listUsu;
    }

    /**
     * Inserta un usuario utilizando los parámetroes $user y $pass
     * Si inserto devuevle true, si no devuevle false
     */
    function addUsuario($user, $pass) {
        require_once("../dataBase/ConexionDB.php");
        $con=new ConexionDB("localhost","root","","cacproyecto");
        $con->conectar();

        //todo: validar si ya existe el nombre de usuario
        $existeUsu=$this->existeUsuario($user);

        if ($existeUsu) {
            //todo: mensaje error
            echo "Existe usuario";
        } else {
            $con->ejecutar("INSERT INTO usuarios (usuario, clave) VALUES ('$user','$pass')");

          return $con->cantFilas()==1;
        }

    }

    /**
     * Si el nombre de usu existe devuelve true, si no false
     */
    function existeUsuario($user) {
        require_once("../dataBase/ConexionDB.php");
        $con=new ConexionDB("localhost","root","","cacproyecto");
        $con->conectar();

        $con->ejecutar("SELECT * FROM usuarios WHERE usuario='$user' ");


        return $con->cantFilas()>=1;
    }

    function updUsuario($idUsuario, $usuario, $clave){
        require_once("../dataBase/ConexionDB.php");
        $con=new ConexionDB("localhost","root","","cacproyecto");
        $con->conectar();

        $con->ejecutar("UPDATE usuarios SET usuario='$usuario', clave=$clave WHERE idusuario=$idUsuario ");

        return $con->cantFilas()==1;
    }
}

?>