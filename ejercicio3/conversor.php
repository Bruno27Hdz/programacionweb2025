<?php
   
if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
    $cantidadEnPesos = intval($_POST["pesos"]); #La cantidad de pesos UYU que se vaya a ingresa
    $valorMoneda = [43, 8, 40, "PEPE"];
    var_dump($valorMoneda);
     $moneda = $_POST["moneda"];
    
     $moneda = $_POST["moneda"];
     $cantidadTotalDolares = $cantidadEnPesos / $valorMoneda[2]; #divide la cantidad de pesos que ingresa por el valor actual del dolar 
     $cantidadTotalReales = $cantidadEnPesos / $valorMoneda[1]; #divide la cantidad de pesos que ingresa por el valor actual del real 
     $cantidadTotalEuros = $cantidadEnPesos / $valorMoneda[0];  #divide la cantidad de pesos que ingresa por el valor actual del euro
     

    /*
                    OTRA FORMA DE HACERLO :p

    $valorEuro = 43; #Declaro cuanto vale el euro
    $valorReal = 8; #Declaro cuanto vale el real
    $valorDolar = 40; #Declaro cuanto vale el Dolar
   
    $cantidadTotalDolares = $cantidadEnPesos / $valorDolar; 
    $cantidadTotalReales = $cantidadEnPesos / $valorReal;
    $cantidadTotalEuros = $cantidadEnPesos / $valorEuro; 
    
    */
    
    if ($moneda == "USD") {
        echo "$cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalDolares . " dolares.";
    } else if ($moneda == "EU") {
        echo "$cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalEuros . " Euros.";
    } if ($moneda == "BRL") {
        echo "$cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalReales . " Reales.";
    }



}else {
    echo "error en la solicitud !!";
}




?>