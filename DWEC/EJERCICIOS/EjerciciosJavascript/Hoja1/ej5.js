/**
 * 5- Crea una función reciba un número y que dibuje un rombo de diagonal del tamaño del 
número indicado. El valor devuelto será un array con cada una de las cadenas que forman el 
rombo.
Añade el código auxiliar necesario para probar la aplicación.
 */



function dibujarRombo(n) {
    let resultado = [];

    for (let i = 0; i < n; i++) {
        let fila = '';

        // Espacios para la parte superior del rombo
        for (let e = 0; e < n - i - 1; e++) {
            fila += ' ';
        }

        // Asteriscos para la parte superior del rombo
        for (let p = 0; p < (2 * i + 1); p++) {
            fila += '*';
        }

        resultado[i] = fila;
    }

    // Asteriscos para la parte inferior del rombo
    for (let i = n - 2; i >= 0; i--) {
        let fila = '';

        // Espacios para la parte inferior del rombo
        for (let e = 0; e < n - i - 1; e++) {
            fila += ' ';
        }

        // Asteriscos para la parte inferior del rombo
        for (let p = 0; p < (2 * i + 1); p++) {
            fila += '*';
        }

        resultado[n - 1 + (n - 2 - i)] = fila;
    }

    return resultado;
}

let resultado4 = dibujarRombo(6);
console.log(resultado4);


