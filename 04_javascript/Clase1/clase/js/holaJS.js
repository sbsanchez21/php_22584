// var ok = confirm("Usted es mayor de edad?"); //si aceptar en ok=true, cancel ok=false

// console.log("valor de ok=" + ok);

// if (ok) {
//     document.write("<div style='background-color: lightblue;''>Usted puede ingresar a la página</div>");
// } else {
//     document.write("<div style='background-color: red;''>Usted NO puede ingresar a la página</div>");
// }


var edad = prompt("Ingrese su edad");

console.log("su edad es: " + edad);

if (edad >= 18) {
    console.warn("entro al if");
    document.write("<div style='background-color: lightblue;''>Usted puede ingresar a la página</div>");
} else {
    console.error("entro al else");
    document.write("<div style='background-color: red;''>Usted NO puede ingresar a la página</div>");
}

