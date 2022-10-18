document.getElementById("msjBienvenida").innerHTML = "Bienvenidos a DOM";
document.getElementById("msjBienvenida").style.backgroundColor = "blue";

var listaClases = document.getElementsByClassName("textoGrande");
console.log(listaClases);

function crearNota() {
    // cambiamos el texto html
    document.getElementById("nota").innerHTML = "Nota creada dinámicamente";

    // cambiamos el texto del botón
    document.getElementById("btnCrearNota").value = "Eliminar Nota";

    const btnCrearNota = document.getElementById("btnCrearNota");
    btnCrearNota.onclick = function() {
        document.getElementById("nota").innerHTML = "";
    }    
    
}

function borrarNota() {
    document.getElementById("nota").innerHTML = "";
}

const btnEventos = document.getElementById("btnEventos");
var colorFondo = "blue";
btnEventos.onclick = function() {
    if(colorFondo=="blue") {
        document.body.style.backgroundColor = "green";
    } else {
        document.body.style.backgroundColor = "blue";
    }
}

// btnEventos.onmouseover = function () {
//     document.body.style.backgroundColor = "green";
// }

console.log(`Cantidad de links de la página ${document.links.length}`);
console.log(document.links);
console.log(`Href del link 1  ${document.links[0].href}`);
console.log(document);
console.log(document.baseURI);

console.log(document.getElementsByTagName("input"));

// crear elemento de manera dinámica
document.open();
document.write("<h1>Hola Dom h1</h1>");
document.close();

console.log(document.title);
console.log(document.URL);

var nuevaVentana;
function abrirVentana() {
    nuevaVentana = window.open("validarCampos.html", "", "width=400, height=200");
}


function cerrarVentana() {
    nuevaVentana.close();
}

function sacarFoco() {
    nuevaVentana.blur();
}

function ponerFoco() {
    nuevaVentana.focus();
}

function moverVentana() {
    nuevaVentana.moveBy(50,50);
    nuevaVentana.focus();
}

function imprimir() {
    window.print();
}

