
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


function tablaMultiplicar2() {

    let numero1 = parseInt(prompt("Introduce un numero en el rango de 0 a 10"));
    let numero2 = parseInt(prompt("Introduce el segundo numero en el rango de 0 a 10"));

    //condiciones
    (isNaN(numero1) || isNaN(numero2) || numero1 < 0 || numero1 > 10 || numero2 < 0 || numero2 > 10) ? console.log("Los numeros deben estar entre 0 y 10") :

        (function () {

            let menor, mayor;


            (numero1 > numero2) ? (mayor = numero1, menor = numero2) : (menor = numero1, mayor = numero2);


            for (let i = menor; i <= mayor; i++) {
                console.log(`Tabla del ${i}`);
                for (let j = 0; j < 10; j++) {
                    console.log(`${i} x ${j}= ${i * j}`);

                }
                console.log(' ')
            }


        })();
}

tablaMultiplicar2();
