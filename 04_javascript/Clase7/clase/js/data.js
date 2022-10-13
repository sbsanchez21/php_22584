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


/** sueldosay
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
console.log(`longitud de un sueldosay ${sueldos.length}`)

console.log(sueldos)
sueldos.sort() //método y tiene parentesis, modifica el sueldosay sueldos
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

butacas[2][1]  //C2  
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



/** For Each 
 * llama a una función por cada edad de un sueldosay
*/
//aumento de sueldo a cada empleado    
const aumento = 10
let sueldosEmp1 = [50000, 60000, 70000, 35000]
let sueldosEmp2 = [45000, 55000, 70000, 35000]
sueldosEmp1.forEach(aumentar)
sueldosEmp2.forEach(aumentar)

function aumentar(edad, i, sueldosay) {
    edad += aumento
    console.log(`Se aumento el sueldo del empleado ${i} a $${edad}`)
}

sueldosEmp1.forEach(mostrarSueldo) //callback
function mostrarSueldo(sueldo, indice, sueldos) {
    console.log(sueldo)
    console.log(indice)
    console.log(sueldos)
    console.log(`El empleado ${indice} tiene un sueldo de $${sueldo}`)
    
}

// simulación de lo que hace el forecha por dentro
// function forEach(mostrarSueldo) {
//     for (let i = 0; i < sueldosEmp1.length; i++) {
//         mostrarSueldo(sueldosEmp1[i],i,sueldosEmp1)
//     }
// }

// callback es enviar una función como parámetro en lugar de enviar un valor


result=0
let edades=[33,23,44,123,33]

edades.forEach(sumatoria)

function sumatoria(edad, i, sueldosay) {
    console.log(`result=${result}`)
    console.log(`edad=${edad}`)
    // prompt("Ingrese edad")
    result+=edad
    console.log(`result=${result}`)
}

let pixeles=[
    [111,11,122,22],
    [222,11,122,22],
    [333,22,1,22],
    [44,22,11,22],
]

pixeles.forEach(mostrarColor)

function mostrarColor(elemento) {
    console.log(elemento)
    // elemento.forEach(callback)
}



let listEdades=[23,12,55,51,11,32]

function esMayorEdad(edad) {
    return edad>=18
}

listEdades.forEach(esMayorEdad)

console.log(listEdades.every(esMayorEdad)); //determina si todos los elementos satisfacen una condición
console.log(listEdades.filter(esMayorEdad)); // filtra los elementos que cumplen con una condición
console.log(listEdades.some(esMayorEdad)); //si alguno cumple con la condición
console.log(listEdades.map(duplicar)); // devuelve un sueldosay al cual se le aplico una función
let listEdadesDolbe=listEdades.map(duplicar)
console.log(listEdadesDolbe); 
console.log(listEdades); 
    
function duplicar(edad) {
    return edad*2
}



/** For Each 
 * llama a una función por cada edad de un sueldosay
*/
//aumento de sueldo a cada empleado    
//for of, foreach en otros lenguajes php, java
sueldos=[50000,60000,70000,80000]
for(sueld of sueldos) {
    sueld+=10
    console.log(sueld)
}

sueldos.forEach(aumentar5000)

//el método forEach recorre todo el sueldosay sueldos y coloca
//en el parámetro sueldo el 1er valor, luego el 2do, luego el 3ro
function aumentar5000(sueldo) {
    //sueldo=50000, sueldo=60000, sueldo=70000
    sueldo+=5000 //incrementa 5000
    console.log(`Se aumento el sueldo del empleado a $${sueldo}`)
}

function descontarObraSocial(sueldo, i, sueldos) {
    // sueldo-=sueldo*30/100
    sueldo-=sueldo*.03
    console.log(`El sueldo final es ${sueldo}`)
}

sueldos=[50000,60000,70000,80000]
sueldos.forEach(descontarObraSocial)

/** Aproximación de el código interno del foreach */
function forEach(descontarObraSocial) {
    for (let i = 0; i < sueldos.length; i++) {
        /**
         * i=0, sueldos[0]=50000, sueldosay sueldos completo
         * i=1, sueldos[1]=60000, sueldosay sueldos completo
         */
        descontarObraSocial(sueldos[i], i, sueldos) 
    }
}

