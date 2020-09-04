// Funcion para obtener datos
function obtenerDatos() {
//Obtener Valores
    //Producto
    var selObj = document.getElementById("selectProducto");
    var selValue = selObj.options[selObj.selectedIndex].text;

    // Primer Condicional
    //Pintura
    if(selValue === "Pintura"){
        mostrarTipoP();
    }
    //Estuco
    if(selValue === "Estuco"){
        mostrarTipoE();
    }
    //Mastic
    if(selValue === "Mastic 3 en 1"){
        ocultarpresentaciones();
        ocultarTipos();
        mostrarGC2T();
    }
    //Aditivos y Boquillas
    if(selValue === "Aditivos y Boquillas"){
        mostrarTipoA();
    }
    //Pegante
    if(selValue === "Pegante"){
        mostrarTipoPega();
    }
}

function mostrarTipoP() {
    ocultarTipos();
    div = document.getElementById('tipoPintura');
    div.style.display = '';
}

function mostrarTipoE() {
    ocultarTipos();
    div = document.getElementById('tipoEstuco');
    div.style.display = '';
}

function mostrarTipoA(){
    ocultarTipos();
    div = document.getElementById('tipoAditivos');
    div.style.display = '';
}

function mostrarTipoPega(){
    ocultarTipos();
    div = document.getElementById('tipoPegantes');
    div.style.display = '';
}

function ocultarTipos(){
    div = document.getElementById('tipoPintura');
    div.style.display = 'none';
    div = document.getElementById('tipoEstuco');
    div.style.display = 'none';
    div = document.getElementById('tipoAditivos');
    div.style.display = 'none';
    div = document.getElementById('tipoPegantes');
    div.style.display = 'none';
}

function mostrarpresentacion() {
    //Obtener valores de Pintura
    var selPint = document.getElementById("selectPint");
    var PintValue = selPint.options[selPint.selectedIndex].text;
    //Obtener valores de Estuco
    var selEst = document.getElementById("selectEstuco");
    var EstValue = selEst.options[selEst.selectedIndex].text;
    //Obtener valores de Aditivos
    var selAdit = document.getElementById("selectAdit");
    var aditValue = selAdit.options[selAdit.selectedIndex].text;
    //Obtener valores de Pegantes
    var selPega = document.getElementById("selectPegant");
    var pegaValue = selPega.options[selPega.selectedIndex].text;
    
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
    if (EstValue === "Acrilico Interior") {
        mostrarGC2TB25();
    }
    //Acrilico Exterior
    if (EstValue === "Acrilico Exterior"){
        mostrarGC2TB25();
    }
    //Estuco Yeso Interior
    if (EstValue === "Yeso Interior"){
        mostrarB2();
    }
    //Pegadur
    if (aditValue === "Pegadurmix"){
        mostrarA1();
    }
    //Duraboquilla latex ceramica
    if (aditValue === "Duraboquilla latex ceramica"){
        mostrarA1();
    }
    //Duraboquilla latex porceramica
    if (aditValue === "Duraboquilla latex porceramica"){
        mostrarA1();
    }
    //Blancodur boquilla y resanador
    if (aditValue === "Blancodur boquilla y resanador"){
        mostrarA1();
    }
    //Pegadur Ceramico
    if (pegaValue === "Pegadur Ceramico"){
        mostrarPEGA1();
    }
    //Pegadur Percelanato
    if (pegaValue === "Pegadur Percelanato"){
        mostrarPEGA2();
    }
    //Pegadur Latex
    if (pegaValue === "Pegadur Latex"){
        mostrarPEGA2();
    }
    //Pegadur Marmol
    if (pegaValue === "Pegadur Marmol"){
        mostrarPEGA2();
    }
    //Pegadur Piscina
    if (pegaValue === "Pegadur Piscina"){
        mostrarPEGA2();
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

function mostrarA1(){
    ocultarpresentaciones();
    div = document.getElementById('presentacionA1');
    div.style.display = '';
}

function mostrarPEGA1(){
    ocultarpresentaciones();
    div = document.getElementById('presentacionPEGA1');
    div.style.display = '';
}

function mostrarPEGA2(){
    ocultarpresentaciones();
    div = document.getElementById('presentacionPEGA2');
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
    div = document.getElementById('presentacionA1');
    div.style.display = 'none';
    div = document.getElementById('presentacionPEGA1');
    div.style.display = 'none';
    div = document.getElementById('presentacionPEGA2');
    div.style.display = 'none';
}

function mostrarColor() {
    //Detemrinar el tipo de Producto
    var selObj = document.getElementById("selectProducto");
    var selValue = selObj.options[selObj.selectedIndex].text;

    div = document.getElementById('colorBG');
    div.style.display = 'none';
    div = document.getElementById('color');
    div.style.display = 'none';

    if(selValue === "Pegante"){
        div = document.getElementById('colorBG');
        div.style.display = '';
    } else{
    div = document.getElementById('color');
    div.style.display = '';}
}

function mostrarCantidad() {
    div = document.getElementById('unidades');
    div.style.display = '';
}
