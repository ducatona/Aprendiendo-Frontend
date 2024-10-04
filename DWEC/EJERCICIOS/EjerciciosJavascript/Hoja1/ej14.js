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





    }
















}


function calcularMedia(alumnos) {
    let totalNotas = 0;
    let totalModulos = 0;

    for (const alumno of alumnos) {


        for (let i = 0; i < alumno.asignaturas.length; i++) {

            totalNotas += alumno.asignaturas[i].nota; //acede a las notas de las asignaturas y las suma
            totalModulos += 1; // cuenta los modulos que tiene el las asignatura

        }

        let media = totalNotas / totalModulos;

        return media;


    }


    function alumnoPromociona(alumnos) {

        pendiente = [];



        for (const alumno of alumnos) {

            for (let i = 0; i < alumno.asignaturas.length; i++) {

                let aprobados = true;
                let nota = alumno.asignaturas[i].nota;

                if (nota < 5) {
                    aprobados = false;
                }
            }

        }



    }


}


}







