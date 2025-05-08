<?php 


/* 
EJERCICIO!!
1. ¿que error arrojo PHP al intentar cambiar el valor de la constante?
2. ¿Que nos indica este error sobre el comportamiento de las constantes en PHP?
3. ¿En que situaciones seria util utilizar constantes en lugar de variables?
*/

    const PI = 3.14;
    const PI = 3.1416;

/*
RESPUESTAS!!
1. "Warning: Constant PI already defined in C:\xampp\htdocs\programacionweb2025\constantes.php". 
2. significa que la constante ya esta definida con un valor y nombre.
3. nos sirve en situaciones donde queramos guardar un valor que no vamos a modificar 
   con un nombre para no tener que copiarlo en todas las veces que queramos usarlo para una mejor comodidad. 
*/


?>