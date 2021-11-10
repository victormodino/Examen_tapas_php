<?php
session_start();
include 'head.php';
if(isset($_REQUEST['votar']))
{
  $codigo_tapa=$_REQUEST['codigo'];
  $_SESSION['votos'][$codigo_tapa]++;
}         
//si hemos pulsado votar, el indice aumenta en uno, porque hemos dado un voto                               
                       


//tenemos que quitar las opciones fijas, porque si se borran no deben aparecer
echo'<form action="votar_tapa.php" method="post">
            Selecciona la Tapa a la cual quieres votar
                            <select name="codigo">';
                            foreach($_SESSION['tapas']as $clave=>$vector)
                            {
                              echo'<option value="'.$clave.'">'.$vector[0]. '</option>';
                            } 
                                 
                                echo'</select>
     <br> 
     <input name="votar" type="submit"  value="Votar"/>
             
    </form>';

 include 'pie.php';

