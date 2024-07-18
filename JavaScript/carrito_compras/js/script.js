let productos = ['Platano', 'Aguacate', 'Cafe', 'Yuca'];
let precios = [2000, 7000, 18000, 3000];
let imagenes = ['img/platano.png', 'img/aguacate.png', 'img/cafe.png', 'img/yuca.png' ];

// Carrito de compras

let descripcion = new Array();
let valor_unitario = [];
let cantidad = [];
let total = [];

// fin carrita

let total_general = 0;


let cartas_productos = '';

productos.forEach(function (producto, ind) {
    cartas_productos += `<div class="col">
                            <div class="card">
                                <img src="`+ imagenes[ind] + `" class="card-img-top img-fluid" alt="` + producto + `">
                                <div class="card-body">
                                    <h5 class="card-title">`+ producto + `</h5>
                                    <p class="card-text">`+ precios[ind] + `</p>
                                    <button onclick="agregar_al_carrito(`+ ind + `)" class="btn btn-primary">Añadir</button>
                                </div>
                            </div>
                        </div>`;
});
document.getElementById("productos").innerHTML = cartas_productos;



function agregar_al_carrito(indice) {
    console.log("funcionando " + indice);

    let verificar = descripcion.indexOf(productos[indice]);

    if (verificar == -1) {
        descripcion.push(productos[indice]);
        valor_unitario.push(precios[indice]);
        cantidad.push(1)
        total.push(precios[indice]);
    } else {
        cantidad[verificar] += 1;
        total[verificar] += precios[indice];
    }
    console.log(descripcion);
    console.log(valor_unitario);
    console.log(cantidad);
    console.log(total);
}

function construir_carrito() {
    let filas_carrito = "";
    let total_general = 0;
    descripcion.forEach(function (e, i) {
        filas_carrito += `<tr>
                                <td>`+ e + `</td>
                                <td>`+ valor_unitario[i] + `</td>
                                <td class="text-center">`+ cantidad[i] + `</td>
                                <td>`+ total[i] + `</td>
                                <td ><button onclick="eliminar_producto(`+i+ `)" class="btn btn-danger">&#128465;</button></td>
                            </tr>`
        total_general += total[i]
    })
    document.getElementById("datos").innerHTML = filas_carrito;
    document.getElementById("total_general").innerHTML = total_general;
}

function eliminar_producto(indice){
    descripcion.splice(indice, 1);
    valor_unitario.splice(indice, 1);
    cantidad.splice(indice, 1);
    total.splice(indice, 1);
    construir_carrito();
}


