/**
  ejercicio 1:crea u programa en el que crees 4 variables:2 cadenas y 2 numeros ,con los siguientes valores:tu nombre,tu apellido,edad y año de nacimiento
-muestra un alert las variables introducidas con formato clave valor en donde los valores cadena aparezcan envueltos entre comillas dobles y los valores numericos entre comillas simples
-muestra en un alert tu nombre y apellidos separados por un salto de linea
-muestra en un alert la suma de as variables edad y año de nacimiento
-muestra en un alert la suma de todas las variables */



let nombre = "Adrian";
let apellido = "Peña";
let edad = 21;
let nacimiento = 2003;


alert("Hola, me llamo " + nombre + ' ' + apellido + 'tengo' + edad + " años y mi año de nacimiento es el " + nacimiento);

alert(nombre + "\n" + apellido);

alert(edad + nacimiento);

alert(nombre + apellido + edad + nacimiento);



/**
 * 2-Realiza un programa que solicite números al usuario hasta que introduzca un 0. Y que 
muestre los valores: máximo, mínimo, suma, media y total de números introducidos.
 */

let numero = 0;
let suma = 0;
let valorMax = null;
let valorMin = null;
let totalNumeros = 0;
let media = 0;

do {



    numero = parseFloat(prompt('Introduce un numero'));

    if (valorMax < numero) {
        numero = valorMax
    }

    if (valorMin > numero) {
        numero = valorMin
    }

    if (numero !== 0) {
        totalNumeros++;

    }


    suma += numero;

} while (numero !== 0);


media = suma / totalNumeros;
console.log("La suma es " + suma + "La media es: " + media + "El valor máximo es: " + valorMax + "El valor minimo es: " + valorMin);

//impresos
console.log("La media es "+ media);
console.log("La suma es "+ suma);
console.log("El valor maximo es: " + valorMax);
console.log("El valor minimo es: "+ valorMin);

