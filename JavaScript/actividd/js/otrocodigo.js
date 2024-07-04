function calcular(){
    let precio = parseInt(document.getElementById("precio").value);
    const valor_interes = document.getElementById("precio_total");
    let interes = parseInt(document.getElementById("interes").value);
    let cuotas = parseInt(document.getElementById("cuotas").value);
    const mensual = document.getElementById("valor_mensual");
    const total_pagar = document.getElementById("total_pagar");
 
    let interes_mensual = (precio*(interes/100));
    let valor_mensual = ((precio/cuotas) + interes_mensual);
    let total_pago = valor_mensual*cuotas;

    valor_interes.innerHTML = interes_mensual;
    mensual.innerHTML = valor_mensual;
    total_pagar.innerHTML = total_pago;
}

function descuento(){
    let precio_unitario = parseInt(document.getElementById("precio_unitario").value);
    let cantidad = parseInt(document.getElementById("cantidad").value);
    let op_descuento = document.getElementById("op_descuento").value;
    const resultado = document.getElementById("resultado");
    let total = cantidad * precio_unitario;
    let descuento = 0;
    console.log(total);
    if (op_descuento == "si"){
        descuento = total*0.1
    }
    let impresion = "";
    impresion += "<h2>Descuento:  "+ descuento +"</h2> <br>";
    impresion += "<h2>Total a pagar:  "+ (total-descuento) +"</h2> <br>";
    resultado.innerHTML = impresion;
}

function numeros(){
    let casillas = parseInt(document.getElementById("casillas").value);
    const casillas_generadas = document.getElementById("casillas_generadas");
    const div_promedio = document.getElementById("promedio");
    div_promedio.innerHTML= "";
    let mostrar = "";
    if(casillas > 10 || casillas < 1){
        mostrar = "<p> NUMERO FUERA DE RANGO INTENTE DE NUEVO </p>";
    }else{
        for(let i = 1; i<=casillas; i++){
            mostrar += "<input type='number' class='m-2 col' id='"+i+"'>";
        }
        mostrar += "<button type='button' onclick='calcular_promedio("+casillas+")' class='btn btn-success mt-2'>Calcular</button>";
    }
    casillas_generadas.innerHTML = mostrar;
}

function calcular_promedio(casillas){
    const div_promedio = document.getElementById("promedio");
    let num = 0;
    let agregar = "";
    for(let i = 1; i<=casillas; i++){
        num += parseInt(document.getElementById(i).value);
    }
    agregar += "<p class='mt-2' >Total: "+num +"</p>";
    agregar += "<p>Promedio: "+(num/casillas)+"</p>";
    div_promedio.innerHTML = agregar;
}


