<?php 


// function menu(){
//     echo'        <div class="menuGrande">';
//     echo'            <header class="menu"><!--Menú-->';
//     echo'                <div class="opciones">Inicio</div>';
//     echo'                <div class="opciones">Blog</div>';
//     echo'                <div class="opciones">Contacto</div>';
//     echo'            </header>';
//     echo'        </div>';
// }

function menu($ubicacion){/* la variable ubicación es para que cuando se llame a la función menú, se pueda indicar desde que archivo se tiene que salir para que se puedan ejecutar las ubicaciónes de las demas páginas correctamente. */
    echo '

                <header class="menu" style="color: white;
                background-color: orange;
                font-size: 30px;
                font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
                display: flex; 
                float: right;" ><!--Menú-->
                    <a href="'.$ubicacion.'inicio-tarjeta.php" class="opciones">Inicio</a>
                    <a href="'.$ubicacion.'blog-tarjeta.php" class="opciones">Blog</a>
                    <a href="'.$ubicacion.'pagina-libre.php" class="opciones">Página Libre</a>
                    <a href="'.$ubicacion.'programacion-basica/atm.php" class="opciones">ATM</a>
                    <a href="'.$ubicacion.'contacto-tarjeta.php" class="opciones">Contacto</a>
                    <a href="'.$ubicacion.'../regla-tres-simple.php" class="opciones">Regla 3 simple</a>
                    <a href="'.$ubicacion.'dibujar-teclado/flechas.php" class="opciones">Dibujar</a>
                </header>
            
            ';
};

function headTarjeta(){
    echo'
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
        <title>Farol publicidad - Diseño gráfico</title>
        <link rel="stylesheet" href="tarjeta.css" />
    </head>';
};

function pagina($nombrepagina){

    // echo $nombrepagina;

    echo '
    <div class="menu">
    ' . $nombrepagina . '
    </div>
    ';
    // echo '
    // <div clas="opciones">
    // '$nombrePagina'
    // </div>
    // ';
};

function contenidoInicio(){
    echo'
    <p class="parrafos">
    Farol publicidad es una empresa que se dedica a la producción, diseño y comercialización de tarjetas personales. Usted nos envía su diseño, y nosotros lo hacemos y lo entregamos a la puerta de su casa.
    </p>
    ';
};