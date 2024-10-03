/**
 * 3-Crea una función reciba un número y que dibuje un rectángulo hueco de lado del tamaño del
número indicado. El valor devuelto será un array con cada una de las cadenas que forman el
rectángulo.
Añade el código auxiliar necesario para probar la aplicación.
 */




function dibujarRectangulo(n) {

    let resultado = [];
    for (let f = 0; f < n; f++) {

        let fila = [];

        for (let c = 0; c < n; c++) {

            (f === 0 || f === n - 1 || c === 0 || c === n - 1) ? fila[c] = '*' : fila[c] = ' ';



        }
        resultado[f] = fila;
    }



    return resultado;

}


let resultado = dibujarRectangulo(4);
console.log(resultado);

