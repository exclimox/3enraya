
window.onload = function () {
    document.getElementById("btnCambiarP1").onclick = function () {
        (document.getElementById("parrafo")).innerHTML = document.getElementById("texto").value //cambiar el texto del parrafo 
        document.getElementById("parrafo").setAttribute("class", "negro"); //cambiar al color negroo
        document.getElementById("texto").setAttribute("type","number");
    }
}
