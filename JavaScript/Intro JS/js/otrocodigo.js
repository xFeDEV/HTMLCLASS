function permiso_ingreso(){
    const resultado = document.getElementById("resultado_edad");
    let edad = document.getElementById("edad").value;
    if(edad>17){
        resultado.innerHTML = "Puede ingresar";
    }else{
        resultado.innerHTML = "A dormir";
    }
}
function validar_numero(){
    const resultado_numero = document.getElementById("resultado_numero");
    let numero = document.getElementById("numero").value;0
    if(numero%2 == 0){
        if(numero >0){
            resultado_numero.innerHTML = "Par y positivo";
        }else{
            resultado_numero.innerHTML = "Par y negativo";
        }
    }else if(numero > 0){
        resultado_numero.innerHTML = "No par y positivo";
    }else{
        resultado_numero.innerHTML = "No par y negativo";
    }
}

function imprimir_pares(){
    const resultado_pares = document.getElementById("respuesta_pares");
    let par = document.getElementById("inicio").value;
    for(let i = par ; i <= 100 ; i=i+2){
        
    }

}
