let lenguajes=["java","javascript","jquery","php","python","c","haskell","ruby on rail", "angular", "react"]


function mostrarSugerencias() {
    
    document.getElementById("msj").innerHTML=lenguajes.filter(filtrarTexto)
}

function filtrarTexto(lenguaje) {
    let q=document.getElementById("q").value
    return lenguaje.indexOf(q)!=-1
}