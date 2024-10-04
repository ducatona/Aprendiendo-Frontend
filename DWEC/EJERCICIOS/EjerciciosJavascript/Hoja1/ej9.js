
/**
  * 9-Crea una función que reciba un número variable de parámetros y que los agrupe por tipo.
// Después por cada tipo se mostrará el tipo y la colección de parámetros de ese tipo incluyendo
// la posición original entre los parámetros.
// Añade el código auxiliar necesario para probar la aplicación.
  */

function agruparTipos(...parametros) {
  let tipos = {};

  for (let i = 0; i < parametros.length; i++) {
    // Convertir el valor a su tipo correcto
    let valor = parametros[i];

    // Convertir a número si es un valor numérico válido
    if (!isNaN(valor) && valor.trim() !== '') {
      valor = Number(valor); // Convierte a número
    } else if (valor.toLowerCase() === 'true' || valor.toLowerCase() === 'false') {
      valor = (valor.toLowerCase() === 'true'); // Convierte a booleano
    }

    let tipo = typeof valor;

    // Agrupar por tipo
    if (!tipos[tipo]) {
      tipos[tipo] = [];
    }

    // Almacenar el valor y su posición
    tipos[tipo][tipos[tipo].length] = { valor: valor, posicion: i };
  }

  // Mostrar los resultados
  for (let tipo in tipos) {
    console.log(`Tipo: ${tipo}`);
    console.log(`Colección:`, tipos[tipo]);
  }
}

// Inicialización del array de parámetros
let parametros = [];

// Bucle para solicitar la entrada del usuario
while (true) {
  let entrada = prompt("Introduce lo que quieras (0 para terminar):");

  // Condición para salir del bucle
  if (entrada === '0') {
    break; // Salir del bucle si el usuario ingresa '0'
  }

  // Agregar la entrada al array de parámetros
  parametros[parametros.length] = entrada; // Añadir la entrada al array
}

// Llamada a la función con los parámetros ingresados
agruparTipos(...parametros);
