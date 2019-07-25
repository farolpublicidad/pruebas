<?php
var_dump($_POST);

echo 'si funciona';

$hl = 400 / 60;
echo "Est es $hl el resultado.";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Envio desde php</title>
</head>
<body>
    <h1> Este es un grán formulario, </h1>
    <form action='enviado.php' method='post'>
    <label for=''>Title:</label>
    <input type='text' name='title'/><br>
    <button type='submit'>Save</button>
    </form>
<?php
if($_POST['title'] == 'hola'){
    echo '<h1> De verdad esta vez si funciona.</h1>';
};

?>
</body>
</html>