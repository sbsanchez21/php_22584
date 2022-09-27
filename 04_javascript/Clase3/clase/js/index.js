console.log("Ingreso al js");

// var ok = confirm("usted es mayor de edad?")

// var edad = prompt("Ingrese su edad");
// console.log("edad = " + edad);

let sexo = "Masculino"; //dato traído de la base datos

//ejemplo de uso de variable user
let user;
// user = prompt("Ingrese su usuario");
console.log("user:"+user);
if (user == "santos@gmail.com") {
    document.write("Usuario correcto");
} else {
    document.write("No existe el usuario");
}

let pi = 3.14;
// let nombre = "Pedro";

let saldoCtaCte = 3000;
saldoCtaCte = saldoCtaCte + 2000;
console.log("saldo:"+saldoCtaCte);


let nombre;
let apellido;

// nombre = prompt("Ingrese su nombre");
// apellido = prompt("Ingrese su apellido");
nombre = "JUan";
apellido = "Perez";

//concatenación
document.write("<br>Bievenido " + nombre + " " + apellido + " a nuestra página");
document.write(`<br>Bienvenido ${nombre} ${apellido} a nuestro sitio`)

apellido = apellido + " Ramirez";
document.write(`<br>Bienvenido ${nombre} ${apellido} a nuestro sitio`)

// debilmente tipado, puede cambiar de tipo numerico a string
let coseno = 333.44
coseno = "Juan Perez"


// comillas simples y dobles
document.write("<div class='bg-success'>Bienvenidos</div>");
document.write('<div class="bg-success">Bienvenidos</div>');


// operaciones aritméticas
let a = 3
let b = 4

console.log(`suma: ${a+b}`)
console.log(`restar: ${a-b}`)
console.log(`multiplicar: ${a*b}`)

//concatenación
let nombreApellido;
nombreApellido = "Juan"
nombreApellido = `${nombreApellido} Suarez` //alt+96
console.log(nombreApellido)

// operadores de comparación
let c = 5
let d = 6
let e = "5"

console.log(`igual ${c == d}`)
console.log(`igual ${c != d}`)
console.log(`mayor ${c > d}`)
console.log(`mayor ${c < d}`)
console.log(`mayor ${c <= d}`)
console.log(`mayor ${c <= e}`)
console.log(`igual ${c == e}`)
console.log(`estrictamente igual ${c === e}`)
console.log(`igual ${5 == "5"}`)
console.log(`igual ${5 === "5"}`)

// operadores lógicos and, or, not
let usuario
let contrasenia

// usuario=prompt("Ingrese usuario")
// contrasenia=prompt("Ingrese pass")

//and
if (usuario=="san@gmail.com" && contrasenia=="1234") {
    console.log("Bienvenidos a la página")
} else {
    console.log("Usuario o pass incorrectos")
}


//or
let hoyLlueve
let hayPronosticoLluvia

hoyLlueve = false
hayPronosticoLluvia = true

if (hoyLlueve || hayPronosticoLluvia) {
    console.log("llevar paragüas")
} else {
    console.log("NO llevar paragüas")
    
}


//estructuras de control
//if
let edad = 35
if (edad >= 18) {
    console.log("es mayor edad")
}

if (edad >= 18) {
    console.log("es mayor edad")
    
} else {
    console.log("NO es mayor edad")
}

edad = 70
if (edad <= 18) {
    console.log("niño joven")
    
} else if(edad > 18 && edad <=60 ) {
    console.log("adulto")
} else {
    console.log("Anciano")
}


if(true) console.log("llevar paragüas") 