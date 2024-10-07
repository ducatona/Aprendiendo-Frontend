/**
 * 16-Envuelve el ejercicio anterior en una función autoinvocada.
 */

(function() {
    let trabajadores = [];
    let contadorCodigo = 1;
    
    function generarCodigo() {
        return 'E' + (contadorCodigo < 10 ? '0' + contadorCodigo : contadorCodigo);
    }
    
    function crearTrabajador(nombre, categoria, contratacion) {
        if (categoria < 1 || categoria > 3) {
            alert("Categoría inválida. Debe ser 1, 2 o 3.");
            return;
        }
        let codigo = generarCodigo();
        trabajadores[trabajadores.length] = {
            codigo: codigo,
            nombre: nombre,
            categoria: categoria,
            contratacion: contratacion
        };
        contadorCodigo++;
        alert(`Trabajador ${nombre} creado con el código ${codigo}`);
    }
    
    function listarTrabajadores() {
        if (trabajadores.length === 0) {
            alert('No hay trabajadores registrados');
        } else {
            for (let i = 0; i < trabajadores.length; i++) {
                let trabajador = trabajadores[i];
                alert(`Código: ${trabajador.codigo}, Nombre: ${trabajador.nombre}, Categoría: ${trabajador.categoria}, Contratación: ${trabajador.contratacion}`);
            }
        }
    }
    
    function eliminarTrabajador(codigo) {
        let index = -1;
        for (let i = 0; i < trabajadores.length; i++) {
            if (trabajadores[i].codigo === codigo) {
                index = i;
                break;
            }
        }
        if (index !== -1) {
            let confirmacion = prompt(`¿Seguro que quieres borrar al trabajador con código ${codigo}? (S/N)`);
            if (confirmacion.toLowerCase() === 's') {
                for (let i = index; i < trabajadores.length - 1; i++) {
                    trabajadores[i] = trabajadores[i + 1];
                }
                trabajadores.length--;
                alert(`Trabajador con código ${codigo} eliminado`);
            } else {
                alert('Eliminación cancelada');
            }
        } else {
            alert('No se encuentra el trabajador');
        }
    }
    
    function modificarTrabajador(codigo) {
        let trabajador = null;
        for (let i = 0; i < trabajadores.length; i++) {
            if (trabajadores[i].codigo === codigo) {
                trabajador = trabajadores[i];
                break;
            }
        }
        if (trabajador) {
            let nuevoNombre = prompt('Introduce el nuevo nombre o presiona Enter para mantener el actual');
            let nuevaCategoria = prompt('Introduce la nueva categoría (1-3) o presiona Enter para mantener la actual');
            let nuevaContratacion = prompt('Introduce el nuevo año de contratación o presiona Enter para mantener el actual');
    
            trabajador.nombre = nuevoNombre || trabajador.nombre;
            trabajador.categoria = nuevaCategoria ? parseInt(nuevaCategoria) : trabajador.categoria;
            trabajador.contratacion = nuevaContratacion || trabajador.contratacion;
    
            alert('Trabajador actualizado');
        } else {
            alert('No se encuentra el trabajador');
        }
    }
    
    function calcularNomina(trabajador) {
        let salarios = { 1: 1100, 2: 1400, 3: 1900 };
        let antiguedad = new Date().getFullYear() - trabajador.contratacion;
        let nomina = salarios[trabajador.categoria] + (salarios[trabajador.categoria] * 0.04 * antiguedad);
        return nomina;
    }
    
    function listarNominas() {
        let totalNominas = 0;
        let nominasPorCategoria = { 1: 0, 2: 0, 3: 0 };
    
        for (let i = 0; i < trabajadores.length; i++) {
            let trabajador = trabajadores[i];
            let nomina = calcularNomina(trabajador);
            alert(`Código: ${trabajador.codigo}, Nombre: ${trabajador.nombre}, Nómina: ${nomina}€`);
            nominasPorCategoria[trabajador.categoria] += nomina;
            totalNominas += nomina;
        }
    
        alert('Resumen por categoría');
        for (let categoria in nominasPorCategoria) {
            let nominaRedondeada = Math.round(nominasPorCategoria[categoria] * 100) / 100;
            alert(`Categoría ${categoria}: ${nominaRedondeada}€`);
        }
        let totalRedondeado = Math.round(totalNominas * 100) / 100;
        alert(`Total de todas las nóminas: ${totalRedondeado}€`);
    }
    
    function menu() {
        let opcion;
        do {
            opcion = prompt(`Menú:
    1. Crear trabajador
    2. Listar trabajadores
    3. Borrar trabajador
    4. Modificar trabajador
    5. Calcular nóminas
    6. Salir
    Elige una opción:`);
            switch (opcion) {
                case '1':
                    let nombre = prompt('Introduce el nombre del trabajador');
                    let categoria = parseInt(prompt('Introduce la categoría del trabajador (1-3)'));
                    let contratacion = parseInt(prompt('Introduce el año de contratación'));
                    crearTrabajador(nombre, categoria, contratacion);
                    break;
                case '2':
                    listarTrabajadores();
                    break;
                case '3':
                    let codigo = prompt('Introduce el código del trabajador que quieres eliminar');
                    eliminarTrabajador(codigo);
                    break;
                case '4':
                    let codigo2 = prompt('Introduce el código del trabajador que quieres modificar');
                    modificarTrabajador(codigo2);
                    break;
                case '5':
                    listarNominas();
                    break;
                case '6':
                    alert('Adiós');
                    break;
                default:
                    alert('Opción no válida');
            }
        } while (opcion !== '6');
    }
    
    menu();
    

})();