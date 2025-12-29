<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo Agencia.css">
    <title>Agencia de Viajes</title>
</head>

<body>
    <h1>Agencia de Viajes</h1>
    <h2>CONOCE NUESTRA OFERTA EN PAQUETES TURISTICOS 🔥 ¡Obten descuentos incomparables! ✅</h2>
    <br>
    <hr>
    <p id="oferta-dinamica">
        🎁 Oferta del Día!!! 🛫
        <?php
        function ofreceDestino() {
            $destinosOferta = ['VALPARAISO', 'CALAMA', 'RANCAGUA', 'SANTIAGO', 'PUERTO MONTT', 'ANTOFAGASTA', 'OSORNO', 'ARICA'];
            $ciudad = rand(0, count($destinosOferta) - 1);
            $cupos = rand(1, 15);
            echo "Quedan {$cupos} cupos para {$destinosOferta[$ciudad]}";
        }
        
        if (isset($_POST['oferta'])) {
            ofreceDestino();
        }
        ?>
    </p>
    <h3>
        <form method="post">
            <button class="oferta" id="oferta" type="submit" name="oferta">Pinche aquí <br>
            y descubre más promociones </button>
        </form>
    </h3>

    <hr>
    <div class="search-container">
        <form action="formulario.php" method="get">
            <label for="travel-type" class="travel">Destino:</label>
            <select id="travel-type" name="destino">
                <option value="SELECCION" selected>Seleccione el destino</option>
                <option value="CHILE">Chile</option>
                <option value="PERÚ">Perú</option>
                <option value="ARGENTINA">Argentina</option>
                <option value="CHINA">China</option>
            </select>
            <label for="paquete-tipo" class="travel">Tipo paquete:</label>
            <select id="paquete-tipo" name="paquete_tipo">
                <option value="SELECCION" selected>Seleccione el tipo de paquete</option>
                <option value="ECONOMICO">BASICO</option>
                <option value="NORMAL">REGULAR</option>
                <option value="FULL" >PREMIUM</option>
            </select>

            <label for="travel-date" class="travel">Fecha de viaje:</label>
            <input type="date" id="travel-date" name="fecha-salida" value="" min="2025-01-01" max="2026-12-31">

            <input type=submit value=Enviar>
        </form>
    </div>

    <!—Los resultados de la búsqueda se mostrarán aquí -->
        <h2><span id="mensaje_busqueda"> </span></h2>

        <div class="container">
            <div class="tarjeta">
                <img src="imagenes/lima.jpg">
                <p class="duracion">6 días, 7 noches</p>
                <p>PERÚ</p>
                <p class="destacado">LIMA</p>
                <p>Disfrute de la oferta gastronomica de la ciudad de Lima</p>
                <p class="destacado">$150.000</p>
                <p class="pie-tarjeta"><span>Última Salida:</span> 20-12-2025</p>

            </div>
            <div class="tarjeta">
                <img src="imagenes/Tacna.jpg">
                <p class="duracion">5 días, 4 noches</p>
                <p>PERÚ</p>
                <p class="destacado">TACNA</p>
                <p>Conozca los encantos de la ciudad de Tacna y su variada oferta comercial</p>
                <p class="destacado">$80.000</p>
                <p class="pie-tarjeta"> <span> Última Salida:</span> 04-01-2026</p>
            </div>
            <div class="tarjeta">
                <img src="imagenes/mendoza.jpg">
                <p class="duracion">8 días, 7 noches</p>
                <p>ARGENTINA</p>
                <p class="destacado">MENDOZA</p>
                <p>Descanse en uno de los paisajes más bellos del país transandino</p>
                <p class="destacado">$250.000</p>
                <p class="pie-tarjeta"><span> Última Salida:</span> 25-01-2026</p>
            </div>
            <div class="tarjeta">
                <img src="imagenes/Osorno.jpg">
                <p class="duracion">4 días, 3 noches</p>
                <p>CHILE</p>
                <p class="destacado">OSORNO</p>
                <p>Conozca los impresionantes volcanes del sur de chile</p>
                <p class="destacado">$350.000</p>
                <p class="pie-tarjeta"><span> Última Salida:</span> 20-12-2025</p>
            </div>
            <div class="tarjeta">
                <img src="imagenes/Punta arenas.jpg">
                <p class="duracion">4 días, 3 noches</p>
                <p>CHILE</p>
                <p class="destacado">PUNTA ARENAS</p>
                <p>Viva la experiencia de conocer la patagonia</p>
                <p class="destacado">$200.000</p>
                <p class="pie-tarjeta"><span> Última Salida:</span> 13-02-2026</p>
            </div>
            <div class="tarjeta">
                <img src="imagenes/Santiago.jpg">
                <p class="duracion">5 días, 4 noches</p>
                <p>CHILE</p>
                <p class="destacado">SANTIAGO</p>
                <p>Recorra los barrios tradicionales de la capital </p>
                <p class="destacado">$400.000</p>
                <p class="pie-tarjeta"> <span> Última Salida:</span> 01-03-2026</p>

            </div>
            <div class="tarjeta">
                <img src="imagenes/China.jpg">
                <p class="duracion">15 días, 14 noches</p>
                <p>CHINA</p>
                <p class="destacado">PEKIN</p>
                <p>Explora la magia de la gran muralla china </p>
                <p class="destacado">$2.400.000</p>
                <p class="pie-tarjeta"> <span> Última Salida:</span> 14-03-2026</p>

            </div>
            <div class="tarjeta">
                <img src="imagenes/Buenos Aires.jpg">
                <p class="duracion">4 días, 3 noches</p>
                <p>ARGENTINA</p>
                <p class="destacado">BUENOS AIRES</p>
                <p>Disfruta de la tierra del tango </p>
                <p class="destacado">$400.000</p>
                <p class="pie-tarjeta"> <span> Última Salida:</span> 11-03-2026</p>

            </div>
            <div class="tarjeta">
                <img src="imagenes/Sanghai.jpg">
                <p class="duracion">15 días, 14 noches</p>
                <p>CHINA</p>
                <p class="destacado">SHANGHAI
                <p>
                <p>Vive la intensa modernidad de esta gran ciudad </p>
                <p class="destacado">$2.200.000</p>
                <p class="pie-tarjeta"> <span> Última Salida:</span> 14-02-2026</p>

            </div>
            <div class="tarjeta">
                <img src="imagenes/Bariloche.jpg">
                <p class="duracion">6 días, 5 noches</p>
                <p>ARGENTINA</p>
                <p class="destacado">BARILOCHE
                <p>
                <p>Descansa en la belleza de la cuidad del chocolate </p>
                <p class="destacado">$700.000</p>
                <p class="pie-tarjeta"> <span> Última Salida:</span> 22-02-2026</p>

            </div>
            <div id="viaje_seleccionado"><?php
                                            include('codigo.php');

                                            $promo = new Promocion(1, '20-12-2025', 'Inca Hotel', 'LIMA', 'Perú', '6 días, 7 noches', 2000000);
                                            $promo->mostrarDatosPaquete();
                                            ?></div>
</body>

</html>