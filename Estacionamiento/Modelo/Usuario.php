<?php

/**
 * Description of Usuario es una Clase padre
 *
 * @autor Gabriela Cassandra Martínez Cruz
 * @autor Julio Cesar Campos Rangel
 * @autor Javier Mendez Ramirez
 */
class Usuario {
    protected $Id;      //$Id atributo de la clase Usuario
    protected $Nombre;      //$Nombreatributo de la clase Usuario
    protected $ApellidoP;       //$ApellidoP atributo de la clase Usuario
    protected $ApellidoM;       //$ApellidoM atributo de la clase Usuario
    protected $CorreoE;         //$CorreoE atributo de la clase Usuario
    protected $Telefono;        //$Telefono atributo de la clase Usuario
    protected $Licencia;        //$Licenca atributo de la clase Usuario
    protected $TarjetaCirculacion;      //$TarjetaCirculacion atributo de la clase Usuario
    protected $Vehiculo;        //$Vehiculo atributo de la clase Usuario
    
    
    function __construct() {
        
    }
    /**
     *  Metodo getter del atributo $Id
     * @return type
     */
    function getId() {
        return $this->Id;
    }

    /**
     *  Metodo getter del atributo $Nombre
     * @return type
     */
    function getNombre() {
        return $this->Nombre;
    }
    /**
     *  Metodo getter del atributo $ApellidoP
     * @return type
     */

    function getApellidoP() {
        return $this->ApellidoP;
    }

    /**
     *  Metodo getter del atributo $ApellidoM
     * @return type
     */
    function getApellidoM() {
        return $this->ApellidoM;
    }

    /**
     *  Metodo getter del atributo $CorreoE
     * @return type
     */
    function getCorreoE() {
        return $this->CorreoE;
    }

    /**
     *  Metodo getter del atributo $Telefono
     * @return type
     */
    function getTelefono() {
        return $this->Telefono;
    }

    /**
     *  Metodo getter del atributo $Licencia
     * @return type
     */
    function getLicencia() {
        return $this->Licencia;
    }

    /**
     *  Metodo getter del atributo $TarjetaCirculacion
     * @return type
     */
    function getTarjetaCirculacion() {
        return $this->TarjetaCirculacion;
    }

    /**
     * Metodo setter del atributo $Id
     * @param type $Id
     */
    function setId($Id) {
        $this->Id = $Id;
    }
    /**
     * Metodo setter del atributo $Nombre
     * @param type $Nombre
     */

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    /**
     * Metodo setter del atributo $ApellidoP
     * @param type $ApellidoP
     */
    function setApellidoP($ApellidoP) {
        $this->ApellidoP = $ApellidoP;
    }

    /**
     * Metodo setter del atributo $ApellidoM
     * @param type $ApellidoM
     */
    function setApellidoM($ApellidoM) {
        $this->ApellidoM = $ApellidoM;
    }

    /**
     * Metodo setter del atributo $CorreoE
     * @param type $CorreoE
     */
    function setCorreoE($CorreoE) {
        $this->CorreoE = $CorreoE;
    }

    /**
     * Metodo setter del atributo $Telefono
     * @param type $Telefono
     */
    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    /**
     * Metodo setter del atributo $Licencia
     * @param type $Licencia
     */
    function setLicencia($Licencia) {
        $this->Licencia = $Licencia;
    }

    /**
     * Metodo setter del atributo $TarjetaCirculacion
     * @param type $TarjetaCirculacion
     */
    function setTarjetaCirculacion($TarjetaCirculacion) {
        $this->TarjetaCirculacion = $TarjetaCirculacion;
    }
    
    /**
     * Metodo getter para el atributo $Vehiculo
     * @return type
     */
    function getVehiculo() {
        return $this->Vehiculo;
    }

    /**
     * Metodo setter para el atributo $Vehiculo
     * @param type $Vehiculo
     */
    function setVehiculo($Vehiculo) {
        $this->Vehiculo = $Vehiculo;
    }
/**
 * Metodo registrarUsuario para registrar la entrada del usuario
 * @param type $TarjetaAcceso
 */
    public function registrarUsuario($TarjetaAcceso) {
        
    }
  /**
   * Metodo para registrar ingresar al usuario
   * @param type $TarjetaAcceso
   * @param type $HoraEntrada
   */
    public function ingresarEstacionamiento($TarjetaAcceso, $HoraEntrada) {
        
    }
    /**
     * Metodo para registrar salida
     * @param type $TarjetaAcceso
     */
    public function salirEstacionamiento($TarjetaAcceso) {
        
    }
    
    /**
     * Metodo para reportar incidencia
     * @param type $NomPersona
     * @param type $Fecha
     * @param type $Descripcion
     * @param type $NumIncidencia
     */

    public function reportarIncidencia($NomPersona, $Fecha, $Descripcion, $NumIncidencia) {
        
    }
}
