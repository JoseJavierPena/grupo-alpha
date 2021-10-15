let filas = 32
let columnas = 68
let lados = 20

tablero()

estado()

function tablero() {

    let html = "<table cellpadding=0 cellspacing=0 id='generaltablero'>"
    for (let y = 0; y < filas; y++) {
        html += "<tr>"

        for (let x = 0; x < columnas; x++) {
            html += '<td id="celula-${x+"-"+y}" onmouseup="estado(${x}, ${y})">'
            html += "</td>"


        }
        html += "</tr>"

    }

    html += "<table>"

    let contenedor = document.getElementById("control")
    contenedor.innerHTML = html
    let generaltablero = document.getElementById("generaltablero")
    generaltablero.style.width = lados * columnas + "px"
    generaltablero.style.height = lados * filas + "px"



}

function tablero() {
    let html = "<table cellpadding=0 cellspacing=0 id='generarTablero'>"
    for (let y = 0; y < filas; y++) {
        html += "<tr>"
        for (let x = 0; x < columnas; x++) {
            html += `<td id="celula-${x + "-" + y}" onmouseup="estado(${x}, ${y});mapa_complejidad = []">`
            html += "</td>"
        }
        html += "</tr>"
    }
    html += "</table>"
    let contenedor = document.getElementById("control")
    contenedor.innerHTML = html
    let tablero = document.getElementById("tablero")
    tablero.style.width = lado * columnas + "px"
    tablero.style.height = lado * filas + "px"
    centrar()
}


function estado(x, y) {

    let celula = document.getElementById(`celula-${x + "-" + y}`)
    if (celula.style.background != "black") {
        celula.style.background = "black"
    } else {
        celula.style.background = ""
    }

}