<?php


$calorias_finales=0;

if (isset($_REQUEST['btn_calcular']))
{
    $Ritmo=$_REQUEST['cmb_ritmo'];
    $Peso=$_REQUEST['txt_peso'];
    $Tiempo=$_REQUEST['txt_tiempo'];
    $Medida=$_REQUEST['rb_medida']*$Tiempo;// en minutos en el html ponemos value=1 y en horas value=60, para que cuente que son minutos todo y lo que señalemos sea el valor de minuto u hora
  

    $Pendiente=0;
    if(isset($_REQUEST['chk_cuesta']))
        $Pendiente=($Medida*2);   //pendiente * tiempo *2

                                                //aqui el tiempo ponemos el calculo de la "Medida"
        //"Calorias_finales=constante*peso(kg)*tiempo(horas)" +las calorias de la pendiente
    $calorias_finales=($Ritmo*$Peso*($Medida/60))+$Pendiente; 
    
    
    echo $calorias_finales;
}


include 'head.php';
echo'  

   
     <div class="postcontent">
      <h2>Calculadora de calorías quemadas en bicicleta   </h2>
              <form action="SolucionEjercicio.php" method="post">              
                    <p>
                    <form>
                        <table align="center" border="2">

                            <tr>
                                <td align="right">Ritmo:</td>  
                                <td colspan=2>
                                    <select id="cmb_ritmo" name="cmb_ritmo">
                                    <option value="4">Bicicleta < 16 km/h  </option>
                                    <option value="6">Bicicleta 16-19 km/h </option>
                                    <option value="8">Bicicleta 19-22 km/h </option>
                                    <option value="10">Bicicleta 22-25km/h </option>
                                    <option value="12">Bicicleta 25-32 km/h </option>
                                    <option value="16">Bicicleta > 32 km/h </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">Tu Peso :</td>
                                <td>
                                    <input type="text"   name="txt_peso" size="7" /> Kg
                                </td>
                            </tr>
                            <tr>
                                <td align="right">Tiempo de Actividad :</td>
                                <td>
                                    <input type="text"  name="txt_tiempo" size="7" />
                                    <input type="radio"  name="rb_medida"  checked="checked" value="1"/>Minutos	
                                    <input type="radio"  name="rb_medida"  value="60"/>Horas
                                    </td>
                             </tr>  
                             <tr>
                             <td>¿Pedaleas cuesta arriba? </td>
                                <td> <input type="checkbox" name="chk_cuesta"  size="7" value="2" />
                             120 calorias a mayores a la hora (2 calorias al minuto)</td>
                             </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <div align="center"><strong>
                                           
                                            <input name="btn_calcular" type="submit" id="btn_calcular" value="Calcular"/>
                                        </strong>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <fieldset>
                        <legend>Cantidad de calorias quemadas</legend>	
                        Has quemado <input type="text" id="txt_calorias" name="txt_calorias" value=" '.$calorias_finales.' " size="10" /> calorias

                    </fieldset>



                </div>


                <div style="clear: both;"></div>
            </div>
        </div>
       
';

include 'pie.php';

