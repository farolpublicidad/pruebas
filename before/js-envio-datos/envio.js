/*  console.log('funcionando'); */

var formulario = document.getElementById('formulario');
formulario.addEventListener('submit', function(e){
    e.preventDefault();
    // console.log('Me diste un click');

    var datos = new FormData(formulario);
    // console.log(datos);
    // console.log(datos.get('usuario'));
    // console.log(datos.get('pass'));

    fetch('opt/lampp/htdocs/index.php',{
        method: 'POST',
        body: datos
    })
    .then( res => res.json())
    .then(data => {
        console.log(data)
    })
})