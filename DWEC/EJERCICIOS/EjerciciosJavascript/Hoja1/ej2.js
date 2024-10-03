

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

    if (numero !== 0) {

        if (valorMax === null || numero > valorMax) {
            valorMax = numero;
       }

        if (valorMin === null || numero < valorMin) {
            valorMin = numero;       }


       suma += numero;


        totalNumeros++;
    }

 } while (numero !== 0);


 media = suma / totalNumeros;
 console.log("La suma es " + suma + "La media es: " + media + "El valor máximo es: " + valorMax + "El valor minimo es: " + valorMin);


 console.log("La media es "+ media);
 console.log("La suma es "+ suma);
 console.log("El valor maximo es: " + valorMax);
 console.log("El valor minimo es: "+ valorMin);

