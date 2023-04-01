<?php

class Viaje
{
    private String $codigo;
    private String $destino;
    private int $maximoPasajeros;
    private array $pasajero = array();
    
    function __construct($codigo,$destino,$maximoPasajeros,$arrayPasajeros)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maximoPasajeros= $maximoPasajeros;
        $this->pasajero =$arrayPasajeros;
    }
    /**
     * Se muestra la informacion del viaje
     * @return void
     */
    function __toString(){
    
        $salida= "***********************" ." \n ";
        $salida.= "Codigo: " . $this->codigo." \n ";
        $salida.= "Destino: ". $this->destino." \n ";
        $salida.= "Maximo pasajero: ". $this->maximoPasajeros." \n ";
        $salida.= "Pasajero" ." \n ";
        $salida.= $this->concatenarPasajeros();
        $salida.= "**********************" ." \n ";

        return $salida;
        
    }

    /**
     * Get the value of codigo
     * @param int
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     * @param int
     * @return void
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Get the value of destino
     * @array string
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     * @array string
     * @return void
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    /**
     * Get the value of maximoPasajeros
     * @param int
     */ 
    public function getMaximoPasajeros()
    {
        return $this->maximoPasajeros;
    }

    /**
     * Set the value of maximoPasajeros
     * @param int
     * @return void
     */ 
    public function setMaximoPasajeros($maximoPasajeros)
    {
        $this->maximoPasajeros = $maximoPasajeros;
    }

    /**
     * Get the value of cantidadPasajeros
     * @array
     */ 
    public function getCantidadPasajeros()
    {
        return count($this->pasajero);
    }

    /**
     * Add new pasajero
     * @array string
     * @param int
     * @return void
     */ 
    public function getPasajero()
    {
        return $this->pasajero;
    }
    
    public function setPasajeros($nombre, $apellido, $dni)
    {
        $this->pasajero["Nombre"]=$nombre;
        $this->pasajero["Apellido"]=$apellido;
        $this->pasajero["dni"]=$dni;
    }
    
    

    public function addPasajeros($nombre,$apellido,$dni)
    {
       array_push($this->pasajero,array("nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni));
    }

    function concatenarPasajeros() {
        $datosPasajeros = $this->pasajero; 
        $stringPasajeros = '';
        $cont=1;
        
        foreach ($datosPasajeros as $datos) {
            
                $stringPasajeros .="\t ".$cont.") Nombre= ". $datos['nombre'] . ' Apellido= ' . $datos['apellido'] . ' DNI= '. $datos['dni'] ."\n";
            $cont++;
            
            
            
        }
        
        return $stringPasajeros;
    }
}