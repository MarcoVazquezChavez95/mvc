const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {
    boton.addEventListener("click", function () {
        const matricula = this.dataset.matricula;
        const confirm = window.confirm('Estas seguro de que quieres eliminar al alumno?' + matricula + "?");
        if (confirm) {
            httRequest("http://localhost/mvc/consulta/eliminarAlumno/" + matricula, function () {
                //console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;
                const tbody = document.querySelector("#tbody-alumnos");
                const fila = document.querySelector("#fila-" + matricula);
                tbody.removeChild(fila);
            });
        }
    });
});

function httRequest(url, callback) {
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            callback.apply(http);
        }
    }
}