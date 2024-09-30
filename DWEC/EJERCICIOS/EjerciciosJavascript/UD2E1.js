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


function dibujarCuadrado(n) {

    let rectangulo = [];

    rectangulo.push('*'.repeat(n))

    for (let i = 0; i < n - 2; i++) {
        rectangulo.push('*' + ' '.repeat(n - 2) + '*');
    }


    if (n > 1) {
        rectangulo.push('*'.repeat(n));
    }


    return rectangulo;


}




function pruebaRectangulo(n) {
    let rectangulo = dibujarCuadrado(n);

    rectangulo.forEach(element => {
        console.log(element);

    });




}


pruebaRectangulo(10);




/**
 * 
 * 4- Crea una función reciba un número y que dibuje un triángulo de altura el tamaño del
número indicado. El valor devuelto será un array con cada una de las cadenas que forman el
rectángulo.
Añade el código auxiliar necesario para probar la aplicación.

*/

function dibujarTriangulo(n) {

    let triangulo = [];

    for (let i = 0; i < n; i++) {



        let espacios = ' '.repeat(n - i - 1);
        let asteriscos = '*'.repeat(2 * i + 1);
        triangulo.push(espacios + asteriscos);


    }
    return triangulo;
}






function probarTriangulo(n) {

    let triangulo = dibujarTriangulo(n);

    triangulo.forEach(linea => {
        console.log(linea);
    }
    );



}
probarTriangulo(5);

/**
 * 
 * 5- Crea una función reciba un número y que dibuje un rombo de diagonal del tamaño del
número indicado. El valor devuelto será un array con cada una de las cadenas que forman el
rombo.
Añade el código auxiliar necesario para probar la aplicación.
 */




function dibujarRombo(n) {

    let rombo = [];


    for (let i = 0; i < n; i++) {



        let espacios = ' '.repeat(n - i - 1);
        let asteriscos = '*'.repeat(2 * i + 1);
        rombo.push(espacios + asteriscos);






    }


    for (let i = n-2; i  >= 0; i--) {



        let espacios = ' '.repeat(n - i - 1);
        let asteriscos = '*'.repeat(2 * i + 1);
        rombo.push(espacios + asteriscos);


    }


    return rombo;


}

function probarRombo(n) {
    let rombo = dibujarRombo(n);
    rombo.forEach(linea => {
        console.log(linea); 
    });
}


probarRombo(5);