sueldos=[50000,60000,70000,80000]
sueldos.forEach(sumatoriaSueldos)
var sum=0

function sumatoriaSueldos(sueldo, i, sueldos) {
    /**
     * sueldo=50000, i=0, sueldos sueldosay completo
     * sueldo=60000, i=1, sueldos sueldosay completo
     * sueldo=70000, i=2, sueldos sueldosay completo
     */
    sum+=sueldo //sum=50000, sum=110000, sum=180000
}

console.log(`La sumatoria es ${sum}`)

sueldos=[134,25,15,3030,214,218,915]
result=[]
console.log(sueldos[2])

for (let i= 0; i < sueldos.length; i++) {
    console.log(sueldos[i])
    result[i]=((sueldos[i]*50)/100)+sueldos[i]
    //result[i]=res
    //console.log(result)
    console.log(result[i])
       
}

sueldos.forEach(aumentar50)
function aumentar50(sueldo, i, sueldos) {
    // sueldo=sueldo+(sueldo*50/100)
    sueldo+=sueldo*.5
    sueldos[i]=sueldo //modificando el array
    console.log(sueldo)
}

console.log(sueldos)


//Práctica de Norberto Campos
const autos=[
    {marca: 'fiat',       modelo: 'Cronos',      color: 'Rojo',       año: 2020,     Kilometraje: 13254,},
    {marca: 'Chevrolet',  modelo: 'Aveo',        color: 'Blanco',     año: 2015,     Kilometraje: 124500,},
    {marca: 'Volswagen',  modelo: 'Gol',         color: 'Rojo',       año: 2002,     Kilometraje: 235411,},
    {marca: 'Fiat',       modelo: 'Fiorino',     color: 'Rojo',       año: 2007,     Kilometraje: 95660,}
]

let total=0
let marcaabuscar= 'Fiat'
//marcaabuscar=marcaabuscar.toUpperCase()

for (let x = 0; x < autos.length; x++) {
    for (const parametro in autos[x]){
        //entramos
        console.log(autos[x][parametro])
    
        if (autos[x][parametro]==marcaabuscar) {
            total++
        }
    }   
}

console.log('La cantidad de: '+marcaabuscar)
console.log(' es de:'+total)


// métodos de los arrays
edades=[23,33,15,85,66,24]

//función callback
function esMayorDeEdad(edad, i, edades) {
    /**
     * edad=23, return true
     * edad=12, return false
     * edad=15, return false
     * edad=85, return true
     */
    return edad>=18
}

let sonTodosMayores = edades.every(esMayorDeEdad)
console.log(`Son todos mayores de edad=${sonTodosMayores}`)

let hayAlgunoMayorDeEdad=edades.some(esMayorDeEdad)
console.log(`Hay algunos mayores de edad=${hayAlgunoMayorDeEdad}`)


edades=[23,12,15,85,66,24]
function esMenorEdad(edad) {
    return edad<18
}

let hayUnMenor=edades.some(esMenorEdad)
console.log(`Advertencia hay un menor de edad=${hayUnMenor}`)

let edadesMayores=edades.filter(esMayorDeEdad)
console.log(edadesMayores)

let edadesMenores=edades.filter(esMenorEdad)
console.log(edadesMenores)

edades.find(esMenorEdad) //12


// reduce reemplaza la sumatoria
sueldos=[50000,60000,70000,80000]
sueldos.forEach(sumatoriaSueldos)
var sum=0
function sumatoriaSueldos(sueldo, i, sueldos) {
    /**
     * sueldo=50000, i=0, sueldos sueldosay completo
     * sueldo=60000, i=1, sueldos sueldosay completo
     * sueldo=70000, i=2, sueldos sueldosay completo
     */
    sum+=sueldo //sum=50000, sum=110000, sum=180000
}

console.log(`La sumatoria es ${sum}`)


sueldos=[50000,60000,70000,80000]
var suma=sueldos.reduce(sumatoriaReduce)
console.log(suma)
function sumatoriaReduce(suma, sueldo, i, sueldos) {
    /**
     * suma=50000, sueldo=50000, i=0, sueldos array completo
     * suma=110000, sueldo=60000, i=1, sueldos array completo
     */
    suma+=sueldo
    
    return suma
}