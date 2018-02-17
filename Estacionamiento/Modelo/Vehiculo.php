<?php


/**
 *Description of Vehiculo clase padre
 *
 * @autor Gabriela Cassandra Martínez Cruz
 * @autor Julio Cesar Campos Rangel
 * @autor Javier Mendez Ramirez
 */
class Vehiculo {
    protected $Id;          //$Id atributo de clase Vehiculo
    protected $Placas;          //$Placas atributo de clase Vehiculo
    protected $Marca;           //$Marca atributo de clase Vehiculo
    protected $Color;           //$Color atributo de clase Vehiculo
    
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
     * Metodo getter del atributo $Placas
     * @return type
     */
    function getPlacas() {
        return $this->Placas;
    }
    
    /**
     * Metodo getter del atributo $Marca
     * @return type
     */
    function getMarca() {
        return $this->Marca;
    }

    /**
     * Metodo getter del atributo $Color
     * @return type
     */
    function getColor() {
        return $this->Color;
    }

    /**
     * Metodo setter del atributo $Id
     * @param type $Id
     */
    function setId($Id) {
        $this->Id = $Id;
    }

    /**
     * Metodo setter del atributo $Placas
     * @param type $Placas
     */
    function setPlacas($Placas) {
        $this->Placas = $Placas;
    }

    /**
     * Metodo setter del atributo $Marca
     * @param type $Marca
     */
    function setMarca($Marca) {
        $this->Marca = $Marca;
    }

    /**
     * Metodo setter del atributo $Color
     * @param type $Color
     */
    function setColor($Color) {
        $this->Color = $Color;
    }
   


}

