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
