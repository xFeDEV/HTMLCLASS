// Fundamentos JavaScript

// Declarar variables con diferentes tipos de datos
let nombre = "Juan"; // String
let edad = 25; // Número
let esEstudiante = true; // Booleano
let valorNulo = null; // Nulo
let valorIndefinido; // Indefinido (por defecto es undefined)

// Operadores aritméticos
let suma = 5 + 3;
let resta = 10 - 4;
let multiplicacion = 7 * 6;
let division = 20 / 4;
let modulo = 15 % 4;

// Operadores de comparación
let esMayor = edad > 18; // true
let esIgual = (nombre === "Juan"); // true



// Estructuras de Control

// Condicionales
let numero = 10;

if (numero % 2 === 0) {
    console.log("El número es par");
} else {
    console.log("El número es impar");
}

// Condicionales reducidas
let unNumero = 5;
if (unNumero > 10) {
    console.log("Mayor que 10");
} else {
    console.log("Menor o igual a 10");
}

const mensaje = unNumero > 10 ? "Mayor que 10" : "Menor o igual a 10";
console.log(mensaje);


// Bucles
// Bucle 'for'
for (let i = 0; i < 5; i++) {
    console.log("Iteración con for: ", i);
}

// Bucle 'while'
let contador = 0;
while (contador < 5) {
    console.log("Iteración con while: ", contador);
    contador++;
}

// Bucle 'do...while'
contador = 0;
do {
    console.log("Iteración con do...while: ", contador);
    contador++;
} while (contador < 5);

// Funciones
// Función tradicional
function calcularFactorial(n) {
    if (n === 0 || n === 1) {
        return 1;
    } else {
        return n * calcularFactorial(n - 1);
    }
}

// Función flecha (arrow function)
const calcularFactorialFlecha = (n) => {
    if (n === 0 || n === 1) {
        return 1;
    } else {
        return n * calcularFactorialFlecha(n - 1);
    }
};

// Uso de la función
let num = 5;
let factorial = calcularFactorial(num);
console.log(`El factorial de ${num} es ${factorial}`);


// Arrays y Objetos

// Ejemplo de un array en JavaScript
let frutas = ["Manzana", "Banana", "Cereza"];

// Usando corchetes
let numeros = [1, 2, 3, 4, 5];

// Usando el constructor Array
let letras = new Array('a', 'b', 'c', 'd');

// Acceder a Elementos
console.log(frutas[0]); // "Manzana"
console.log(frutas[2]); // "Cereza"

// Modificar Elementos
frutas[1] = "Mango";
console.log(frutas); // ["Manzana", "Mango", "Cereza"]

// Recorrer un array
for (let i = 0; i < letras.length; i++) {
    console.log(letras[i]);
}

// Métodos Básicos de Arrays
// push añade uno o más elementos al final del array, y pop elimina el último elemento.

frutas.push("Naranja");
console.log(frutas); // ["Manzana", "Mango", "Cereza", "Naranja"]

frutas.pop();
console.log(frutas); // ["Manzana", "Mango", "Cereza"]

// shift elimina el primer elemento del array, y unshift añade uno o más elementos al inicio.
frutas.shift();
console.log(frutas); // ["Mango", "Cereza"]

frutas.unshift("Uva");
console.log(frutas); // ["Uva", "Mango", "Cereza"]

// length devuelve el número de elementos en el array.
console.log(frutas.length); // 3

// forEach ejecuta una función para cada elemento del array.
frutas.forEach(function(elemento) {
    console.log(elemento);
});

//  Métodos Avanzados de Arrays

// map crea un nuevo array con los resultados de aplicar una función a cada elemento del array original.
let numeritos = [1, 2, 3, 4];
let dobles = numeritos.map(function(numero) {
  return numero * 2;
});
console.log(dobles); // [2, 4, 6, 8]

// filter crea un nuevo array con todos los elementos que pasen una prueba definida por una función.
let mayoresQueDos = numeros.filter(function(numero) {
    return numero > 2;
});
console.log(mayoresQueDos); // [3, 4]



// Objetos 

// Crear un objeto
let libro = {
    titulo: "El Quijote",
    autor: "Miguel de Cervantes",
    anio: 1605,
};

// Acceder a las propiedades del objeto
console.log("Título: ", libro.titulo);
console.log("Autor: ", libro.autor);
console.log("Año de publicación: ", libro.anio);

// Usando el constructor Object
let otrolibro = new Object();
otrolibro.titulo = "Cien Años de Soledad";
otrolibro.autor = "Gabriel García Márquez";
otrolibro.anio = 1967;

// Modificar Propiedades
let persona = {
    nombre: "Juan",
    edad: 30,
    ciudad: "Pereira"
};
console.log(persona.edad); // 30

// modifica edad
persona.edad = 31;
console.log(persona.edad); // 31

// Eliminar Propiedades
delete persona.ciudad;
console.log(persona.ciudad); // undefined
console.log(persona);

// Iteración sobre Objetos
// El bucle for...in se utiliza para iterar sobre todas las propiedades enumerables de un objeto.
for (let clave in persona) {
    console.log(clave + ": " + persona[clave]);
}

// Crear un array de objetos
let libros = [
    { titulo: "1984", autor: "George Orwell", anio: 1949 },
    { titulo: "Cien Años de Soledad", autor: "Gabriel García Márquez", anio: 1967 },
    { titulo: "El Quijote", autor: "Miguel de Cervantes", anio: 1605 },
];

// Filtrar libros publicados después del año 2000
let librosRecientes = libros.filter(libro => libro.anio > 2000);

// Mostrar los libros filtrados
console.log("Libros publicados después del año 2000: ", librosRecientes);


// Métodos de Objetos
let calculadora = {
    sumar: function(a, b) {
      return a + b;
    },
    restar: function(a, b) {
      return a - b;
    }
};
console.log(calculadora.sumar(5, 3)); // 8
console.log(calculadora.restar(5, 3)); // 2

// Propiedades y Métodos Especiales
// Object.keys devuelve un array de las claves de las propiedades enumerables de un objeto.
let claves = Object.keys(persona);
console.log(claves); // ["nombre", "edad"]

// Object.values devuelve un array de los valores de las propiedades enumerables de un objeto.
let valores = Object.values(persona);
console.log(valores); // ["Juan", 31]

// Object.entries devuelve un array de pares [clave, valor] de las propiedades enumerables de un objeto.
let entradas = Object.entries(persona);
console.log(entradas); // [["nombre", "Juan"], ["edad", 31]]

// Desestructuración de Objetos
// La desestructuración permite extraer datos de objetos y asignarlos a variables.
let { nombre_p, edad_p } = persona;
console.log(nombre_p); // "Juan"
console.log(edad_p); // 31