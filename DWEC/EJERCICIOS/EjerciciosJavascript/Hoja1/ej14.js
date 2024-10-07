/**
 * 14-Crea un programa de gestión académica.
Teniendo en cuenta:
• El objeto JSON de tipo alumno tiene las propiedades “nombre” y “asignaturas”.
• El objeto JSON de tipo asignatura tiene las propiedades “modulo” y “nota”.
• Disponemos módulos de “DWEC”, “DIW”, “DWES” y “DAW”.
Partiendo de un array de al menos 3 alumnos debidamente inicializados.
Crea una función que reciba el array de alumnos y que para cada alumno añada las siguientes
propiedades:
• promociona, valor true si todos los módulos están aprobados, falso en caso contrario.
• media, valor medio del expediente del alumno.
Crea una función que reciba el array de alumnos modificado e imprima el listado de alumnos
que promocionan con el formato “Índice-Nombre-Media”.
Crea una función que reciba el array de alumnos modificados e imprima el listado de alumnos
que no promocionan con el formato “Índice-Nombre-Pendientes:[pendiente1, pendiente2,
etc..]”.
Añade el código auxiliar necesario para probar la aplicación.
 */



let alumnos = [

    {
        nombre: "Juan",
        asignaturas: [
            { modulo: "DWEC", nota: 7 },
            { modulo: "DIW", nota: 8 },
            { modulo: "DWES", nota: 6 },
            { modulo: "DAW", nota: 5 }
        ]
    },
    {
        nombre: "Ana",
        asignaturas: [
            { modulo: "DWEC", nota: 4 },
            { modulo: "DIW", nota: 6 },
            { modulo: "DWES", nota: 9 },
            { modulo: "DAW", nota: 5 }
        ]
    },
    {
        nombre: "Luis",
        asignaturas: [
            { modulo: "DWEC", nota: 9 },
            { modulo: "DIW", nota: 10 },
            { modulo: "DWES", nota: 8 },
            { modulo: "DAW", nota: 6 }
        ]
    }
]



function actualizarAlumnos(alumnos) {

    for (const alumno of alumnos) {

        alumno.media = calcularMedia(alumno.asignaturas);
        alumno.promociona = validarPromocion(alumno.asignaturas);

      

    }

    imprimirNoPromocionados(alumnos);
    imprimirPromocionados(alumnos);


}


function calcularMedia(asignaturas) {
    let totalNotas = 0;
    for (const asignatura of asignaturas) {

        totalNotas += asignatura.nota;
    }

    return totalNotas / asignaturas.length;




}


function validarPromocion(asignaturas) {

    for (const asignatura of asignaturas) {

        if (asignatura.nota < 5) {
            return false;
        }
    }
    return true;
}



function imprimirPromocionados(alumnos) {

    for (let i = 0; i < alumnos.length; i++) {

        if (alumnos[i].promociona) {

            alert(`${i}-${alumnos[i].nombre}-${alumnos[i].media.toFixed(2)}`);
        }


    }


}



function imprimirNoPromocionados(alumnos) {



    for (let i = 0; i < alumnos.length; i++) {
        if (!alumnos[i].promociona) {
            let pendientes = [];


            for (let j = 0; j < alumnos[i].asignaturas.length; j++) {

                if (alumnos[i].asignaturas[j].nota < 5) {

                    pendientes += alumnos[i].asignaturas[j].modulo;

                }



              
            }
           alert(`${i + 1},${alumnos[i].nombre},${pendientes}`);

        }

    }

}




actualizarAlumnos(alumnos);


