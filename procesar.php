<?php
function calcularCostoAlquiler($dias)
{
    if ($dias >= 1 && $dias <= 2) return $dias * 100;
    elseif ($dias >= 3 && $dias <= 5) return $dias * 90;
    elseif ($dias >= 6 && $dias <= 10) return $dias * 75;
    else return 0; 
}

$lista = array();
$sumas = number_format(calcularCostoAlquiler($_POST['Dias_que_se_alquilara']), 2);

foreach ($_POST as $key => $value) {
    if($key == "metodo_pago") continue; 
    $lista[str_replace("_", " ", $key)] = $value;
}

$lista['SUMAS'] = $sumas;
($_POST["metodo_pago"] == "Efectivo") ? $lista['DESCUENTO'] = number_format($sumas * 0.10, 2) : $lista['DESCUENTO'] = 0;
$lista['SUB TOTAL'] = number_format($lista['SUMAS'] - $lista['DESCUENTO'], 2) ;
$lista['13% IVA'] = number_format($lista['SUB TOTAL'] * 0.13, 2);
$lista['TOTAL A PAGAR'] = number_format($lista['SUB TOTAL'] + $lista['13% IVA'], 2);

$content = '';

foreach ($lista as $clave => $valor) {
    $content .= '<div class="form__results">
    <p for="" class="form__label">'.$clave.': <span>'.$valor.'</span></p>
    </div>';
}

$content .= '<div class="form_inputs">
                <a href="index.php"><button type="button" class="button">Registrar un nuevo alquiler</button></a>
            </div>';

include "plantilla.html"
?>