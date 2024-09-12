<?php 
    $content = '            <h3 class="subtitle text_strong">Datos cliente</h3>
            <div class="form__inputs">
                <label for="" class="form__label text_strong">Nombre del cliente:</label>
                <input type="text" name="Nombre_del_cliente" class="form__input" required>
            </div>
            <div class="form__inputs">
                <label for="" class="form__label text_strong">Direccion:</label>
                <input type="text" name="Direccion" id="" class="form__input" required>
            </div>
            <div class="form__inputs">
                <label for="" class="form__label text_strong">Telefono:</label>
                <input type="number" name="Telefono" id="" class="form__input" required>
            </div>

            <h3 class="subtitle text_strong">Datos del alquiler</h3>

            <div class="form__inputs">
                <label for="" class="form__label text_strong">Seleccion del vehiculo</label>
                <select name="vehiculo_rentado" id="" class="selects" required>

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
                <input type="date" name="Fecha_de_solicitud" id="" required class="form__input">
            </div>

            <div class="form__inputs">
                <label for="" class="form__label text_strong">Dias que se alquilara</label>
                <select name="Dias_que_se_alquilara" id="" class="selects">

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
';
include "plantilla.html";
?>
