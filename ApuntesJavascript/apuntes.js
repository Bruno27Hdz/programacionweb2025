
function CalcularCirculo(radio) {
    const area = 3.14 * radio * radio;
}



// RECTANGULO, EJERCICIO 2

let ancho = parseInt(prompt['¿cuanto mide el ancho?']);
let largo = parseInt(prompt['¿cuanto mide el largo?']);

function calcularAreaRectangulo(ancho, largo) {
    return ancho * largo;
}

function calcularPerimetroRectangulo(ancho, largo) {
    return 2 * (ancho * largo);
}

alert("el perimetro del rectangulo es: ", calcularPerimetroRectangulo(ancho, largo));
alert("El area del rectangulo es: ", calcularAreaRectangulo(ancho, largo));