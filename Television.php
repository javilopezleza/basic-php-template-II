<?php

require "Electrodomestico.php";
include "Lavadora.php";

class Television extends Electrodomestico
{
    private $resolucion;
    private $netflix;

    function __construct($precioBase, $color, $consumoEnergetico, $peso, $resolucion, $netflix)
    {

        parent::__construct($precioBase, $color, $consumoEnergetico, $peso);


        if ($resolucion === "" || !is_numeric($resolucion)) {
            $this->resolucion = 20; //Default in case of not specific resolution or invalid
        } else {
            $this->resolucion = (int) $resolucion; // Converting to entire
        }

        if ($netflix === "true" || $netflix === "false") {
            $this->netflix = $netflix; //Asign if valid
        } else {
            $this->netflix = "false"; //Default value if is not valid
        }
    }

    /**
     * Get the value of resolucion
     */
    public function getResolucion()
    {

        if ($this->resolucion == "") {
            $this->resolucion = 20;
        } else {
            $this->resolucion = $this->resolucion;
        }

        return $this->resolucion;
    }

    /**
     * Get the value of netflix
     */
    public function getNetflix()
    {

        if ($this->netflix == "") {
            $this->netflix = "false";
        } else {
            $this->netflix = $this->netflix;
        }
        return $this->netflix;
    }
    public function precioFinal()
    {
        //Calculo para el consumo energetico

        $total = $this->getPrecioBase();
        switch ($this->getConsumoEnergetico()) {
            case 'A':
                $total += 100;
                break;
            case 'B':
                $total += 80;
                break;
            case 'C':
                $total += 60;
                break;
            case 'D':
                $total += 50;
                break;
            case 'E':
                $total += 30;
                break;
            case 'F':
                $total += 10;
                break;
            default:
                //If not selected, take A as default
                $total += 100;
        }

        //Calculo para el peso
        $peso = $this->getPeso();


        if ($peso >= 0 && $peso <= 19) {
           $total += 10;
        } elseif ($peso >= 20 && $peso <= 49) {
           $total += 50;
        } elseif ($peso >= 50 && $peso <= 79) {
           $total += 80;
        } elseif ($peso >= 80) {
           $total += 100;
        } else {
            echo "Introduce un peso válido";
            return;
        }

        //Incremento del precio por la resolucion
        $resolucion = $this->getResolucion();
        $incrementoResolucion = 0;

        if ($resolucion >= 20) {
            $incrementoResolucion = $total * 0.3;
            $total += $incrementoResolucion;
        }

        //Añadir precio extra por netflix
        if ($this->getNetflix() == "true") {
            $total += 50;
        }



        return "Precio final: $total" . "€<br>";
    }

    public function __toString()
    {
        return "<h3>Datos del televisor</h3> <br>
        Precio base: {$this->getPrecioBase()}€ <br>
        Consumo energético: {$this->getConsumoEnergetico()}<br>
        Peso: {$this->getPeso()}kg <br>
        Resolucion: {$this->getResolucion()}''<br>
        Netflix: {$this->getNetflix()}";
    }
}
