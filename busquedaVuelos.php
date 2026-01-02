<?php
function cargardatos($id_vuelo, $Fecha, $origen, $destino){
//rescata los datos ingresados por formulario.

// detro de esta función se debe llamar a validarDatos().
};
function validarDatos($id_vuelo, $Fecha, $origen, $destino){
    // validar si los campos no están vacíos
    if ($nombre == "" || $lugar === "" || $cupos === "" || $tarifa === "") {
      alert("Todos los campos deben estar completos. Revise los datos.");
      return false;

   }
   if ($cupos <= 0 || $tarifa <= 0) {
      alert("Las habitaciones disponibles y la tarifa deben ser mayores que 0");
      return false;
   }

   if ($tarifa > 500000) {
      alert("No deben registrarse tarifas por monto superior a $500.000");
      return false;
   }
   if ($cupos > 1000) {
      alert("No deben registrarse hoteles con capacidad superior a 1000 cupos");
      return false;
   }


// validar formato de fecha
// validar que el origen y destino sean diferentes
// retornar true si todo es válido, false en caso contrario
} ;
function cargarVuelos(
    //Cargar los vuelos desde la base de datos.
    // Se busca el match con los datos ingresados.
    //imprime mnesaje  de error si no hay vuelos disponibles.
){};







