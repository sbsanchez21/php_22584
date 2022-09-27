console.log("js")

function validarEmail() {
    console.log("ejecuto función")
    let email=document.getElementById("email").value 
    console.log(email)

    if (email.length<=0) {
        console.log("Debe ingresar algún caracter")
    } else if(email.indexOf("@")==-1) {
        console.log("El email debe tener un @")
    } else if(email.indexOf("codoACodo.edu.ar")==-1) {
        console.log("El email debe tener el dominio codoACodo.edu.ar")
    } else {
        console.log("Email Correcto")
    }
}

function fortalezaPass() {
    console.log("ingreso a fortaleza")
}