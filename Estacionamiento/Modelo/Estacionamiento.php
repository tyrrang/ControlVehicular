<?php


/**
 * Description of Estacionamiento clase padre
 * 
 * @autor Gabriela Cassandra Martínez Cruz
 * @autor Julio Cesar Campos Rangel
 * @autor Javier Mendez Ramirez
 */
class Estacionamiento {
    protected $Id;         //$Id atributo de clase Estacionamiento
    protected $NumLote;     //$NumLote atributo de clase Estacionamiento
    protected $Tamanio;     //$Tamanio atributo de clase Estacionamiento
    protected $EncagadoEstacionamiento;     //$EncagadoEstacionamiento relacion de cardinalidad con la clase EncagadoEstacionamiento
    protected $Vehiculo=array();        //$Vehiculo relacion de cardinalida con la clase Vehiculo 
    function __construct() {
        
    }
    /**
     * Metodo getter del atributo $Id
     * @return type
     */
    function getId() {
        return $this->Id;
    }

    /**
     * Metodo getter del atributo $NumLote
     * @return type
     */
    function getNumLote() {
        return $this->NumLote;
    }

    /**
     * Metodo getter del atributo $Tamanio
     * @return type
     */
    function getTamanio() {
        return $this->Tamanio;
    }

    /**
     * Metodo setter del atributo $Id
     * @param type $Id
     */
    function setId($Id) {
        $this->Id = $Id;
    }

    /**
     * Metodo setter del atributo $NumLote
     * @param type $NumLote
     */
    function setNumLote($NumLote) {
        $this->NumLote = $NumLote;
    }

    /**
     * Metodo setter del atributo $Tamanio
     * @param type $Tamanio
     */
    function setTamanio($Tamanio) {
        $this->Tamanio = $Tamanio;
    }
    
    /**
     * Metodo getter del atributo $EncargadoEstacionamiento
     * @return type
     */
    function getEncagadoEstacionamiento() {
        return $this->EncagadoEstacionamiento;
    }
    
    /**
     * Metodo setter del atributo $EncargadoEstacionamiento
     * @param type $EncagadoEstacionamiento
     */    
    function setEncagadoEstacionamiento($EncagadoEstacionamiento) {
        $this->EncagadoEstacionamiento = $EncagadoEstacionamiento;
    }
    
    /**
     * Metodo add del atributo $Vehiculo
     * @param Vehiculo $veh
     */
    function add(Vehiculo $veh){
        array_push($this->vehiculo, $veh);
    }
   
}
