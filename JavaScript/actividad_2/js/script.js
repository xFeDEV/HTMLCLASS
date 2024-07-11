/* let descuento = true;
let mensaje = descuento == true ? "Tiene descuento": "no tiene descuento";

console.log(mensaje); */

/* let parrafo = "";
let i = 0;
while( i <= 10){
    parrafo += "<p>"+ i+"</p>"
    i++;
}
document.getElementById("respuesta").innerHTML = parrafo; */

const unValor = () => { return 3+5 };
console.log(unValor());

let frutas = ["Manzana", "Banana", "Cereza"];
/* document.getElementById("respuesta").innerHTML = frutas;
let listaFrutas = ` <ul>
                        <li>`+frutas[0] +`</li>
                        <li>`+frutas[1] +`</li>
                        <li>`+frutas[2] +`</li>
                    </ul>`;

 */

let filas = "";
frutas.forEach(function(fruta){
    filas +="<tr>";
        filas +="<td>" + fruta+"</td>";
    filas +="</tr>";
});

document.getElementById("datos").innerHTML = filas;

