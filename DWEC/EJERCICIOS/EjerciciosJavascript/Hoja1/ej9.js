
/**
  * 9-Crea una función que reciba un número variable de parámetros y que los agrupe por tipo.
// Después por cada tipo se mostrará el tipo y la colección de parámetros de ese tipo incluyendo
// la posición original entre los parámetros.
// Añade el código auxiliar necesario para probar la aplicación.
  */
function agruparTipos(...parametros) {
  let tipos = {}; 

  for (let i = 0; i < parametros.length; i++) {
    let valor = parametros[i];
    let tipo;

  
    switch (typeof valor) {
      case 'string':
        tipo = 'string';
        break;
      case 'number':
        tipo = 'number';
        break;
      case 'boolean':
        tipo = 'boolean';
        break;
      case 'object':
        tipo = 'object';
        break;
      case 'undefined':
        tipo = 'undefined';
        break;
      default:
        tipo = 'otro';
    }

   
    if (!tipos[tipo]) {
      tipos[tipo] = [];
    }

    
    tipos[tipo][tipos[tipo].length] = { valor: valor, posicion: i };
  }

 
  for (let tipo in tipos) {
    console.log(`Tipo: ${tipo}`);
    console.log(`Colección:`, tipos[tipo]);
  }
}

agruparTipos('Hola', 42, true, { nombre: 'Juan' }, undefined, 3.14, 'Mundo', false);
