
/**
 * 
 * 6-Crea una función que dibuje en un alert la figura geométrica indicada por parámetro. Donde 
el primer parámetro será la función que genera el polígono y el segundo parámetro el número 
que indica el tamaño del polígono.
Deberás definir un menú que solicite el polígono a representar: cuadrado hueco, triangulo, 
rombo. Y después solicitar el tamaño al usuario. Incluye una opción de terminar.
Añade el código auxiliar necesario para probar la aplicación.

 */

function dibujarFigura() {

    let opcion = parseInt(prompt("Elige la figura que deseas dibujar:\n1. Rectángulo\n2. Triángulo\n3. Rombo\n0. Adios"));

    if (opcion === 0) {
        alert("Adios");
        return;
    }

    let tamano = parseInt(prompt("Introduce el tamaño de la figura:"));

    let funcion;


    switch (opcion) {
        case 1:
            funcion = dibujarRectangulo;
            break;
        case 2:
            funcion = dibujarTriangulo;
            break;
        case 3:
            funcion = dibujarRombo;
            break;
        default:
            alert("Opción no válida");
            return;  // Salir si la opción no es válida
    }


    mostrarPoligono(funcion, tamano);
}


function mostrarPoligono(funcion, tamano) {
    let resultado = funcion(tamano);

    let figuraTexto = '';
    for (let i = 0; i < resultado.length; i++) {
        figuraTexto += resultado[i] + '\n';
    }

    alert(figuraTexto);
}
dibujarFigura();