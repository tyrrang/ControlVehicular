<?php

/**
 * Description of Estudiante clase hija de Usuario su clase padre
 *
 * @autor Gabriela Cassandra Martínez Cruz
 * @autor Julio Cesar Campos Rangel
 * @autor Javier Mendez Ramirez
 */
class Estudiante extends Usuario{
    private $NumControl; //$NumControl atributo de la clase Estudiante
    
    function __construct() {
        
    }
    /**
     * Metodo getter del atributo $NumControl
     * @return type
     */
    function getNumControl() {
        return $this->NumControl;
    }
    /**
     * Metodo setter del atributo $NumControl
     * @param type $NumControl
     */

    function setNumControl($NumControl) {
        $this->NumControl = $NumControl;
    }


}
