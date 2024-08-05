<?php

class Lavadora extends Electrodomestico{
    private $carga;

    const PRECIO_CONSUMO_A = 100;
    const PRECIO_CONSUMO_B = 80;
    const PRECIO_CONSUMO_C = 60;
    const PRECIO_CONSUMO_D = 50;
    const PRECIO_CONSUMO_E = 30;
    const PRECIO_CONSUMO_F = 10;



    function __construct($precioBase, $color, $consumoEnergetico, $peso, $carga)
    {
        parent::__construct($precioBase, $color, $consumoEnergetico, $peso);
        $this->carga = $carga;
        $this->validarCarga(); // Call function validarCarga() just if needed
    }

    private function validarCarga()
{
    if ($this->carga == "") {
        $this->carga = 5;
    } else {
        // If carga it's not numeric or under 0
        if (!is_numeric($this->carga) || $this->carga < 0) {
            $this->carga = 5; // Set carga on 5
        }
    }
}

    public function precioFinal()
    {
        $total = 0;
        $totalConPeso = $total;
        $totalConCarga = 0;


        switch ($this->getConsumoEnergetico()) {
            case "A":
                $total = $this->getPrecioBase() + self::PRECIO_CONSUMO_A;
                break;
            case "B":
                $total = $this->getPrecioBase() + self::PRECIO_CONSUMO_B;
                break;
            case "C":
                $total = $this->getPrecioBase() + self::PRECIO_CONSUMO_C;
                break;
            case "D":
                $total = $this->getPrecioBase() + self::PRECIO_CONSUMO_D;
                break;
            case "E":
                $total = $this->getPrecioBase() + self::PRECIO_CONSUMO_E;
                break;
            case "F":
                $total = $this->getPrecioBase() + self::PRECIO_CONSUMO_F;
                break;
            default:
                echo "Selecciona un consumo eléctrico válido";
                return;
        }

        $totalConPeso = $total;

        if ($this->getPeso() >= 0 && $this->getPeso() <= 19) {
            $totalConPeso += 10;
        } elseif ($this->getPeso() >= 20 && $this->getPeso() <= 49) {
            $totalConPeso += 50;
        } elseif ($this->getPeso() >= 50 && $this->getPeso() <= 79) {
            $totalConPeso += 80;
        } elseif ($this->getPeso() >= 80) {
            $totalConPeso += 100;
        } else {
            echo "Peso no válido";
            return;
        }
    
        $totalFinal = $totalConPeso;
    
        if ($this->carga >= 6) {
            $totalFinal += 50;
        }
    
        return "Precio final: $totalFinal €<br>";
    }

    public function __toString()
    {
        return "<h3>Datos de la lavadora</h3> <br>
        Precio base: {$this->getPrecioBase()}€ <br>
        Consumo energético: {$this->getConsumoEnergetico()}<br>
        Peso: {$this->getPeso()}kg <br>
        Carga: {$this->carga}kg";
    }
}