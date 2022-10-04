// funciones
let a=3
let b=4
console.log(`a+b=${a+b}`)

//una function solo se ejecuta si es invocada desdfe js o html
function sumar() {
    console.log(`suma desde function a+b=${a+b}`)
    console.log("otra instrucci+on")

}
sumar()
b="Perez"
sumar()
a="Juan"
sumar()

// funcion con parámetros
function restar(a, b) {
    console.log(`funcion restar a=${a}`)
    console.log(`funcion restar b=${b}`)
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

result=multiplicar(99,4)
result+=100
console.log(result)

// está mal, comenzar con minúscula
let Raiz=32
console.log(Raiz)

// ejemplo de función con return
function calcularsueldos(categoria) {
    let sueldos=70000

    let porcentaje
    switch (categoria) {
        case "A":
            porcentaje=10
            break;

        case "B":
            porcentaje=25
            break;

        case "C":
            porcentaje=50
            break;
                    
        default:
            break;
    }

    sueldos=sueldos+(sueldos*porcentaje/100)

    return sueldos
}

let sueldosA=calcularsueldos("A")
let sueldosB=calcularsueldos("B")
let sueldosC=calcularsueldos("C")

console.log(`Juan Perez tiene el sueldos=${sueldosA}`)
console.log(`Julian Sanchez tiene el sueldos=${sueldosB}`)
console.log(`Romina Aizen tiene el sueldos=${sueldosC}`)

// función flecha
function dividir(a,b) {
    return a/b
}

console.log(dividir(10,5))

let dividirFlecha=(a,b)=>a/b
console.log(dividirFlecha(10,5))
console.log(dividirFlecha(10.5,5.3))

let calcularsueldosFlecha=(categoria)=>{
    let sueldos=70000

    let porcentaje
    switch (categoria) {
        case "A":
            porcentaje=10
            break;

        case "B":
            porcentaje=25
            break;

        case "C":
            porcentaje=50
            break;
                    
        default:
            break;
    }

    sueldos=sueldos+(sueldos*porcentaje/100)

    return sueldos
}

let sueldosB2=calcularsueldosFlecha("B")
console.log(sueldosB2)

//Función anónima
let raiz = function (a) {
    return Math.sqrt(a);
};
console.log(raiz(16)); // 3


/** Array
 * variable especial puede contener más de un valor a la vez
*/
let sueldos1=50000
let sueldos2=60000
let sueldos3=65000
let sueldos4=45000

sueldos1+=5000
sueldos2+=5000
sueldos3+=5000
sueldos4+=5000

let sueldos=[50000,60000,65000,45000,56000]
sueldos[0] //consulto 50000
sueldos[2] //65000

sueldos[3]=75000 //modifica sueldos en la posición 3

// for (let i = 0; i < sueldos.length; i++) {
//     sueldos[i]+=5000
//     console.log(`sueldos[${i}]=${sueldos[i]}`)
// }

function aumentarsueldos() {
    for (let i = 0; i < sueldos.length; i++) {
        sueldos[i]+=5000
        console.log(`sueldos[${i}]=${sueldos[i]}`)
    }
}

// propiedades y métodos
sueldos.length //propiedad
console.log(`longitud de un array ${sueldos.length}`)

console.log(sueldos)
sueldos.sort() //método y tiene parentesis, modifica el array sueldos
console.log(sueldos)
sueldos.pop() //método y tiene parentesis
console.log(sueldos)
sueldos.push(90000)
console.log(sueldos)
console.log(sueldos.indexOf(60000)) //devuelve la posición donde encontró el valor 60000
console.log(sueldos.indexOf(10000)) //devuelve -1 pq no encontró el vlaor

// matrices
let butacas=[
    ["A1", "A2", "A3" ],
    ["B1", "B2", "B3"],
    ["C1", "C2", "C3" ],
    ]

    //for
for (let i = 0; i < butacas.length; i++) {
    console.log(`butacas[${i}]=${butacas[i]}`)
    for (let j = 0; j < butacas[i].length; j++) {
        console.log(butacas[i][j])
        // console.log(`butacas[${i}${j}]=${butacas[i][j]}`)
    }
}    

//for of, foreach en otros lenguajes php, java
for(sueld of sueldos) {
    sueld+=10
    console.log(sueld)
}

for(fila of butacas) {
    console.log(fila)
    for(but of fila) {
        console.log(but)
    }

}

let butacasLibres=[
    [true, false, true ],
    [true, false, true ],
    [true, false, false ],
    ]

function liberarButacas() {
    
}