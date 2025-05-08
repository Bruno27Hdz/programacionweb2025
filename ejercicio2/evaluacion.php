
<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
    $edad = intval($_POST["edad"]); #La edad que se vaya a ingresar
   
   if ($edad >= 11 && $edad <= 19) {
        echo "tiene edad para el descuento !!!";
   } 
   else {
        echo "no tiene edad para el descuento !!";
   }


}else {
    echo "error en la solicitud !!";
}

?>