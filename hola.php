<?php
 echo "hola commit ";

/* 

#-----------------------------------------------------------------------------------------#

TIPOS DE COMENTARIOS EN PHP

1. Los comentarios de una linea se usa "//" o tambien "#"

2. Los comentarios de mas de una linea se usa "/*" 
    y terminan con: "* /"
        
#-----------------------------------------------------------------------------------------#
         
VARIABLES: Para declarar una variable en PHP se debe usar 
    la siguiente estructura: "$edad = 18;"
    
    * puede comentar por cualquier caracter menos por un numero
            EJEMPLO: "$4nombre= "Diego";"

    * Su tipo de dato es DINAMICO, es decir que puede 
      pasar de texto a entero por ejemplo. */

#-----------------------------------------------------------------------------------------#

#TIPOS DE DATOS EN PHP

    $nombre = "Bruno"; // Texto. puede con comillas simples o doble
    $edad = 18; // Enteros
    $altura = 1.72; // decimales, usando el punto en lugar de la coma (float)
    $mayorEdad = true; //Verdad o falso (boolean) 

    
#-----------------------------------------------------------------------------------------#

#EJERCICIO DE VARIABLES

    $nombreCompleto = "Juan Perez"; //Esta todo bien, no cambiaria nada.

    $edad = 25; //Todo ok ya que los enteros no llevan comillas.

    $estAtura = 1.75; //error de mayusculas en el nombre de la variable, puede dar errores, las variables son "Key Sensitive" es decir que un minimo cambio le altera.

    $numero = "10"; //Error de comillas en una variable que se supone que debe ser un entero, con comillas es un texto.

    apellido = `Fernandez`; // falta el "$" 

    pais_de_origen="Uruguay" // falta el "$", falta el ; por lo que no estamos cerrando la variable 

    $salario = $2000; // el signo de dinero es innecesario ya que al no llevar comillas no lo toma como texto. 

#-----------------------------------------------------------------------------------------#

/* CONSTANTES: son identificadores que representan un valor unico y no cambian durante la ejecucion del script
               utilizadas para simplificar un dato, me sirve mas poner "GRAVEDAD" que poner los datos cada vez que quiera utilizarlos
               AHORRAN MEMORIA  */

                define("GRAVEDAD", 9, 8); #Define el nombre y un valor a la variable
                const GRAVEDAD = 9, 8; #lo mismo pero simplificado

?>