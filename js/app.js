// Funcion para obtener datos
function obtenerDatos() {
//Obtener Valores
    //Producto
    var selObj = document.getElementById("selectProducto");
    var selValue = selObj.options[selObj.selectedIndex].text;
    //TipoPintura
    var selPint = document.getElementById("selectPint");
    var PintValue = selPint.options[selPint.selectedIndex].text;
    //TipoEstuco
    var selEst = document.getElementById("selectEstuco");
    var EstValue = selEst.options[selEst.selectedIndex].text;
    //TipoPresentación
    var selPresent = document.getElementById("selectPresent");
    var presentValue = selPresent.options[selPresent.selectedIndex].text;
    //Color
    var selCol = document.getElementById("selectColor");
    var colValue = selCol.options[selCol.selectedIndex].text;
    //Cantidad
    var selCant = document.getElementById("selectCantidad");
    var cantValue = selCant.options[selCant.selectedIndex].text;
      
    // Primer Condicional
    if (selValue === "Pintura"){
        mostrarTipoP();
        console.log("Entro en pintura");}
    if (selValue === "Estuco") {
        mostrarTipoE();
        console.log("Entro en Estuco");}
    if (selValue === "Mastic") {
        ocultarTipos();
        mostrarB2();
        console.log("Entro en Mastic");}
        else {
        div = document.getElementById('color');
        div.style.display = 'none';
        mostrarCantidad();
    }
}

function mostrarTipoP() {
    div = document.getElementById('tipoEstuco');
    div.style.display = 'none';
    div = document.getElementById('tipoPintura');
    div.style.display = '';
}

function mostrarTipoE() {
    div = document.getElementById('tipoPintura');
    div.style.display = 'none';
    div = document.getElementById('tipoEstuco');
    div.style.display = '';
}

function ocultarTipos(){
    div = document.getElementById('tipoPintura');
    div.style.display = 'none';
    div = document.getElementById('tipoEstuco');
    div.style.display = 'none';
}

function mostrarpresentacion() {
    //Obtener valores de Pintura / Estuco
    var selPint = document.getElementById("selectPint");
    var PintValue = selPint.options[selPint.selectedIndex].text;
    var selEst = document.getElementById("selectEstuco");
    var EstValue = selEst.options[selEst.selectedIndex].text;
    //Fachada
    if(PintValue === "Fachada"){
        mostrarGC3T();
    }
    //Tipo1
    if(PintValue === "Tipo 1"){
        mostrarGC3T();
    }
    //Tipo2
    if(PintValue === "Tipo 2"){
        mostrarGC3T();
    }
    //Tipo3
    if(PintValue === "Tipo 3"){
        mostrarGC3T();
    }
    //Pro1
    if(PintValue === "Pintura Pro 1"){
        mostrarC3T();
    }
    //Pro2
    if (PintValue === "Pintura Pro 2"){
        mostrarC3T();
    }
    //Pro3
    if(PintValue === "Pintura Pro 3"){
        mostrarGC3T();
    }
    //Acrilico Grano
    if(EstValue === "Acrilico Grano"){
        mostrarC2TB25();
    }
    //Acrilico Relleno
    if (EstValue === "Acrilico Relleno"){
        mostrarC2TB25();
    }
    // Acrilico Interior  
    if (EstValue === "Acrilico Relleno") {
        mostrarGC2TB25();
    }
    //Acrilico Exterior
    if (EstValue === "Acrilico Relleno"){
        mostrarGC2TB25();
    }
    //Estuco Yeso Interior
    if (EstValue === "Yeso Interior"){
        mostrarB2();
    }

} 

//Mostrar Presentaciones
function mostrarGC3T() {
    ocultarpresentaciones();
    div = document.getElementById('presentacionGC3T');
    div.style.display = '';
}

function mostrarC3T() {
    ocultarpresentaciones();
    div = document.getElementById('presentacionC3T');
    div.style.display = '';
}

function mostrarC2TB25() {
    ocultarpresentaciones();
    div = document.getElementById('presentacionC2TB25');
    div.style.display = '';
}

function mostrarGC2TB25() {
    ocultarpresentaciones();
    div = document.getElementById('presentacionGC2TB25');
    div.style.display = '';
}

function mostrarB2() {
    ocultarpresentaciones();
    div = document.getElementById('presentacionB2');
    div.style.display = '';
}

function mostrarGC2T(){
    ocultarpresentaciones();
    div = document.getElementById('presentacionGC2T');
    div.style.display = '';
}

//Ocultar presentaciones
function ocultarpresentaciones() {
    div = document.getElementById('presentacionC3T');
    div.style.display = 'none';
    div = document.getElementById('presentacionGC3T');
    div.style.display = 'none';
    div = document.getElementById('presentacionC2TB25');
    div.style.display = 'none';
    div = document.getElementById('presentacionGC2TB25');
    div.style.display = 'none';
    div = document.getElementById('presentacionB2');
    div.style.display = 'none';
    div = document.getElementById('presentacionGC2T');
    div.style.display = 'none';
}

function mostrarColor() {
    div = document.getElementById('color');
    div.style.display = '';
}

function mostrarCantidad() {
    div = document.getElementById('unidades');
    div.style.display = '';
}
