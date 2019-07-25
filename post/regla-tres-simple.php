<?php
 
require 'tarjetas-precentacion/tarjeta.php';

// var_dump($_POST);

$conocido1 = 0;
$conocido1 = 0;
$calcular1 = 0;
$proporcional = 0;

$conocido1 = $_POST['conocido1'];
$conocido2 = $_POST['conocido2'];

// var_dump($conocido2);
$calcular1 = $_POST['calcular1'];
$proporcional = $_POST['proporcional'];

$respuesta = $conocido1 + $conocido2;

$resultado_regla = 0;

// echo "<h1> esta es la suma de los 2 calculos. $respuesta";
 
// if ($conocido1 == 12){
//     operacion();
// } 
// else {
//     continue;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Regla de tres simple</title>
    <link rel='stylesheet' href='regla.css' />
</head>
<body>
<div> <?php menu('tarjetas-precentacion/'); ?> </div>
    <h1>Vamos a calcular la regla de 3 simple.</h1>
    <form action='regla-tres-simple.php' method='post'>
        <label for=''>Valores <strong>conocidos</strong></label><br />
        <div>
            <input type='number' name='conocido1' id='idconocido1' required />
            <input type='number' name='conocido2' id='idconocido2' required/>
        </div><br />
        <label for=''>Valores para <strong>calcular</strong></label><br />
        <div>
            <input type='number' name='calcular1' id='idcalcular1' required />
            <label for=''><strong>X</strong></label><br /><br />
        </div>
        <label for=''>Elije 1 si es directamente proporcional y 2 si es inversamente proporciónal. <strong></strong></label><br />
        <div>
            <input type='number' name='proporcional' id='idproporcional' required/>
        </div><br />
        <button type='submit' class='save' id='idsave'><strong>Save</strong></button>
    </form>

 <?php
//  function operacion(){
    if($proporcional == 1){
        //regla de 3 simple directa
        $resultado_regla = ($conocido2 * $calcular1) / $conocido1 ;
        
        echo "<h2>El resultado es <strong>$resultado_regla</strong> </h2>";
    } else if($proporcional == 2) {
        //regla de 3 simple inversa
        $resultado_regla = ($conocido2 * $conocido1) / $calcular1 ;
        
        echo "<h2>El resultado es <strong>$resultado_regla</strong> </h2>";
    } else {
        echo 'Solo puedes escribir 1 o 2.';
    }
// };

?>
</body>
</html>