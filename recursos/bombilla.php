<?php
    class bombilla {
        private bool $encendida;

        public function _construct() {
             $this->encendida = false;
        }
    public function getEncendida(): bool {
        return $this->encendida;
    }
    public function encender(): void {
        $this->encendida = true;
        echo "La bombilla está ahora encendida.<br>";
    }
     public function apagar(): void {
        $this->encendida = false;
        echo "La bombilla está ahora apagada.<br>";
    }
}
?>