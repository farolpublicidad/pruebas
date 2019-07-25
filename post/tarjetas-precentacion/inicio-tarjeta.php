<?php 
require 'tarjeta.php';

?>

<!DOCTYPE html>
<html lang="en">
    <?php headTarjeta(); ?><!-- Head-->
<body>

    <div class="total">
        <div class="menuGrande">
            <div> <?php pagina('Farol Inicio'); ?>
            <div> <?php menu(''); ?> </div>
        </div>    
    </div>
        <div> <?php contenidoInicio(); ?> </div>
        <script src="tarjeta.js" ></script>
</body>
</html>

