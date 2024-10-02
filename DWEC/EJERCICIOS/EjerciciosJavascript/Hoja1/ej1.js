/**
  ejercicio 1:crea u programa en el que crees 4 variables:2 cadenas y 2 numeros ,con los siguientes valores:tu nombre,tu apellido,edad y año de nacimiento
-muestra un alert las variables introducidas con formato clave valor en donde los valores cadena aparezcan envueltos entre comillas dobles y los valores numericos entre comillas simples
-muestra en un alert tu nombre y apellidos separados por un salto de linea
-muestra en un alert la suma de as variables edad y año de nacimiento
-muestra en un alert la suma de todas las variables */



 let nombre = "Adrian";
 let apellido = "Peña";
 let edad = 21;
 let nacimiento = 2003;


 alert("Hola, me llamo " + nombre + ' ' + apellido + 'tengo' + edad + " años y mi año de nacimiento es el " + nacimiento);

 alert(nombre + "\n" + apellido);

 alert(edad + nacimiento);

alert(nombre + apellido + edad + nacimiento);