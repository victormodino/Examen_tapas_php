<?php

include 'head.php';
echo'
                                       
      <div class="postcontent">
              <form action="" method="post">
        


                   
                    <p>
                    El ciclismo es una actividad muy exigente, que requiere gran resistencia y que,
                    si se practica bien, puede consumir una gran cantidad de calorías.
                    Con la <strong>Calculadora de Ciclismo</strong> podrás averiguar muy fácilmente cuántas calorías
                    quemas cada vez que coges la bicicleta y sales a recorrer grandes distancias.
                    </p>
                    <p>
                        <h2>Cómo funciona la calculadora de ciclismo</h2>

                        El funcionamiento de la calculadora de calorías quemadas en bicicleta es sencillo. 
                         <ul>
                             <li>En primer lugar elige el ritmo o la intensidad con la que sueles practicar con tu bicicleta (¿a qué velocidad sueles ir en tus entrenamientos?).</li>
                             
                             <li>A continuación rellena algunos datos sobre tí (tu peso, en kilos o en libras) y sobre tu sesión de entrenamiento (cuántos minutos u horas has estado montado en la bici) y pulsa sobre el botón calcular.</li>
                        
                            <li>Inmediatamente obtendrás el resultado de las calorías totales consumidas durante tu sesión de entrenamiento con bicicleta.</li>
                        </ul>
                        <h2>Formula para calcular el Nº de Calorias Quemadas</h2>
                        Cada uno de los ritmos tiene asociado una <b><span style="color: red;">constante </span></b> y que son las siguientes:
                        <ul>
                            <li>Bicicleta <16 km/h --> 4</li>
                            <li>Bicicleta 16-19 km/h --> 6</li>
                            <li>Bicicleta 19-22 km/h --> 8</li>
                            <li>Bicicleta 22-25 km/h --> 10</li>
                            <li>Bicicleta 25-32 km/h --> 12</li>
                            <li>Bicicleta >32 km/h --> 16</li>
                                    
                        </ul>
                        <br> <b><span style="color: red;">Calorias=constante*peso(kg)*tiempo(horas)</span></b>
                        <br><br>Si se elige la opcion de <b><span style="color: blue;">Cuesta arriba</span></b> hay que <b><span style="color: orange;">sumar 2 calorias al minuto</span></b>
<br><br>
                        Ejemplo: <br>Para una persona de 80Kg que hace 60 minutos de  ejercicio con un ritmo entre 16-19
                        <br>
                        El numero de calorias quemadas es de: 6*80*(60/60) = <b><span style="color: red;">480</span></b>
                        <br>Si se hubiese señalado la opcion de Cuesta arriba <br>
                        <b><span style="color: red;">480+(60*2)=600 calorias</span></b>

                
               
            
        </div>
        
';
include 'pie.php';

