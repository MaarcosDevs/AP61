<?php

class Average {
    private $numero1;
    private $numero2;
    private $numero3;

    //constructor
    function __construct($numero1,$numero2,$numero3,$numero4,$numero5,$numero6){
        $this->$numero1 = $numero1;
        $this->$numero2 = $numero2;
        $this->$numero3 = $numero3;
        $this->$numero4 = $numero4;
        $this->$numero5 = $numero5;
        $this->$numero6 = $numero6;
        $average = ($numero1+$numero2+$numero3+$numero4+$numero5+$numero6)/6;
        echo $average;
    }
}
?>
<form action="" method="POST">
    <label>Ingresa el numero 1: <input type="text" name="numero1"></label>
    <label>Ingresa el numero 2: <input type="text" name="numero2"></label>
    <label>Ingresa el numero 3: <input type="text" name="numero3"></label>
    <label>Ingresa el numero 4: <input type="text" name="numero4"></label>
    <label>Ingresa el numero 5: <input type="text" name="numero5"></label>
    <label>Ingresa el numero 6: <input type="text" name="numero6"></label>
    <input type="submit">
</form>
<?php
$numero1 = 0;
$numero2 = 0;
$numero3 = 0;
$numero4 = 0;
$numero5 = 0;
$numero6 = 0;
$numero1 = $_POST['numero1'];$numero2 = $_POST['numero2'];$numero3 = $_POST['numero3'];$numero4 = $_POST['numero4'];$numero5 = $_POST['numero5'];$numero6 = $_POST['numero6'];
$media = new Average($numero1,$numero2,$numero3,$numero4,$numero5,$numero6);
?>