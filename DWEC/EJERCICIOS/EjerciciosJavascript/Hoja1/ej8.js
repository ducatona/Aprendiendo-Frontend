/**
 * 
 * 8-Crea una función que reciba un número y calcule su factorial, la función devolverá una
cadena con el desarrollo del factorial. Por ejemplo, para una entrada de 4 devolverá la cadena
“4x3x2x1=24”.
Añade el código auxiliar necesario para probar la aplicación. El script solicitará números al
usuario hasta que no desee continuar.
 */

 function factorialNumero(n) {

     let cadena = '';
     let resultado = 1;
     for (let i = n; i > 0; i--) {
         resultado *= i;
         cadena += i + (i > 1 ? "X" : "");



     }
     cadena += "=" + resultado;
     return cadena;
 }




 let resultado5 = factorialNumero(8);
 console.log(resultado5);