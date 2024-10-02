/**
 * 
 * 11- Crea una función que reciba un rango, para cada valor en el rango se informará de si el 
número es múltiplo de 3, si es múltiplo de 5 y si es número primo. Sólo mostrar información de 
los números que cumplan alguna de las condiciones.
Añade el código auxiliar necesario para probar la aplicación.
 */






function verificarRango(inicio, final) {





    //Recorremos todo el rango
    for (let i = inicio; i < final; i++) {

        if (esPrimo(i) && multiplo3(i) && multiplo5(i)) {

           
            console.log(`El número ${i} es primo, es múltiplo de 3 y es múltiplo de 5.`);
        }


        }




    }


function esPrimo(n) {
    if (n <= 1) {
        return false;
    }
    for (let i = 0; 2 < Math.sqrt(n); i++) {
        if (n % i === 0) {
            return false;
        }

    }

}

function multiplo3(n) {

    return n % 3 === 0;
}
function multiplo5(n) {
    if (n % 5 === 0) {
        return true;
    }
}
let n1 = parseInt(prompt("Introduce el primer numero para empezar el rango"));
let n2 = parseInt(prompt("Introduce el segundo numero para completar el rango"));

verificarRango(n1,n2);