<?php
   
if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
    $cantidadEnPesos = floatval($_POST["pesos"]); #La cantidad de pesos UYU que se vaya a ingresa
    $valorDolar = 40; #Declaro cuanto vale el Dolar
    $cantidadTotalDolares = $cantidadEnPesos / $valorDolar; #divide la cantidad de pesos que ingresa por el valor actual del dolar 
    echo "Resultado de la conversion. ";
    echo "$cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalDolares . " dolares.";

}else {
    echo "error en la solicitud !!";
}




?>