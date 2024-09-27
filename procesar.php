<?php 

  function x($dias){
    if($dias >= 1 && $dias <= 2) return $dias * 100;
    elseif($dias >= 3 && $dias <= 5) return $dias * 90;
    elseif($dias >= 6 && $dias <= 10) return $dias * 75;
    else return 0;
  }

  $lista = array();

  $sumas = number_format(x($_POST["Dias_que_se_alquilara"]), 2);

  foreach($_POST as $key => $value){
    if($key == "metodo_pago") continue;
    $lista[$key] = $value;
  }

  $lista['SUMAS'] = $sumas;

  ($_POST["metodo_pago"] == "Efectivo") ? $lista['DESCUENTO'] = number_format($sumas * 0.10) : $lista['DESCUENTO'] = 0;
  $lista['SUB TOTAL'] = number_format($sumas - $lista['DESCUENTO'], 2);
  $lista['13% IVA'] = number_format($lista['SUB TOTAL'] * 0.13, 2);
  $lista['TOTAL A PAGAR'] = number_format($lista['SUB TOTAL'] + $lista['13% IVA'], 2);

  $content = '';

  foreach($lista as $key => $value){
    $content .= '<tr>
          <td align="right">
          <p>'.str_replace("_", " ", $key).':</p>
            
            </td>
            <td>
            <strong><em>'.$value.'</em></strong>
            </td>
        </tr>';

        if($key=="Telefono" or $key == "Fecha_solicitud") $content .= '<tr><td>&nbsp;</td>
<td>&nbsp;</td></tr>';
  }

  $content .= '              <tr>
          <td colspan="2" class="center">
          <a href="formulario.php">
          <button class="btn" type="button">Registrar un nuevo alquiler</button>
          </a>
          </td>
        </tr>';

  $title = 'Reponte de pago de alquiler';

 include "plantilla.html"
?>
