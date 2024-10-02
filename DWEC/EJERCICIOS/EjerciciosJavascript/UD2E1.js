/**
  ejercicio 1:crea u programa en el que crees 4 variables:2 cadenas y 2 numeros ,con los siguientes valores:tu nombre,tu apellido,edad y año de nacimiento
-muestra un alert las variables introducidas con formato clave valor en donde los valores cadena aparezcan envueltos entre comillas dobles y los valores numericos entre comillas simples
-muestra en un alert tu nombre y apellidos separados por un salto de linea
-muestra en un alert la suma de as variables edad y año de nacimiento
-muestra en un alert la suma de todas las variables */



// let nombre = "Adrian";
// let apellido = "Peña";
// let edad = 21;
// let nacimiento = 2003;


// alert("Hola, me llamo " + nombre + ' ' + apellido + 'tengo' + edad + " años y mi año de nacimiento es el " + nacimiento);

// alert(nombre + "\n" + apellido);

// alert(edad + nacimiento);

// alert(nombre + apellido + edad + nacimiento);



/**
 * 2-Realiza un programa que solicite números al usuario hasta que introduzca un 0. Y que 
muestre los valores: máximo, mínimo, suma, media y total de números introducidos.
 */

// let numero = 0;
// let suma = 0;
// let valorMax = null;
// let valorMin = null;
// let totalNumeros = 0;
// let media = 0;

// do {
//     numero = parseFloat(prompt('Introduce un numero'));

//     if (numero !== 0) {

//         if (valorMax === null || numero > valorMax) {
//             valorMax = numero;
//         }

//         if (valorMin === null || numero < valorMin) {
//             valorMin = numero;
//         }


//         suma += numero;


//         totalNumeros++;
//     }

// } while (numero !== 0);


// media = suma / totalNumeros;
// console.log("La suma es " + suma + "La media es: " + media + "El valor máximo es: " + valorMax + "El valor minimo es: " + valorMin);

// //impresos
// console.log("La media es "+ media);
// console.log("La suma es "+ suma);
// console.log("El valor maximo es: " + valorMax);
// console.log("El valor minimo es: "+ valorMin);



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


/**
 * 
 * 
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



/**
 * 6-Crea una función que dibuje en un alert la figura geométrica indicada por parámetro. Donde 
el primer parámetro será la función que genera el polígono y el segundo parámetro el número 
que indica el tamaño del polígono.
 * 
 */


function mostrarPoligono(figura, tamano) {

    let resultado = figura(tamano);


    let figuraTexto = '';
    for (let i = 0; i < resultado.length; i++) {
        figuraTexto += resultado[i] + '\n';
    }


    alert(figuraTexto);
}


// mostrarPoligono(dibujarTriangulo, 3);



/**
 * 7-Crea una función que reciba un número e imprima la tabla de multiplicar.
Crea una función que solicite dos números entre 0 y 10, y que imprima las tablas de multiplicar
entre los números indicados. Las tablas aparecerán desde el número más pequeño al mayor
(aquí hay validaciones).
Añade el código auxiliar necesario para probar la aplicación.
 * 
 */



function tablaMultiplicar(n) {

    for (let i = 0; i < 11; i++) {

        console.log(n * i);

    }









}


// function tablaMultiplicar2() {

//     let numero1 = parseInt(prompt("Introduce un numero en el rango de 0 a 10"));
//     let numero2 = parseInt(prompt("Introduce el segundo numero en el rango de 0 a 10"));

//     //condiciones
//     (isNaN(numero1) || isNaN(numero2) || numero1 < 0 || numero1 > 10 || numero2 < 0 || numero2 > 10) ? console.log("Los numeros deben estar entre 0 y 10") :

//         (function () {

//             let menor, mayor;


//             (numero1 > numero2) ? (mayor = numero1, menor = numero2) : (menor = numero1, mayor = numero2);


//             for (let i = menor; i <= mayor; i++) {
//                 console.log(`Tabla del ${i}`);
//                 for (let j = 0; j < 10; j++) {
//                     console.log(`${i} x ${j}= ${i * j}`);

//                 }
//                 console.log(' ')
//             }


//         })();
// }

// tablaMultiplicar2();





/**
 * 
 * 8-Crea una función que reciba un número y calcule su factorial, la función devolverá una
cadena con el desarrollo del factorial. Por ejemplo, para una entrada de 4 devolverá la cadena
“4x3x2x1=24”.
Añade el código auxiliar necesario para probar la aplicación. El script solicitará números al
usuario hasta que no desee continuar.
 */


// function factorialNumero(n) {

//     let cadena = '';
//     let resultado = 1;
//     for (let i = n; i > 0; i--) {
//         resultado *= i;
//         cadena += i + (i > 1 ? "X" : "");



//     }
//     cadena += "=" + resultado;
//     return cadena;
// }




// let resultado5 = factorialNumero(8);
// console.log(resultado5);




/**
 * 9-Crea una función que reciba un número variable de parámetros y que los agrupe por tipo.
Después por cada tipo se mostrará el tipo y la colección de parámetros de ese tipo incluyendo
la posición original entre los parámetros.
Añade el código auxiliar necesario para probar la aplicación.
 */


// function agrupacionTipo(...parametros) {
//     const tipos = [];

//     for (let i = 0; i < parametros.length; i++) {

//         let tipo = typeof parametros[i];

//         (!tipos[tipo]) ? ();

//     }





// }





/**
 * 
 * 12-Juego acertar número.
Calcula un numero aleatorio entre 1 y 100, este número permanecerá secreto. Pide al usuario
un numero en rango, el programa le dirá si es mayor o menor que el número secreto. Si el
usuario acierta el número secreto gana. El usuario dispondrá de 5 intentos para acertar el
número secreto, tras lo cual, el programa dirá que ha perdido y le mostrará el número secreto.
Añade el código auxiliar necesario para probar la aplicación
 * 
 * 
 * 
 */


let numSecreto = Math.floor(Math.random() * 100) + 1;
let intentos = 0;



while (intentos < 5) {


    let respuesta = parseInt(prompt("Adivina el numero entre 1 y 100"));

    if (respuesta === numSecreto) {
        alert("Adivinaste el número");
        break;
    } else {
        intentos++;
        if (respuesta > numSecreto) {
            alert("El numero es mas pequeño");
        } else {
            alert("El numero es mas grande");
        }

    }

    if (intentos === 5) {
       alert("Game Over");
    }


}

