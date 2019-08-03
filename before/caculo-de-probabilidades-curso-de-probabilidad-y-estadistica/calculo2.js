/* 
Primer codigo que si funciona.

var favorables_lienzo = document.getElementById("favorables");
console.log(favorables_lienzo); 

favorables_lienzo.addEventListener("click", ver_alert)

function ver_alert(){
        alert(favorables_lienzo);

}

*/

/* Este es el segundo código que si funciona.

var ejecutar = document.getElementById("boton");
ejecutar.addEventListener("click", probabilidad);

function probabilidad (){
    var favorables_lienzo = document.getElementById("favorables");
    var cantidad_favorable = parseInt(favorables_lienzo.value);
    alert('Esta es la cantidad favorable ' + cantidad_favorable);
}

*/

/* Este código no funcionó*/


var ejecutar = document.getElementById("boton");

ejecutar.addEventListener("click", probabilidad);

var escribir = document.getElementById("resultado_escribir");

function probabilidad (){
    let extrayendo_favorables = parseInt(document.getElementById("favorables").value);
   

    var extrayendo_posibles = document.getElementById("posibles");
    var dis_posibles = extrayendo_posibles.value;

    
    /* resultado = (extrayendo_favorables /  extrayendo_posibles) * 100;

    escribir.innerHTML = "Hola" + resultado; */
}


/*
    var extrayendo_posibles = document.getElementById("posibles");
    var posibles_disponible = parseInt(extrayendo_posibles.value);

    var resultado = (favorables_disponible / posibles_disponible;) ;
    
    var resultado_2 = 'La probabilidad es de ' + resultado + '%';

    alert(resultado_2)
}
    */

