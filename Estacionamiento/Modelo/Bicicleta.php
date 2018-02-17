<?php


/**
 * Description of Bicicleta es una clase hija de Vehiculo clase padre
 *
 * @autor Gabriela Cassandra Martínez Cruz
 * @autor Julio Cesar Campos Rangel
 * @autor Javier Mendez Ramirez
 */
class Bicicleta extends Vehiculo{
    private $NumPlaca;      //$NumPlaca atributo de clase Bicicleta
    private $Tipo;          //$Tipo atributo de clase Bicicleta
    private $Peso;          //$Peso atributo de clase Bicicleta
    
    function __construct() {
        
    }
    
    /**
     * Metodo getter del atributo $NumPlaca
     * @return type
     */
    function getNumPlaca() {
        return $this->NumPlaca;
    }

    /**
     * Metodo getter del atributo $Tipo
     * @return type
     */
    function getTipo() {
        return $this->Tipo;
    }

    /**
     * Metodo getter del atributo $Peso
     * @return type
     */
    function getPeso() {
        return $this->Peso;
    }

    /**
     * Metodo setter del atributo $NumPlaca
     * @param type $NumPlaca
     */
    function setNumPlaca($NumPlaca) {
        $this->NumPlaca = $NumPlaca;
    }

    /**
     * Metodo setter del atributo $Tipo
     * @param type $Tipo
     */
    function setTipo($Tipo) {
        $this->Tipo = $Tipo;
    }

    /**
     * Metodo setter del atributo $Peso
     * @param type $Peso
     */
    function setPeso($Peso) {
        $this->Peso = $Peso;
    }


}
