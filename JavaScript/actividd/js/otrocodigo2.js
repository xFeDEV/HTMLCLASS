function permiso_ingreso(){
    const resultado = document.getElementById("resultado_edad");
    let edad = document.getElementById("edad").value;
    if(edad>17){
        resultado.innerHTML = "Puede Ingresar";
    }else{
        resultado.innerHTML = "A dormir";
    }
}

function validar_numero(){
    const resultado = document.getElementById("resultado_numero");
    let numero = document.getElementById("numero").value;
    if(numero%2 == 0){
        if(numero > 0){
            resultado.innerHTML = "El número "+numero+" Es par positivo";
        }else{
            resultado.innerHTML = "El número "+numero+" Es par pero no es positivo";
        }
    }else{
        if(numero > 0){
            resultado.innerHTML = "El número "+numero+" No par, si es positivo";
        }else{
            resultado.innerHTML = "El número "+numero+" No es par ni positivo";
        }
    }
}

function validar_numero_v2(){
    const resultado = document.getElementById("resultado_numero");
    let numero = document.getElementById("numero").value;
    if(numero%2 == 0 && numero > 0){
        resultado.innerHTML = "El número "+numero+" Es par positivo";
    }else{
        if (numero%2 == 1 && numero > 0){
            resultado.innerHTML = "El número "+numero+" Es impar positivo";
        }
        if (numero%2 == 0 && numero < 0){
            resultado.innerHTML = "El número "+numero+" Es par negativo";
        }
        if (numero == 0){
            resultado.innerHTML = "El número "+numero+" Es cero";
        }
    }
}


function imprimir_pares(){
    const respuesta = document.getElementById("respuesta_pares");
    let par = document.getElementById("inicio").value; // string '80'
    par = parseInt(par); // convertir un string a entero  80
    
    if(par%2 == 1 || par%2 == -1){  // si par mod 2 es 1  o  si par mod 2 es -1
        par++;
    }

    if(par >= 100){
        alert("El número debe ser menor que 100");
    }else{
        let pares = '';

        for(let i = par; i<=100; i=i+2){
            if(i != 0){
                pares += '<p>'+i+'</p>';
            }
        }
        respuesta.innerHTML = pares;
    }
}




// resumen

// declarar variables 
let nombre_variable = 34;

// declarar constantes
const nombre_constante = "valor";

// declarar funciones
function nombre_funcion(){
    // todo el codigo que usted quiera
}

// llamar una función
nombre_funcion();

// condicionales
if(comparacion){
    // si la comparación es verdadera
}else{
    // si la comparación es falsa
}

// ciclo for
for(let i = 0; comparacion; i++){
    // código que resuelve el problema
}

// operadores lógicos  
// && and 
// || or 

// tomar el valor de un input y almacenar en una variable
let variable = document.getElementById("elId_del_Input").value;

// imprimir en cosola
console.log("lo que quieren imprimir");

// convertir un string a entero
let entero = parseInt('60');

// llamar una función desde un boton.
<button onclick="nombre_funcion()">Imprimir</button>

// imprimir en una caja de alerta
alert("Hola Mundo");

// insertar HTML en un elemento
let elemento = document.getElementById("el_id");
elemento.innerHTML = elHTML;