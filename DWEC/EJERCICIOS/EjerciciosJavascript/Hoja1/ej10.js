/**
 * 10-Crea una función que reciba una cadena de texto y que cuente el número de apariciones de 
cada carácter. Debe devolver un objeto de tipo clave-valor con el resultado.
Añade el código auxiliar necesario para probar la aplicación
 * 
 */

function contarCaracter(texto) {
    const contador = {};

    for (let i = 0; i < texto.length; i++) {
        const caracter = texto[i]; // Obtenemos el carácter actual

        // Verificamos si el carácter ya está en el objeto contador
        if (contador[caracter]) { 
            contador[caracter]++;  // Incrementamos la cuenta
        } else {
            contador[caracter] = 1; // Si no está, lo inicializamos a 1
        }
    }
    return contador; // Devolvemos el objeto
}

// Código auxiliar para probar la función
let entrada = prompt("Introduce texto");
let conteo = contarCaracter(entrada);

// Usar console.log para mostrar el objeto de manera legible
console.log("El conteo es:", conteo);

