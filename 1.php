<?php

class Triangle {
    private $base;
    private $altura;

    //constructor
    function __construct($base,$altura){
        $this->$base = $base;
        $this->$altura = $altura;
        $area = ($base * $altura)/2;
        echo $area;
    }
}
?>
<form action="" method="POST">
    <label>Ingresa la Altura: <input type="text" name="Altura"></label>
    <label>Ingresa la Base: <input type="text" name="Base"></label>
    <input type="submit">
</form>
<?php
$base = 0;
$altura = 0;
$base = $_POST['Base'];$altura = $_POST['Altura'];
$triangle1 = new Triangle($base,$altura);
?>