function agregarValor() {
    var valor = document.getElementById("valor").value;
    var output = document.getElementById("output");
    output.value = "Valor agregadoas: " + valor;
}

function calcularEdad() {
    var fechaCumpleanos = new Date(document.getElementById("cumple").value);
    var fechaActual = new Date();
    
    var edad = fechaActual.getFullYear() - fechaCumpleanos.getFullYear();
    var msn = "";
    
    if (fechaActual.getMonth() < fechaCumpleanos.getMonth() || 
        (fechaActual.getMonth() === fechaCumpleanos.getMonth() && fechaActual.getDate() < fechaCumpleanos.getDate())) {
        edad--;
    }
    
    if (edad <= 17) {
        msn = "eres muy joven";

    } else {
        msn = edad;
    }

    document.getElementById("resultadoEdad").textContent = msn;
}

