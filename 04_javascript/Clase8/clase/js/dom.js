console.log(document)
// console.log(document.body)
document.head.title
document.body.children

console.log(document.getElementById("nota"))
console.log(document.getElementsByTagName("button"))
let listaBotones=document.getElementsByTagName("button")
console.log(document.get)

const p = document.getElementById('hola');
p.onmouseover = logMouseOver;
p.onmouseout = logMouseOut;
function logMouseOver() {
    p.innerHTML = 'MOUSE OVER detected';
    p.style.backgroundColor = "red";
}

function logMouseOut() {
    p.innerHTML = 'MOUSE OUT detected';
    p.style.backgroundColor = "blue";
}

function cambiarBg() {
    document.body.style.backgroundColor="red"
    document.getElementById("")
    // document.body.style.
}

function mostrarNota() {
    document.getElementById("nota").innerHTML="Hola Dom Html dinámico"
    document.getElementById("nota").style.backgroundColor="ligthblue"
    document.getElementById("nota").style.padding="1rem"
    document.getElementById("nota").style.borderRadius="5px"
}

function cambiarEstilo() {
    document.getElementById("nota").style.backgroundColor="green"
    document.getElementById("nota").style.padding="1rem"
    document.getElementById("nota").style.borderRadius="15px"
}

function resaltar() {
    document.getElementById("nota").style.backgroundColor="red"

}

function opacar() {
    document.getElementById("nota").style.backgroundColor="gray"

}

function changeButton() {
    let listaBotones=document.getElementsByTagName("button")
    for (let i = 0; i < listaBotones.length; i++) {
        listaBotones[i].style.backgroundColor="red"
    }
}

function changeClass() {
    let botones=document.getElementsByClassName("btn")
    for (let i = 0; i < botones.length; i++) {
        botones[i].className="btn btn-danger"
        
    }
}

function changeFontSize() {
    // document.body.className="fs-4"
    document.body.style.fontSize="1.5rem"
}

function mostrarMensaje() {
    //muestro el mensaje
    document.getElementById("mensaje").innerHTML="Bienvenidos a nuestra Página"

    //cambio el texto del botón
    let btnMostrarMsj=document.getElementById("btnMostrarMsj")
    btnMostrarMsj.innerHTML="Eliminar Mensaje"

    //cambio el evento onclick del boton
    btnMostrarMsj.onclick=function() {
        document.getElementById("mensaje").innerHTML="Mensaje oculto"
        document.getElementById("mensaje").className="bg-danger"
    }

    
}