<?php
class Cubo {
    private bool $resuelto;
    private float $tamaño;

    public function __construct(float $tamaño) {
        $this->resuelto = true;
        $this->tamaño = $tamaño;
    }

    public function getRevuelto(): bool {
        return !$this->resuelto;
    }

    public function revolver(): void {
        $this->resuelto = false;
        echo "Ahora está todo revuelto.<br>";
    }
}
?>
