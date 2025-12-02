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
?>
<form action="" method="POST">
    <label>Ingresa el nombre de el empleado: <input type="text" name="nombre"></label><br><br>
    <label>Ingresa el salario por hora de el empleado: <input type="text" name="salarioHora"></label><br><br>
    <label>Ingresa el total de horas trabajadas por dia: <input type="text" name="horaDia"></label><br><br>
    <input type="submit">
</form>
<?php
$nombre = $_POST['nombre'];
$salarioHora = $_POST['salarioHora'];
$horaDia = $_POST['horaDia'];
$empleado1 = new Empleado($salarioHora,$horaDia,$nombre);
$empleado1 -> getInfo();