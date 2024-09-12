<?php
class Parqueadero{

    public $strIngreso ;


    public function __construct(string $strIngreso){
        $this->strIngreso = $strIngreso;
    }

public function setEntradaSalida($ingreso){
    $this->strIngreso = $ingreso;

   

}
public function getEntradaSalida(){
    $mostrar = [
        "Ingreso"=> $this->strIngreso
    ];
    return $mostrar;
}
}