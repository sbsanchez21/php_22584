console.log("js")

function validarUsu() {
    console.log("ejecuto función")
    let usu=document.getElementById("usu").value 
    console.log(usu)

    if (usu.length==0) { //es 0 cuando usu no tiene valores
        document.getElementById("msjUsu").innerHTML="El usuario no puede estar vacío"
    } else if(usu.indexOf("@")==-1) {
        // console.log("El usu debe tener un @")
        document.getElementById("msjUsu").innerHTML="El usuario debe contener un @"
    } else if(usu.indexOf("codoACodo.edu.ar")==-1) {
        // console.log("El usu debe tener el dominio codoACodo.edu.ar")
        document.getElementById("msjUsu").innerHTML="El usu debe tener el dominio codoACodo.edu.ar"
    } else {
        document.getElementById("msjUsu").innerHTML="Usuario correcto"
        document.getElementById("msjUsu").className="bg-info my-1 text-center rounded"
    }
}

function updFortaleza() {
    console.log("ingreso fortalez")

    let pass=document.getElementById("pass").value
    console.log(pass)

    if (pass.length<=4) {
        document.getElementById("msjPass").innerHTML="Fortaleza Baja"
        document.getElementById("msjPass").className="bg-danger my-1 text-center rounded"
    } else if(pass.length>4 && pass.length<=8) {
        document.getElementById("msjPass").innerHTML="Fortaleza Media"
        document.getElementById("msjPass").className="bg-warning my-1 text-center rounded"
    } else {
        document.getElementById("msjPass").innerHTML="Fortaleza Alta"
        document.getElementById("msjPass").className="bg-info my-1 text-center rounded"

    }
}