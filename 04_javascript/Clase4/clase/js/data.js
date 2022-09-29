// funciones
let a=3
let b=4
console.log(`a+b=${a+b}`)

//una function solo se ejecuta si es invocada desdfe js o html
function sumar() {
    console.log(`suma desde function a+b=${a+b}`)
}
sumar()
b="Perez"
sumar()
a="Juan"
sumar()

// funcion con parámetros
function restar(a, b) {
    console.log(`resta función con parámetros a-b=${a-b}`)   
}
restar(4,5)
restar(5,3)
restar("Juan","Perez")

function raizCuadrada(x) {
    console.log(x)
    let result=Math.sqrt(x)
    console.log(`Raiz cuadrada de ${x}=${result}`)
    document.getElementById("result").innerHTML=`Raiz cuadrada de ${x}=${result}`
}

// function devuelve valor
function multiplicar(a,b) {
    return a * b;
}

let result=multiplicar(3,4)
console.log(result)

// está mal, comenzar con minúscula
let Raiz=32
console.log(Raiz)