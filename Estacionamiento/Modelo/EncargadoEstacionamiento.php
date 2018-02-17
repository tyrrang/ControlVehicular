<?php

/**
 * Description of EncargadoEstacionamiento clase hija de Usuario su clase Padre
 * 
 *
 * @autor Gabriela Cassandra Martínez Cruz
 * @autor Julio Cesar Campos Rangel
 * @autor Javier Mendez Ramirez
 */
class EncargadoEstacionamiento extends Usuario{
    private $NumEmpleado;
    
    function __construct() {
     
    }
     /**
      * Metodo getter del atributo $NumEmpleado
      * @return type
      */ 
    function getNumEmpleado() {
        return $this->NumEmpleado;
    }
/**
 *  Metodo setter del atributo $NumEmpleado 
 * @param type $NumEmpleado
 */
    function setNumEmpleado($NumEmpleado) {
        $this->NumEmpleado = $NumEmpleado;
    }
    /**
     * Metodo para registrar llegada de usuario al estacionamiento
     * @param type $HoraLlegada
     * 
     */
    public function registrarLlegada($HoraLlegada) {
    }
}
