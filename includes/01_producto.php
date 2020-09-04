<!-- SECTION 1 -->
<h2></h2>
<section>
    <div class="inner">
        <div class="image-holder">
            <img src="images/background-1.jpg" alt="">
        </div>
        <div class="form-content">
            <div class="form-header">
                <h3>¿En que podemos apoyarte?</h3>
            </div>
            <!-- Primera Pagina -->
            <!-- Productos -->
            <div class="form-row">
                <div class="select" id="producto">
                    <div class="form-holder">
                        <select name="producto" id="selectProducto" class="form-control" onchange="obtenerDatos();">
                            <option value="">Haz click aqui para selecciona un producto</option>
                            <option value="Pintura">Pintura</option>
                            <option value="Estuco">Estuco</option>
                            <option value="Mastic">Mastic 3 en 1</option>
                            <option value="Aditivos y Boquillas">Aditivos y Boquillas</option>
                            <option value="Pegante">Pegante</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Tipo Pintura-->
            <div class="form-row" style="display:none;" id="tipoPintura">
                <select name="tipoP" id="selectPint" class="form-control" onchange="mostrarpresentacion();">
                    <option value="">Selecciona un tipo de Pintura</option>
                    <option value="Fachada">Fachada</option>
                    <option value="Tipo 1">Tipo 1</option>
                    <option value="Tipo 2">Tipo 2</option>
                    <option value="Tipo 3">Tipo 3</option>
                    <option value="Pintura Pro 1">Pintura Pro 1</option>
                    <option value="Pintura Pro 2">Pintura Pro 2</option>
                    <option value="Pintura Pro 3">Pintura Pro 3</option>
                </select>
            </div>
            <!-- Tipo Estuco -->
            <div class="form-row" style="display:none;" id="tipoEstuco">
                <select name="tipoE" id="selectEstuco" class="form-control" onchange="mostrarpresentacion();">
                    <option value="">Selecciona un tipo de Estuco</option>
                    <option value="Acrilico Grano">Acrilico Grano</option>
                    <option value="Acrilico Relleno">Acrilico Relleno</option>
                    <option value="Acrilico Interior">Acrilico Interior</option>
                    <option value="Acrilico Exterior">Acrilico Exterior</option>
                    <option value="Yeso Interior">Yeso Interior</option>
                    <option value="Yeso Exterior">Yeso Exterior</option>
                </select>
            </div>
            <!-- Tipo Aditivos Y Boquillas -->
            <div class="form-row" style="display:none;" id="tipoAditivos">
                <select name="tipoA" id="selectAdit" class="form-control" onchange="mostrarpresentacion();">
                    <option value="">Selecciona un tipo de Aditivos / Boquilla</option>
                    <option value="Pegadurmix">Pegadurmix</option>
                    <option value="Duraboquilla latex ceramica">Duraboquilla latex ceramica</option>
                    <option value="Duraboquilla latex porcelanica">Duraboquilla latex porceramica</option>
                    <option value="Blancodur boquilla y resanador">Blancodur boquilla y resanador</option>
                </select>
            </div>
            <!-- Tipo Pegantes -->
            <div class="form-row" style="display:none;" id="tipoPegantes">
                <select name="tipoPG" id="selectPegant" class="form-control" onchange="mostrarpresentacion();">
                    <option value="">Selecciona un tipo de Pegante</option>
                    <option value="Pegadur Ceramico">Pegadur Ceramico</option>
                    <option value="Pegadur Percelanato">Pegadur Percelanato</option>
                    <option value="Pegadur Latex">Pegadur Latex</option>
                    <option value="Pegadur Marmol">Pegadur Marmol</option>
                    <option value="Pegadur Piscina">Pegadur Piscina</option>
                </select>
            </div> 
            <!-- Presentacion Pinturas Galón | Cuñete | Caja 3,5 | Tambor-->
            <div class="form-row" style="display:none;" id="presentacionGC3T">
                <select name="presentacionP1" id="selectPresent" class="form-control" onchange="mostrarColor();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Galón">Galón</option>
                    <option value="Cuñete">Cuñete</option>
                    <option value="Caja 3,5 Galones">Caja 3,5 Galones</option>
                    <option value="Tambor">Tambor</option>
                </select>
            </div>
            <!-- Presentacion Pinturas Cuñete | Caja 3,5 | Tambor-->
            <div class="form-row" style="display:none;" id="presentacionC3T">
                <select name="presentacionP2" id="selectPresent" class="form-control" onchange="mostrarColor();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Cuñete">Cuñete</option>
                    <option value="Caja 3,5 Galones">Caja 3,5 Galones</option>
                    <option value="Tambor">Tambor</option>
                </select>
            </div>
            <!-- Presentacion Estucos Cuñete | Caja 20KG | Tambor | Bolsa 25kg | Bolsa 50kg -->
            <div class="form-row" style="display:none;" id="presentacionC2TB25">
                <select name="presentacionE1" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Cuñete">Cuñete</option>
                    <option value="Caja 20kg">Caja 20kg</option>
                    <option value="Tambor">Tambor</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                    <option value="Bolsa 50kg">Bolsa 50Kg</option>
                </select>
            </div>
            <!-- Presentacion Estucos Galón | Cuñete | Caja 20KG | Tambor | Bolsa 25kg | Bolsa 50kg -->
            <div class="form-row" style="display:none;" id="presentacionGC2TB25">
                <select name="presentacionE2" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Galón">Galón</option>
                    <option value="Cuñete">Cuñete</option>
                    <option value="Caja 20kg">Caja 20kg</option>
                    <option value="Tambor">Tambor</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                    <option value="Bolsa 50kg">Bolsa 50Kg</option>
                </select>
            </div>
            <!-- Presentacion Estucos Bolsa 25kg -->
            <div class="form-row" style="display:none;" id="presentacionB2">
                <select name="presentacionE3" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                </select>
            </div>
            <!-- Presentacion Mastic Galón | Cuñete | Caja 20kg | Tambor -->
            <div class="form-row" style="display:none;" id="presentacionGC2T">
                <select name="presentacionM1" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="">Selecciona la presentacion Mastic</option>
                    <option value="Galón">Galón</option>
                    <option value="Cuñete">Cuñete</option>
                    <option value="Caja 20kg">Caja 20kg</option>
                    <option value="Tambor">Tambor</option>
                </select>
            </div>
            <!-- Presentacion Aditivos Bolsa 2kg -->
            <div class="form-row" style="display:none;" id="presentacionA1">
                <select name="presentacionA1" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Bolsa 2kg">Bolsa 2Kg</option>
                </select>
            </div>
            <!-- Presentacion Pegamento Bolsa 10kg | Bolsa 25kg -->
            <div class="form-row" style="display:none;" id="presentacionPEGA1">
                <select name="presentacionPEGA1" id="selectPresent" class="form-control" onchange="mostrarColor();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Bolsa 10kg">Bolsa 10Kg</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                </select>
            </div>
            <!-- Presentacion Pegamento Bolsa 25kg -->
            <div class="form-row" style="display:none;" id="presentacionPEGA2">
                <select name="presentacionPEGA2" id="selectPresent" class="form-control" onchange="mostrarColor();">
                    <option value="">Selecciona la presentacion</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                </select>
            </div>
            <!-- Color Pintura --> 
            <div class="form-row" style="display:none;" id="color">
                <select name="color" id="selectColor" class="form-control" onchange="mostrarCantidad();">
                    <option value="">Selecciona un color</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Negro">Negro</option>
                    <option value="Amarillo">Amarillo</option>
                    <option value="Azul">Azul</option>
                    <option value="Rojo">Rojo</option>
                    <option value="Verde">Verde</option>
                    <option value="Morado">Morado</option>
                </select>
            </div>
            <!-- Color Pintura Blanco y Gris -->
            <div class="form-row" style="display:none;" id="colorBG">
                <select name="color" id="selectColor" class="form-control" onchange="mostrarCantidad();">
                    <option value="">Selecciona un color</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Gris">Gris</option>
                </select>
            </div>
            <!-- Cantidad -->
            <div class="form-row" style="display:none;" id="unidades">
                <select name="unidades" id="selectCantidad" class="form-control">
                    <option value="">Cuantas unidades:</option>
                    <option value="1">1 unidad</option>
                    <option value="2">2 unidades</option>
                    <option value="3">3 unidades</option>
                    <option value="4">4 unidades</option>
                    <option value="5">5 unidades</option>
                    <option value="6">6 unidades</option>
                    <option value="7">7 unidades</option>
                    <option value="8">8 unidades</option>
                    <option value="9">9 unidades</option>
                    <option value="10">10 unidades</option>
                    <option value="11">11 unidades</option>
                    <option value="12">12 unidades</option>
                    <option value="13">13 unidades</option>
                    <option value="14">14 unidades</option>
                    <option value="15">15 unidades</option>
                    <option value="16">16 unidades</option>
                    <option value="17">17 unidades</option>
                    <option value="18">18 unidades</option>
                    <option value="19">19 unidades</option>
                    <option value="20">20 unidades</option>
                </select>
            </div>
            <!-- Cantidadx4
            <div class="form-row" style="display:none;" id="unidadesx4">
                <select name="unidades" id="selectCantidad" class="form-control">
                    <option value="">Cuantas unidades:</option>
                    <option value="4">4 unidades</option>
                    <option value="8">8 unidades</option>
                    <option value="12">12 unidades</option>
                    <option value="16">16 unidades</option>
                    <option value="20">20 unidades</option>
                    <option value="24">24 unidades</option>
                    <option value="28">28 unidades</option>
                </select>
            </div> -->
            <!-- Cantidadx5
            <div class="form-row" style="display:none;" id="unidadesx5">
                <select name="unidades" id="selectCantidad" class="form-control">
                    <option value="">Cuantas unidades:</option>
                    <option value="5">5 unidades</option>
                    <option value="10">10 unidades</option>
                    <option value="15">15 unidades</option>
                    <option value="20">20 unidades</option>
                    <option value="25">25 unidades</option>
                    <option value="30">30 unidades</option>
                    <option value="35">35 unidades</option>
                </select>
            </div>-->
            <!-- Cantidadx15 
            <div class="form-row" style="display:none;" id="unidadesx15">
                <select name="unidades" id="selectCantidad" class="form-control">
                    <option value="">Cuantas unidades:</option>
                    <option value="15">15 unidades</option>
                    <option value="30">30 unidades</option>
                    <option value="45">45 unidades</option>
                    <option value="60">60 unidades</option>
                </select>
            </div> -->
        </div>
    </div>
</section>