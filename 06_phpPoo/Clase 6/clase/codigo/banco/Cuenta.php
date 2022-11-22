    <?php 

    class Cuenta {
        private $id;
        private $tipo;
        private $saldo;

        function __construct($id, $tipo, $saldo){
            $this->id = $id;
            $this->tipo = $tipo;
            $this->saldo = $saldo;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getId(){
            return $this->id;
        }        
        public function getTipo(){
            return $this->tipo;
        }        
        public function getSaldo(){
            return $this->saldo;
        }                

        public function depositar($pesos) {
            $this->saldo += $pesos;
            echo "Se depositaron $$pesos, el saldo actual es $$this->saldo <br>";
        }

        public function extraer($pesos) {
            $this->saldo -= $pesos;
            echo "Se extrajeron $$pesos, el saldo actual es $this->saldo <br>";
        }

    }

?>    
