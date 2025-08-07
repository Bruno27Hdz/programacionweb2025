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

    #ACTIVIDAD 4 
    
        $inventario = ["Chrono Trigger" => 
                            ['consola' => 'SNES',
                            'lanzamiento' => 1995,
                            'precio' => 80.00,
                            'stock' => 5 ],
                        "Super Mario Bros" => ['consola' => 'NES',
                            'lanzamiento' => 1988,
                            'precio' => 45.00,
                            'stock' => 15 ],
                        ];
        $inventario["The Legend Of Zelda"]=['consola' => 'NES',
                            'lanzamiento' => 1986,
                            'precio' => 50];
            echo "VIDEOJUEGOS EN INVENTARIO: ".$inventario;

    #ACTIVIDAD 5
            foreach ($videojuego as $clave => $valor) {
                echo "Titulo: ". $inventario['Chrono Trigger'];
            }
        
    
    ?>