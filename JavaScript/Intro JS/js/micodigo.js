console.log("este es un mensaje en consola");
alert("helomoto");
/* imprimir un documento */
document.write("imprimir en el documento");
let letras = "escribe letas";
let numeros = 23;
let flotantes = 245.67;
let boleano = true;
let nulos= null;
let valorIndefinido;

const URL = "https://xxx.com"

console.log(letras);
console.log(numeros);
console.log(flotantes);
console.log(boleano);
console.log(nulos);
console.log(valorIndefinido);
console.log(URL);
const caja = document.getElementById("ejemplo");
caja.innerHTML = "<h2>"+URL+"</h2>";


let edad = 16;

if(edad > 17){
    alert("puede ingresar");
}else{
    caja.innerHTML = "<h2>Hacer chichito y a dormir </h2>";
};
