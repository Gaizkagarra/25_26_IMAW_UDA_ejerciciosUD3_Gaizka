<?php
function calculaHipotenusa(float $cateto1, float $cateto2): float {
    $hipotenusa = sqrt(($cateto1 ** 2) + ($cateto2 ** 2));
    return round($hipotenusa, 2);
}
?>