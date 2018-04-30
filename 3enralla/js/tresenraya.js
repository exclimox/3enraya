window.onload = function () {
    var turno = true
    var juego = ["", "", "", "", "", "", "", "", ""];
    var el = document.getElementById("body");
    el.setAttribute("style", "height:" + window.innerHeight + "px");

    var celdas = document.getElementsByClassName("celda");
    for (var celda of celdas) {
        celda.onclick = function () {
            if (turno) {
                this.innerHTML = "x";
                turno = false;
                juego[this.id] = "x"
            } else {
                this.innerHTML = "o"
                turno = true;
                juego[this.id] = "o";
            }
            comprobar(juego)
        }
    }

}

function comprobar(juego) {
    if (juego[0] == juego[1] && (juego[1] == juego[2]) && juego[0] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    if (juego[0] == juego[4] && (juego[4] == juego[8]) && juego[0] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    if (juego[0] == juego[3] && (juego[3] == juego[6]) && juego[0] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    if (juego[1] == juego[4] && (juego[4] == juego[7]) && juego[1] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    if (juego[2] == juego[5] && (juego[5] == juego[8]) && juego[2] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    if (juego[2] == juego[4] && (juego[4] == juego[6]) && juego[2] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    if (juego[3] == juego[4] && (juego[4] == juego[5]) && juego[3] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    if (juego[6] == juego[7] && (juego[7] == juego[8]) && juego[6] != "") {
        alert("Ha ganado: " + juego[0]);
        vaciar();
    }
    var empate = true;
    for (let vacias in juego) {

        if (juego[vacias] == "") {
            empate = false;
        }

    }
    if (empate) {
        alert("Empate");
    }
}

function vaciar() {
    var celdas = document.getElementsByClassName("celda");
    for (let elemento of celdas) {
        vacio.innerHTML = "";


    }
    juego = ["", "", "", "", "", "", "", "", ""];
}