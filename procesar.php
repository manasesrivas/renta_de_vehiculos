
<?php
// Función para calcular el costo total del alquiler
function calcularCostoAlquiler($dias)
{
    if ($dias >= 1 && $dias <= 2) {
    return $dias * 100;
    } elseif ($dias >= 3 && $dias <= 5) {
    return $dias * 90;
    } elseif ($dias >= 6 && $dias <= 10) {
    return $dias * 75;
    } else {
    return 0; // Si los días están fuera del rango permitido
    }
}

// Capturar los datos del formulario


$lista = [
    'Nombre del cliente' => htmlspecialchars($_POST["nombre_cliente"]),
    'Direccion' => htmlspecialchars($_POST["direccion"]),
    'Telefono' => htmlspecialchars($_POST["telefono"]),
    'Vehiculo rentado' => htmlspecialchars($_POST["vehiculo"]),
    'Dias que se alquilara' => (int)$_POST["cantidad_dias"],
    'Fecha de solicitud' => htmlspecialchars($_POST["fecha"]),
    'SUMAS' => '',
    'DESCUENTO' => '',
    'SUB TOTAL' => '', 
    '13% IVA' => '',
    'TOTAL A PAGAR' => '' 

];
// Calcular el costo del alquiler
$lista['SUMAS'] = number_format(calcularCostoAlquiler($lista['Dias que se alquilara']), 2);

if ($_POST["metodo_pago"] == "Efectivo") {
    $lista['DESCUENTO'] = number_format($lista['SUMAS'] * 0.10, 2);
} else {
    $lista['DESCUENTO'] = 0;
}

$lista['SUB TOTAL'] = number_format($lista['SUMAS'] - $lista['DESCUENTO'], 2) ;
$lista['13% IVA'] = number_format($lista['SUB TOTAL'] * 0.13, 2);
$lista['TOTAL A PAGAR'] = number_format($lista['SUB TOTAL'] + $lista['13% IVA'], 2);

$content = '';

// concatenacion de la clave y el valor
foreach ($lista as $clave => $valor) {
    $content .= '<div class="form__results">
    <p for="" class="form__label">'.$clave.': <span>'.$valor.'</span></p>
    </div>';
}


// imprimir el cuerpo completo del HTML y concatenando la variable "content" que contiene los datos del alquiler
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de pago de vehiculo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="container">
        <div class="encabezado">
            <h2>Reporte de pago de alquiler</h2>
        </div>
        <div class="container__form">

            '.$content.'

            <div class="form_inputs">
                <a href="index.php"><button type="button" class="button">Registrar un nuevo alquiler</button></a>

            </div>

        </div>
    </section>
</body>
</html>';
?>