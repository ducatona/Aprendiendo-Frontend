/**
 * 
 * 4- Crea una función reciba un número y que dibuje un triángulo de altura el tamaño del
número indicado. El valor devuelto será un array con cada una de las cadenas que forman el
rectángulo.
Añade el código auxiliar necesario para probar la aplicación.

 */
function dibujarTriangulo(n) {
    let resultado = [];

    for (let i = 0; i < n; i++) {
        let fila = '';

        //espacios
        for (let j = 0; j < n - i - 1; j++) {
            fila += ' ';
        }

        // Asteriscos
        for (let k = 0; k < (2 * i + 1); k++) {
            fila += '*';
        }

        resultado[i] = fila;
    }
    return resultado;

}

let prueba = dibujarTriangulo(5);
console.log(prueba);
