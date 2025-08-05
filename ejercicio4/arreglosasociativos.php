<?php 
    # ACTIVIDAD 1.. ARREGLO ASOCIATIVO

        $videojuego = [ 'nombre' => 'The Legend Of Zelda',
                        'consola' => 'NES',
                        'lanzamiento' => 1986,
                        'precio' => 50];

    #ACTIVIDAD 2
        foreach ($videojuego as $clave => $valor)
                echo "$clave $valor<br>" ;

    #ACTIVIDAD3 
    $videojuego = ['stock' => 10];
    if ($videojuego['stock'] > 1) {
        echo "AUN QUEDAN ". $videojuego['stock']. " !!!";;
    }


?>