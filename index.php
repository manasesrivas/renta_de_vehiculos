<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renta de vehiculos</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="container">
        <div class="encabezado">
            <h2>Software para el alquiler de vehiculos</h2>
        </div>
        <form action="procesar.php" class="container__form" autocomplete="off" method="post">
            <h3 class="subtitle text_strong">Datos cliente</h3>
            <div class="form__inputs">
                <label for="" class="form__label text_strong">Nombre del cliente:</label>
                <input type="text" name="nombre_cliente" class="form__input" required>
            </div>
            <div class="form__inputs">
                <label for="" class="form__label text_strong">Direccion:</label>
                <input type="text" name="direccion" id="" class="form__input" required>
            </div>
            <div class="form__inputs">
                <label for="" class="form__label text_strong">Telefono:</label>
                <input type="number" name="telefono" id="" class="form__input" required>
            </div>

            <h3 class="subtitle text_strong">Datos del alquiler</h3>

            <div class="form__inputs">
                <label for="" class="form__label text_strong">Seleccion del vehiculo</label>
                <select name="vehiculo" id="" class="selects" required>

                    <option value="" selected disabled>Seleccione un vehiculo</option>
                    <option value="Toyota Corolla">Toyota Corolla</option>
                    <option value="Nissan Sentra">Nissan Sentra</option>
                    <option value="hyundai Elantra">hyundai Elantra</option>
                    <option value="Honda Civic">Honda Civic</option>
                    <option value="Mitsubishi Lancer">Mitsubishi Lancer</option>
                    
                </select>
            </div>

            <div class="form__inputs">
                <label for="" class="form__label text_strong">Fecha inicial</label>
                <input type="date" name="fecha" id="" required class="form__input">
            </div>

            <div class="form__inputs">
                <label for="" class="form__label text_strong">Dias que se alquilara</label>
                <select name="cantidad_dias" id="" class="selects">

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                </select>
            </div>

        <div class="form__inputs">
            <label for="" class="form__label text_strong">Metodo de pago</label>
            <select name="metodo_pago" id="" class="selects">

                <option value="Efectivo">Efectivo</option>
                <option value="Targeta">Targeta</option>
                <option value="Transferencia">Transferencia</option>

            </select>
        </div>

        <div class="form_inputs">
            <button type="submit" class="button">Calcular pago</button>
            <button type="reset" class="button">Reestablecer</button>
        </div>

        </form>
    </section>
</body>
</html>