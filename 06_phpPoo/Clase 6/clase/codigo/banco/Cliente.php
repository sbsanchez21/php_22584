    <?php 
    require_once('Cuenta.php');

    class Cliente {
        private $id;
        private $nombre;
        private $apellido;
        private $cuenta;
        //array de cuentas

        //constructor
        function __construct($id, $nombre, $apellido, Cuenta $cuenta){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->cuenta= $cuenta;
        }

        //getters y setters
        public function setId($id){
            $this->id = $id;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function setCuenta($cuenta){
            $this->cuenta = $cuenta;
        }        

        public function getId(){
            return $this->id;
        }        
        public function getNombre(){
            return $this->nombre;
        }        
        public function getApellido(){
            return $this->apellido;
        }   
        public function getCuenta(){
            return $this->cuenta;
        }                        

        //métodos de la clase
        public function mostrarSaldo() {
            $saldo = $this->cuenta->getSaldo();
            echo "El saldo de la cuenta de $this->nombre, $this->apellido es: $saldo <br>";
        }

        public function mostrarTipoCuenta() {
            $tipo = $this->cuenta->getTipo();
            echo "El tipo de cuenta de $this->nombre, $this->apellido es: $tipo <br>";

        }

        public function depositar($pesos) {
            $this->cuenta->depositar($pesos);
        }
    }

?>    
