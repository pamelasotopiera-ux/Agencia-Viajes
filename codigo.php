<?php
class Promocion
{
    // Propiedades
    public $id;
    public $tipo_paquete;
    public $fecha_disponibilidad;
    public $hotel;
    public $ciudad;
    public $pais;
    public $duracion;
    

    // Métodos
    public function __construct($id, $fecha_disponibilidad, $hotel, $ciudad, $pais, $duracion, $precio)
    {
        $this->id = $id;
        if ($precio>=700000) $this->tipo_paquete='PREMIUM';
        if ($precio>=400000 and $precio<700000) $this->tipo_paquete='REGULAR';
        if ($precio>=80000 and $precio<400000) $this->tipo_paquete='BÁSICO';
        $this->fecha_disponibilidad =  $fecha_disponibilidad;
        $this->hotel =  $hotel;
        $this->ciudad =  $ciudad;
        $this->pais =  $pais;
        $this->duracion =  $duracion;
    }

    public function getCuidad()
    {
        return $this->ciudad;
    }

    public function getPaquete()
    {
        return $this->tipo_paquete;
    }

    public function coincidePaquete($paqueteConsulta)
    {
        if ($paqueteConsulta == $this->getPaquete()) {
            return true;
        } else return false;
    }

    public function hayDisponibilidad($fechaConsulta)
    {
        if ($fechaConsulta < $this->fecha_disponibilidad) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrarDatosPaquete()
    {
        echo "Felicitaciones ¡¡¡  🎉👏🍾✈️ <br>".
            "Hola recuerde que este un paquete de tipo {$this->tipo_paquete}🎁
            Usted visitará {$this->pais} específicamente, la cuidad de {$this->ciudad}
            Su visita se realizará durante {$this->duracion}, para ello, 📆
            el alojamiento que está incluído se realizará en el {$this->hotel} 🏩
            Finalmente recuerde que la última salida se realizará {$this->fecha_disponibilidad} 
            Esperamos que esta sea una experiencia inolvidable.";
    }
}
        
       
        