<?php
   
if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
    $cantidadEnPesos = intval($_POST["pesos"]); #La cantidad de pesos UYU que se vaya a ingresa
    $valorEuro = 43; #Declaro cuanto vale el euro
    $valorReal = 8; #Declaro cuanto vale el real
    $valorDolar = 40; #Declaro cuanto vale el Dolar
    
    $moneda = $_POST["moneda"];
    $cantidadTotalDolares = $cantidadEnPesos / $valorDolar; #divide la cantidad de pesos que ingresa por el valor actual del dolar 
    $cantidadTotalReales = $cantidadEnPesos / $valorReal;
    $cantidadTotalEuros = $cantidadEnPesos / $valorEuro; 
    
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