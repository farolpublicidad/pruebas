<!-- En la pantalla va a aparacer un mensaje donde una persona va a validar un formulario con una contraseña y un nombre de usuario que es capaz de entrar. Luego, si el usuario es valido, entonces php imprime un echo a otro formulario que lo que hace es pedir el número de resultados vaborable, y luego el número de resultados posible. He imprime el resultado de la probabilidad en pantalla.

Ademas se sabe que para concatenar en php, se hace con un punto en vez de con un mas. -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Calculando la probabilidad según la regla de laplase.</title>
</head>
<body>
    <h1>Verifica tu identidad antes de entrar a la aplicación</h1>

    <form action="open.php" method="post" >
        <label for="">Title:</label><br /><br />
        <input type="text" name="user" /><br /><br />
        <label for="">Description</label><br /><br />
        <input type="password" name="password" /><br /><br />
        <button type="summit">Save</button><br /><br />
    </form>    
</body>
</html>

<?php
var_dump($_POST);

$user = ;
$password = ;

if(user === hola, password === odnum){
    echo '
    
<form action="open.php" method="post" >
    <label for="">Número de resultados favorables:</label><br /><br />
    <input type="number" name="favorable" /><br /><br />
    <label for="">Número de resultados posible</label><br /><br />
    <input type="number" name="posible" /><br /><br />
    <button type="summit">La probabilidad es:</button><br /><br />
</form>    

    '
}

?>