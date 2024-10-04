/**
 * 13-Juego mates
Crea un programa que genere dos números aleatorios entre 1 y 10, y un operador aritmético.
Se ofrecerá al usuario los valores para que calcule el resultado, y el programa le dirá si el
resultado es correcto o incorrecto.
Las preguntas, respuesta del usuario y si ha acertado o fallado se almacenarán ordenadamente
en un array.
Se preguntas se realizarán en lotes de 4, tras lo cual se consultará al usuario si desea continuar.
Cuando el usuario no desee seguir jugando se mostrará un resumen de las preguntas (número,
pregunta y acierto) así como el total de preguntas acertadas y el total de falladas.
Añade el código auxiliar necesario para probar la aplicación
 */


function juegoMates() {
    let preguntas = [];
    let respuestas = [];
    let aciertos = [];
    let seguir = true;
    let lotes = 4;
    let totalAciertos = 0;
    let totalFallos = 0;

    while (seguir) {
        // Bucle para hacer un lote de 4 preguntas
        for (let j = 0; j < lotes; j++) {
            let num1 = Math.floor(Math.random() * 10) + 1;
            let num2 = Math.floor(Math.random() * 10) + 1;
            let operadores = ['+', '-', '*', '/'];
            let indiceOperador = Math.floor(Math.random() * 4);
            let operador = operadores[indiceOperador];
            let resultadoCorrecto;

            // Calcula el resultado correcto según el operador
            if (operador === '+') {
                resultadoCorrecto = num1 + num2;
            } else if (operador === '-') {
                resultadoCorrecto = num1 - num2;
            } else if (operador === '*') {
                resultadoCorrecto = num1 * num2;
            } else if (operador === '/') {
                resultadoCorrecto = num1 / num2;
            }

            // Guarda la pregunta en el array de preguntas
            preguntas[preguntas.length] = num1 + " " + operador + " " + num2;

            // Pide al usuario que ingrese la respuesta
            let respuestaUsuario = parseFloat(prompt("¿Cuánto es " + num1 + " " + operador + " " + num2 + "?"));

            // Guarda la respuesta del usuario
            respuestas[respuestas.length] = respuestaUsuario;

            // Verifica si la respuesta es correcta
            if (respuestaUsuario === resultadoCorrecto) {
                aciertos[aciertos.length] = true;
                totalAciertos++;
            } else {
                aciertos[aciertos.length] = false;
                totalFallos++;
            }
        }

        // Después de cada lote de 4 preguntas, preguntar si el usuario quiere seguir jugando
        seguir = confirm("¿Quieres seguir jugando?");
    }

    // Muestra el resumen final
    alert("Resumen final");
    for (let i = 0; i < preguntas.length; i++) {
        alert("Pregunta " + (i + 1) + ": " + preguntas[i] + " | Respuesta: " + respuestas[i] + " | Acierto: " + (aciertos[i] ? 'Sí' : 'No'));
    }

    alert("Total aciertos: " + totalAciertos);
    alert("Total fallos: " + totalFallos);
}

juegoMates();
3

