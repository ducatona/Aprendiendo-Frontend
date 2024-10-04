
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

