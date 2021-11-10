<?php
session_start();
include 'head.php';
//echo'<pre>';
//var_dump(($_SESSION['votos']));
//echo'</pre>';
echo '<table> 
<thead>
    <th>Codigo tapa</th>
    <th>Nº votos</th>
</thead>';//creamos un foreach  de sesion votos y  que nos muestre la clave y el valor para contar los votos en una tabla
foreach($_SESSION['votos']as $clave=>$valor)
{
    echo '<tbody>';
        echo '<td>'.$clave.'</td>';
        echo '<td>'.$valor.'</td>';
    echo '<tbody>';
}

echo '</table>';                                                                                  
 
 include 'pie.php';

