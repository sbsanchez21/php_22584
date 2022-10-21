
window.onload= function () {

        // simular que trajimos datos de la base de datos
        let listAlumnos = [
            [1, "Pedro", "Suarez", 25666345],
            [2, "Josefa", "Rodriguez", 25666345],
            [3, "Nicanor", "Paredes", 25666345],
            [4, "Jacinto", "Chiclana", 25666345],
            [5, "Santos", "Vega", 25666345],
            [6, "Enrique Santos", "Dicepolo", 25666345],
            [7, "Enrique Santos", "Dicepolo", 25666345],
            [8, "Carlos", "Vega", 25666345],
            [9, "Enrique Santos", "Dicepolo", 25666345],
            [10, "Enrique Santos", "Dicepolo", 366556546],
            [11, "Jose", "Antonio", 33555555],
            [12, "Marta", "Gonzalez", 34444455],
        ];

        var body = document.getElementsByTagName("body")[0]
      
        var tabla   = document.createElement("table")
        tabla.setAttribute("class", "table table-striped ")

        // encabezado
        var thead   = document.createElement("thead")
        thead.setAttribute("class", "table-dark")
        var tr = document.createElement("tr")

        var th = document.createElement("th")
        var textoth = document.createTextNode("ID")
        th.appendChild(textoth)
        tr.appendChild(th)

        var th = document.createElement("th")
        var textoth = document.createTextNode("Nombre")
        th.appendChild(textoth)
        tr.appendChild(th)

        var th = document.createElement("th")
        var textoth = document.createTextNode("Apellido")
        th.appendChild(textoth)
        tr.appendChild(th)
        
        var th = document.createElement("th")
        var textoth = document.createTextNode("DNI")
        th.appendChild(textoth)
        tr.appendChild(th)        

        var th = document.createElement("th")
        var textoth = document.createTextNode("")
        th.appendChild(textoth)
        tr.appendChild(th)        

        thead.appendChild(tr)
        tabla.appendChild(thead)

        var tblBody = document.createElement("tbody")
      
        for (let i = 0; i < listAlumnos.length; i++) {
            // console.log(listAlumnos.length)

            var tr = document.createElement("tr")
            tr.setAttribute(`id`, `tr${i}`)

            var td = document.createElement("td")
            var textotd = document.createTextNode(listAlumnos[i][0])
            td.appendChild(textotd)
            tr.appendChild(td)

            var td = document.createElement("td")
            var div=document.createElement("div")
            div.setAttribute("id", `txtnom${i}`)
            div.setAttribute("onclick", `habilitarInput('nom${i}')`)
            var textotd = document.createTextNode(listAlumnos[i][1])
            div.appendChild(textotd)
            td.appendChild(div)

            var div=document.createElement("div")
            var input=document.createElement("input")
            input.setAttribute("type","text")
            input.setAttribute(`name`,`nom${i}`)
            input.setAttribute(`id`,`nom${i}`)
            input.setAttribute(`class`,`form-control`)
            input.setAttribute(`style`,`display: none`)
            input.setAttribute(`onkeyup`,`updTexto('txtnom${i}', this.value)`)

            div.appendChild(input)
            td.appendChild(div)

            tr.appendChild(td)            
            
            var td = document.createElement("td")
            var textotd = document.createTextNode(listAlumnos[i][2])
            td.appendChild(textotd)
            tr.appendChild(td)

            var td = document.createElement("td")
            var textotd = document.createTextNode(listAlumnos[i][3])
            td.appendChild(textotd)
            tr.appendChild(td)    
            
            var td = document.createElement("td")
            var span=document.createElement("span")
            span.setAttribute("onclick",`habilitarAll('tr${i}')`)
            span.setAttribute("class",`m-1`)
            var iTag = document.createElement("i")
            iTag.setAttribute("class", "fa-solid fa-pen")
            span.appendChild(iTag)
            td.appendChild(span)
            tr.appendChild(td)     
            
            var span=document.createElement("span")
            span.setAttribute("onclick",`eliminarFila('tr${i}')`)
            span.setAttribute("class",`m-1`)
            var iTag = document.createElement("i")
            iTag.setAttribute("class", "fa-solid fa-trash-can")
            span.appendChild(iTag)
            td.appendChild(span)
            tr.appendChild(td)                

            tblBody.appendChild(tr)
        }
      
        tabla.appendChild(tblBody)

        body.appendChild(tabla)

      }    




function habilitarAll(id) {
    document.querySelector(`input#nom${id}`).style.display="block"
    document.querySelector(`input#ape${id}`).style.display="block"
    document.querySelector(`input#dni${id}`).style.display="block"

}

function habilitarInput(id) {
    document.getElementById(id).style.display="block"
}

function eliminarFila(fila) {
    document.getElementById(fila).style.display="none"
    
}

function updTexto(id,texto) {
    document.getElementById(id).innerHTML=texto
    
}

document.addEventListener('keypress', function (e) {
    let inputs=document.getElementsByTagName("input")
    if (e.key === 'Enter') {
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].style.display="none"
            
        }
    }      
})
