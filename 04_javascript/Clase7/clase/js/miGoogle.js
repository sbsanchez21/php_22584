// simulación de datos obtenidos desde la base de datos
var lenguajes=["java","javascript","ajax","c","c++","php","python","prolog","haskell"]


function mostrarSugerencias() {
    let lenguajesFiltrados = lenguajes.filter(contieneElTexto)
    document.getElementById("msj").innerHTML=lenguajesFiltrados
}

//verifica que el elemento del array tenga el texto ingresado por el usuario es
function contieneElTexto(lenguaje, indice, lenguajes) {
    //obtengo el texto ingresado por el usuario
    let q=document.getElementById("q").value

    /**
     * q="j", lenguaje="java", contiene=0, return true
     * q="j", lenguaje="javascript", contiene=0, return true
     * q="j", lenguaje="ajax", contiene=1, return true
     * q="j", lenguaje="c", contiene=-1, return false
     */
    let contiene=lenguaje.indexOf(q) //devuelve un nro si cotniene, devuelve -1 si no contiene

    //return contiene!=-1 //false si es -1, por ende no tiene la letra
    return contiene==0 //filtra los que comienzan con este texto
}