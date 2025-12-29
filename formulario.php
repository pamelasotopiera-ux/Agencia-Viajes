<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Estilo Agencia.css">
   <title>Agencia de Viajes</title>
</head>

<h1>Agencia de Viajes</h1>
<h2>CONOCE NUESTRA OFERTA EN PAQUETES TURISTICOS 🔥 ¡Obten descuentos incomparables! ✅</h2>
<br>
<p id="resultado_compra">
<?php
function formateaFecha($texto)
{
   $aux = explode('-', $texto);
   return "{$aux[2]}-{$aux[1]}-{$aux[0]}";
}

function datosConsulta()
{
   $datos = [$_GET['paquete_tipo'], $_GET['destino'], $_GET['fecha-salida']];
   $fechaFormateada = formateaFecha($datos[2]);
   echo "Su viaje a {$datos[1]} <br>" .
      "para el {$fechaFormateada} <br>" .
      "corresponde a un paquete del tipo {$datos[0]}";
}

datosConsulta();
?>
</p>
<hr>
<p id="oferta_dinamica">
   🎁 Oferta del Día!!! 🛫
   <?php
   function ofreceDestino()
   {
      $destinosOferta = ['VALPARAISO', 'CALAMA', 'RANCAGUA', 'SANTIAGO', 'PUERTO MONTT', 'ANTOFAGASTA', 'OSORNO', 'ARICA'];
      $ciudad = rand(0, count($destinosOferta) - 1);
      $cupos = rand(1, 15);
      echo "Quedan {$cupos} cupos para {$destinosOferta[$ciudad]}";
   }
   ofreceDestino();
   ?>
</p>
<hr>