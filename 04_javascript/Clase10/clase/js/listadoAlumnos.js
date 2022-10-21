window.onload= function () {
    let listAlumnos = [
        [1, "Pedro", "Suarez"],
        [2, "Josefa", "Rodriguez"],
        [3, "Nicanor", "Paredes"],
        [4, "Jacinto", "Chiclana"],
        [5, "Santos", "Vega"],
        [6, "Enrique Santos", "Dicepolo"],
        [7, "Enrique Santos", "Dicepolo"],
        [8, "Carlos", "Vega"],
        [9, "Enrique Santos", "Dicepolo"],
        [10, "Enrique Santos", "Dicepolo"],
        [11, "Jose", "Antonio"],
        [12, "Marta", "Gonzalez"],
    ];

    let body=document.body

    let table=document.createElement("table")
    table.setAttribute("class","table table-striped")

    let thead=document.createElement("thead")
    thead.setAttribute("class","table-dark")

    let tr=document.createElement("tr")
    let th1=document.createElement("th")
    let texto1=document.createTextNode("#ID")
    th1.appendChild(texto1)
    tr.appendChild(th1)

    let th2=document.createElement("th")
    let texto2=document.createTextNode("nombre")
    th2.appendChild(texto2)
    tr.appendChild(th2)    

    let th3=document.createElement("th")
    let texto3=document.createTextNode("apellido")
    th3.appendChild(texto3)
    tr.appendChild(th3) 
    
    let th4=document.createElement("th")
    let texto4=document.createTextNode("")
    th3.appendChild(texto4)
    tr.appendChild(th4)      

    thead.appendChild(tr)
    table.appendChild(thead)

    let tbody=document.createElement("tbody")

    for (let i = 0; i < listAlumnos.length; i++) {
        let tr=document.createElement("tr")
        tr.setAttribute("id",`tr${i}`)

        let td1=document.createElement("td")
        let texto1=document.createTextNode(listAlumnos[i][0])
        td1.appendChild(texto1)
        tr.appendChild(td1)        

        let td2=document.createElement("td")
        let texto2=document.createTextNode(listAlumnos[i][1])
        td2.appendChild(texto2)
        tr.appendChild(td2)        

        let td3=document.createElement("td")
        let texto3=document.createTextNode(listAlumnos[i][2])
        td3.appendChild(texto3)
        tr.appendChild(td3)        
        
        let td4 = document.createElement("td")
        let span=document.createElement("span")
        span.setAttribute("onclick",`eliminarFila('tr${i}')`)
        span.setAttribute("class",`m-1`)
        let iTag = document.createElement("i")
        iTag.setAttribute("class", "fa-solid fa-trash-can")
        span.appendChild(iTag)
        td4.appendChild(span)
        tr.appendChild(td4)                

        tbody.appendChild(tr)
    }
    table.appendChild(tbody)

    body.appendChild(table)
}

function eliminarFila(fila) {
    document.getElementById(fila).style.display="none"

    //todo eliminarlo con removeChild()
    
}