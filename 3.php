<?php
class Empleado {
    private $nombre;
    private $salarioHora;
    private $horasDia;
    function __construct($salarioHora, $horasDia, $nombre){
        $this->salarioHora = $salarioHora;
        $this->horasDia = $horasDia;
        $this->nombre = $nombre;
    }
    function getInfo(){
        $this -> addSal();
        $this -> AddWork();
        $horasMes = ($this -> salarioHora * $this -> horasDia)*25;
        echo "El empleado : " . $this -> nombre . " este mes ha ganado un total de : " . $horasMes;
    }
    function addSal(){
        $horasMes = ($this -> salarioHora * $this -> horasDia)*25;
        if ($horasMes < 500){
            $this -> salarioHora += 10;
        }
    }
    function AddWork(){
        $horasMes = ($this -> salarioHora * $this -> horasDia)*25;
        if ($this -> horasDia > 6){
            $this -> salarioHora += 5;
        }
    }
}
$empleado1 = new Empleado(8,8,"Alfonso");
$empleado1 -> getInfo();