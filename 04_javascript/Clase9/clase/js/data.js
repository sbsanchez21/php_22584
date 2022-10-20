console.log(document.querySelector(".bg-info"))
console.log(document.querySelector(".bg-danger"))
console.log(document.querySelector(".text-center"))
console.log(document.querySelectorAll(".text-center"))
console.log(document.querySelector(".bg-danger.p-3"))
console.log(document.querySelector(".bg-danger.p-4.m-1"))
console.log(document.querySelector("#mensaje3"))

let contador=0
function addInput() {

    let datos=document.querySelector("#datos")
    
    let input=document.createElement("input")
    input.setAttribute("type","text")

    contador++
    input.setAttribute("id",`nombre${contador}`)
    input.setAttribute("class","form-control mb-3")
    input.setAttribute("onfocus","this.className='form-control mb-3 bg-info'")
    input.setAttribute("onblur","this.className='form-control mb-3 bg-light'")
    input.setAttribute("placeholder","INput nuevo")

    //agrega un evento click al elemento input y llama a la función cambiarBG
    input.addEventListener("click", cambiarBgColor)
    // input.addEventListener("mouseover", )

    datos.appendChild(input)
}

function cambiarBgColor() {
    document.body.className="bg-danger"
}

function removeInput(id) {
    let input=document.getElementById(id)
    let datos=document.querySelector("#datos")
    datos.removeChild(input)
}