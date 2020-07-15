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
                            <option value="0">Haz click aqui para selecciona un producto</option>
                            <option value="Pintura">Pintura</option>
                            <option value="Estuco">Estuco</option>
                            <option value="Mastic">Mastic 3 en 1</option>
                            <option value="Pegamento">Pegamento</option>
                            <option value="Cemento">Cemento</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Tipo Pintura-->
            <div class="form-row" style="display:none;" id="tipoPintura">
                <select name="tipoP" id="selectPint" class="form-control" onchange="mostrarpresentacion();">
                    <option value="0">Selecciona un tipo de Pintura</option>
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
                    <option value="0">Selecciona un tipo de Estuco</option>
                    <option value="Acrilico Grano">Acrilico Grano</option>
                    <option value="Acrilico Relleno">Acrilico Relleno</option>
                    <option value="Acrilico Interior">Acrilico Interior</option>
                    <option value="Acrilico Exterior">Acrilico Exterior</option>
                    <option value="Yeso Interior">Yeso Interior</option>
                    <option value="Yeso Exterior">Yeso Exterior</option>
                </select>
            </div>            
            <!-- Presentacion Pinturas Galon | Cuñete | Caja 3,5 | Tambor-->
            <div class="form-row" style="display:none;" id="presentacionGC3T">
                <select name="presentacionP1" id="selectPresent" class="form-control" onchange="mostrarColor();">
                    <option value="0">Selecciona la presentacion</option>
                    <option value="Galon">Galón</option>
                    <option value="Cunete">Cuñete</option>
                    <option value="Caja 3,5 Galones">Caja 3,5 Galones</option>
                    <option value="Tambor">Tambor</option>
                </select>
            </div>
            <!-- Presentacion Pinturas Cuñete | Caja 3,5 | Tambor-->
            <div class="form-row" style="display:none;" id="presentacionC3T">
                <select name="presentacionP2" id="selectPresent" class="form-control" onchange="mostrarColor();">
                    <option value="0">Selecciona la presentacion</option>
                    <option value="Cunete">Cuñete</option>
                    <option value="Caja 3,5 Galones">Caja 3,5 Galones</option>
                    <option value="Tambor">Tambor</option>
                </select>
            </div>
            <!-- Presentacion Estucos Cuñete | Caja 20KG | Tambor | Bolsa 25kg | Bolsa 50kg -->
            <div class="form-row" style="display:none;" id="presentacionC2TB25">
                <select name="presentacionE1" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="0">Selecciona la presentacion</option>
                    <option value="Cunete">Cuñete</option>
                    <option value="Caja 20kg">Caja 20kg</option>
                    <option value="Tambor">Tambor</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                    <option value="Bolsa 50kg">Bolsa 50Kg</option>
                </select>
            </div>
            <!-- Presentacion Estucos Galon | Cuñete | Caja 20KG | Tambor | Bolsa 25kg | Bolsa 50kg -->
            <div class="form-row" style="display:none;" id="presentacionGC2TB25">
                <select name="presentacionE2" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="0">Selecciona la presentacion</option>
                    <option value="Galon">Galón</option>
                    <option value="Cunete">Cuñete</option>
                    <option value="Caja 20kg">Caja 20kg</option>
                    <option value="Tambor">Tambor</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                    <option value="Bolsa 50kg">Bolsa 50Kg</option>
                </select>
            </div>
            <!-- Presentacion Estucos Bolsa 25kg -->
            <div class="form-row" style="display:none;" id="presentacionB2">
                <select name="presentacionE3" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="0">Selecciona la presentacion</option>
                    <option value="Bolsa 25kg">Bolsa 25Kg</option>
                </select>
            </div>
            <!-- Presentacion Mastic Galon | Cuñete | Caja 20kg | Tambor -->
            <div class="form-row" style="display:none;" id="presentacionGC2T">
                <select name="presentacionM1" id="selectPresent" class="form-control" onchange="mostrarCantidad();">
                    <option value="0">Selecciona la presentacion</option>
                    <option value="Galon">Galón</option>
                    <option value="Cunete">Cuñete</option>
                    <option value="Caja 20kg">Caja 20kg</option>
                    <option value="Tambor">Tambor</option>
                </select>
            </div>            
            <!-- Color Pintura-->
            <div class="form-row" style="display:none;" id="color">
                <select name="color" id="selectColor" class="form-control" onchange="mostrarCantidad();">
                    <option value="0">Selecciona un color</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Negro">Negro</option>
                    <option value="Amarillo">Amarillo</option>
                    <option value="Azul">Azul</option>
                    <option value="Rojo">Rojo</option>
                    <option value="Verde">Verde</option>
                    <option value="Morado">Morado</option>
                </select>
            </div>
            <!-- Cantidad -->
            <div class="form-row" style="display:none;" id="unidades">
                <select name="unidades" id="selectCantidad" class="form-control">
                    <option value="0">Cuantas unidades:</option>
                    <option value="1">1 unidad</option>
                    <option value="2">2 unidades</option>
                    <option value="3">3 unidades</option>
                    <option value="4">4 unidades</option>
                    <option value="5">5 unidades</option>
                    <option value="10">10 unidades</option>
                    <option value="12">12 unidades</option>
                </select>
            </div>
        </div>
    </div>
</section>