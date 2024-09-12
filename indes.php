<?php
require_once("claseCarro.php");
$estado = $_REQUEST['estado'];
$placa = $_REQUEST['placa'];
$color = $_REQUEST['color'];
$cliente = $_REQUEST['cliente'];
$marca = $_REQUEST['marca'];
$id = $_REQUEST['documento'];
$horaing = $_REQUEST['horaIng'];


$carro = new Carro($estado, $placa, $color, $cliente, $marca, $id, $horaing, 7, 15);
$arraycarro = $carro -> getInfoVehi();
echo "<h1>HOLA</h1>";
echo "<pre>";
echo $arraycarro;
echo "</pre>";
echo "<button type=button onclick=location.href='paraphp.html'>VOLVER</button>";
