let lista_productos = [];
let lista_total = [];

function guardar(){
    let addItem = document.getElementById("addItem").value;
    let addTotal = parseInt(document.getElementById("addTotal").value);
    lista_productos.push(addItem);
    lista_total.push(addTotal);
    hacerTabla();
    document.getElementById("addItem").value = "";
    document.getElementById("addTotal").value = "";
}

function hacerTabla(){
    const vista_tabla = document.getElementById("tabla");
    let tabla = "";
    for (let i = 0; i < lista_productos.length; i++) {
        tabla += "<tr>";
        tabla += "<td>"+ lista_productos[i]+"</td>";
        tabla += "<td>"+ lista_total[i]+"</td>";
        tabla += "</tr>";
    }
    vista_tabla.innerHTML = tabla;
}

function cambiar(){
    let modificar = document.getElementById("modificar").value;
    const vistaModificar = document.getElementById("vistaModificar");
    let vista = "";
    console.log(lista_productos.indexOf(modificar));
    if(lista_productos.indexOf(modificar) != -1){
        console.log("encontrado")
        vista += '<div class="col">'
        vista += '<input type="text" id="customItem" class="form-control" placeholder="Nuevo producto">'
        vista += '</div>'
        vista += '<div class="col">'
        vista += '<button onclick="actualizar()" class="btn btn-success">Agregar</button>'
        vista += '</div>'
    }else{
        alert("Producto no encontrado")
    }
    vistaModificar.innerHTML = vista;
}

function actualizar(){
    let modificar = document.getElementById("modificar").value;
    const vistaModificar = document.getElementById("vistaModificar");
    let newItem = document.getElementById("customItem").value;
    lista_productos[lista_productos.indexOf(modificar)] = newItem;
    hacerTabla();
    vistaModificar.innerHTML = "";
    document.getElementById("modificar").value = "";
}

function inventario(){
    let modificar = document.getElementById("inventario").value;
    const vistaInventario = document.getElementById("vistaInventario");
    let vista = "";
    console.log(lista_productos.indexOf(modificar));
    if(lista_productos.indexOf(modificar) != -1){
        console.log("encontrado")
        vista += '<div class="col">'
        vista += '<input type="text" id="customInventario" class="form-control" placeholder="Agrega inventario">'
        vista += '</div>'
        vista += '<div class="col">'
        vista += '<button onclick="actualizarInventario()" class="btn btn-success">Agregar</button>'
        vista += '</div>'
    }else{
        alert("Producto no encontrado")
    }
    vistaInventario.innerHTML = vista;
}

function actualizarInventario(){
    let modificar = document.getElementById("inventario").value;
    const vistaInventario = document.getElementById("vistaInventario");
    let addInventario = parseInt(document.getElementById("customInventario").value);
    lista_total[lista_productos.indexOf(modificar)] += addInventario;
    hacerTabla();
    vistaInventario.innerHTML = "";
    document.getElementById("customInventario").value = "";
}