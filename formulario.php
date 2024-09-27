<?php 

$title = 'Software para la renta de vehiculos';

$content = '
        <tr >
            <td colspan="2"><h3 class="title">Datos del cliente</h3></td>
          </tr>
          <tr>
          <td align="right"><p>Nombre del cliente:</p></td>
              <td><input type="text" name="Nombre_del_cliente"  required></td>
          </tr>
  
          <tr>
            
            <td align="right">
              <p>Direccion:</p>
  
            </td>
  
              <td><input type="text" name="Direccion"  required></td>
          </tr>
  
          <tr>
            <td align="right">
            <p>Telefono:</p>
              
              </td>
              <td><input type="number" name="Telefono"  required></td>
          </tr>
          <td colspan="2"><h3 class="title">Datos del alquiler</h3></td>
  
          
          <tr>
            <td align="right">
              <p>Seleccion del vehiculo:</p>
            </td>
            <td>
              <select name="Vehiculo_rentado"  required>
              <option value="">seleccione un vehiculo</option>
              <option value="Toyota Corolla">Toyota Corolla</option>
            </select></td>
          </tr>
  

  
          <tr>
            <td align="right">
              <p>Dias que se alquilara:</p>
            </td>
            <td>
              <select name="Dias_que_se_alquilara"  required>
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
            </td>
          </tr>
  
          <tr>
            <td align="right">
              <p>Fecha inicial:</p>
            </td>
            <td><input type="date" name="Fecha_solicitud"  required></td>
          </tr>
          
  
          <tr>
            <td align="right"><p>Metodo de pago:</p></td>
            <td>
              
              <select name="metodo_pago" required>
                <option value="Efectivo">Efectivo</option>
                <option value="Targeta">Targeta</option>
                <option value="Transferencia">Transferencia</option>
              </select>
            </td>
          </tr>
  
          <tr>
            <td class="center" colspan="2"><button type="submit" class="btn">Calcular pago</button>
            <button type="reset" class="btn">Reestablecer</button></td>
          </tr>
';
include "plantilla.html"
?>

