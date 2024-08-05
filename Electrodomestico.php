<?php
class Electrodomestico
{
    private $precioBase;
    private $color;
    private $consumoEnergetico;
    private $peso;

    public function __construct($precioBase, $color, $consumoEnergetico, $peso)
    {
        $this->precioBase = $precioBase;
        $this->color = $color;
        $this->consumoEnergetico = $consumoEnergetico;
        $this->peso = $peso;
    }

    /**
     * Get the value of precioBase
     */
    public function getPrecioBase()
    {

        if ($this->precioBase == "") {
            $this->precioBase = 100;
        } else {
            $this->precioBase = $this->precioBase;
        }

        return $this->precioBase;
    }

    /**
     * Set the value of precioBase
     *
     * @return  self
     */
    public function setPrecioBase($precioBase)
    {
        $this->precioBase = $precioBase;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        $coloresValidos = ["blanco", "negro", "rojo", "azul", "gris"];
        $this->color = (in_array($this->color, $coloresValidos)) ? $this->color : "blanco";
    
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;
        
        return $this;
    }

    /**
     * Get the value of consumoEnergetico
     */
    public function getConsumoEnergetico()
    {
        $consumosValidos = ["A", "B", "C", "D", "E", "F"];
        $this->consumoEnergetico = (in_array($this->consumoEnergetico, $consumosValidos)) ? $this->consumoEnergetico : "A";
    
        return $this->consumoEnergetico;
    }

    /**
     * Set the value of consumoEnergetico
     *
     * @return  self
     */
    public function setConsumoEnergetico($consumoEnergetico)
    {
        $this->consumoEnergetico = $consumoEnergetico;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {

        $this->peso = ($this->peso > 0) ? $this->peso : 5;

        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    public function comprobarConsumoEnergetico()
    {
        if (
            $this->consumoEnergetico != "A" && $this->consumoEnergetico != "B" && $this->consumoEnergetico != "C"
            && $this->consumoEnergetico != "D"  && $this->consumoEnergetico != "E" && $this->consumoEnergetico != "F"
        ) {
            $this->consumoEnergetico == "A";
        }
    }

    public function precioFinal()
    {
        
    $precioBase = $this->getPrecioBase();
    $consumoEnergetico = $this->getConsumoEnergetico();
    $peso = $this->getPeso();

    switch ($consumoEnergetico) {
        case "A":
            $precioBase += 100;
            break;
        case "B":
            $precioBase += 80;
            break;
        case "C":
            $precioBase += 60;
            break;
        case "D":
            $precioBase += 50;
            break;
        case "E":
            $precioBase += 30;
            break;
        case "F":
            $precioBase += 10;
            break;
        default:
            return "Selecciona un consumo energético válido";
    }

    if ($peso >= 0 && $peso <= 19) {
        $precioBase += 10;
    } elseif ($peso >= 20 && $peso <= 49) {
        $precioBase += 50;
    } elseif ($peso >= 50 && $peso <= 79) {
        $precioBase += 80;
    } elseif ($peso >= 80) {
        $precioBase += 100;
    } else {
        return "Peso no válido";
    }

    return $precioBase;
    }

    public function __toString()
    {
        return "<strong>Datos del electrodomestico</strong> <br>
        Precio base: {$this->getPrecioBase()} <br>
        Color: {$this->getColor()} <br>
        Consumo energético: {$this->getConsumoEnergetico()}<br>
        Peso: {$this->getPeso()}";
    }
}