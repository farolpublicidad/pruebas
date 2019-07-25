<?php
echo 'Hola mundo <br />';
var_dump($_GET);
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Form</title>
</head>
<body>
    <h1>Add job</h1>
    <form action="start.php" method="post" >
        <label for="">Title:</label><br /><br />
        <input type="text" name="title" /><br /><br />
        <label for="">Description</label><br /><br />
        <input type="text" name="description" /><br /><br />
        <button type="summit">Save</button><br /><br />
    </form>    
</body>
</html>