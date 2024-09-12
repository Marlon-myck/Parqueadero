<?php
require_once("claseParqueadero.php");
class Carro extends Parqueadero{
    public $strPlaca;
    public $strMarca;
    public $strColor;
    public $strCliente;
    public $intId;
    public $intHoraingreso;
    public $intHoraSalida;
    public $intValor;

    public function __construct(string $strIngreso, string $strPlaca, string $strColor, string $strCliente, string $strMarca, int $intId, int $intHoraingreso, int $intHoraSalida, int $intValor){
        parent ::__construct($strIngreso);
        $this->strPlaca = $strPlaca;
        $this->strMarca = $strMarca;
        $this->strColor = $strColor;
        $this->strCliente = $strCliente;
        $this->intId = $intId;
        $this->intHoraingreso = $intHoraingreso;
        $this->intHoraSalida = $intHoraSalida;
        $this->intValor = $intValor;
        

    }

    public function setInfoVehi($estado, $placa, $marca, $color, $cliente, $id, $precio, $horaIng, $horaSal){
        $this->strIngreso = $estado;
        $this->strPlaca = $placa;
        $this->strMarca = $marca;
        $this->strColor = $color;
        $this->strCliente = $cliente;
        $this->intId = $id;
        $this->intHoraingreso = $horaIng;
        $this->intHoraSalida = $horaSal;
        $this->intValor = $precio;



    }

 

    public function getInfoVehi(){
        $car = "
        Estado: {$this-> strIngreso}<br>
        Placa: {$this-> strPlaca}<br>
        Marca: {$this-> strMarca}<br>
        Color: {$this-> strColor}<br>
        Cliente: {$this-> strCliente}<br>
        Documento: {$this-> intId}<br>
        Hora de ingreso: {$this-> intHoraingreso}<br>
        ";
            
        return $car;
    }
}