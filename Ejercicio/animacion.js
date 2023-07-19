function actualizarDepartamentos() {
    var pais = document.getElementById("pais").value;
    var departamentoSelect = document.getElementById("departamento");

    // Eliminamos las opciones anteriores
    while (departamentoSelect.options.length > 0) {
        departamentoSelect.remove(0);
    }

    // Aquí debes tener una función que obtenga los departamentos del país ingresado desde tu base de datos
    // y los almacene en un array o un objeto JSON.
    var departamentosDelPais = obtenerDepartamentos(pais);

    // Creamos las opciones en el select
    for (var i = 0; i < departamentosDelPais.length; i++) {
        var option = document.createElement("option");
        option.text = departamentosDelPais[i];
        departamentoSelect.add(option);
    }
}

// Esta función simula la obtención de los departamentos del país ingresado.
// Puedes reemplazar esta función con una llamada AJAX a tu servidor para obtener los departamentos reales.
function obtenerDepartamentos(pais) {
    var departamentos = [];
    if (pais === "Colombia") {
        departamentos = ["Antioquia", "Bogotá D.C.", "Valle del Cauca", "Cundinamarca", "Santander", "Atlántico", "Nariño", "Córdoba"];
    } else if (pais === "Peru") {
        departamentos = ["Lima", "Arequipa", "Cusco", "Piura", "La Libertad", "Lambayeque", "Junín", "Ancash"];
    } else if (pais==="Ecuador"){
        departamentos = ["Azuay", "Bolívar", "Cañar", "Carchi", "Chimborazo", "El Oro", "Esmeraldas", "Guayas"];
    }// Agrega más países y sus departamentos según tus necesidades.

    return departamentos;
}

function mostrarDatos() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var pais = document.getElementById("pais").value;
    var departamento = document.getElementById("departamento").value;

    // Mostramos los datos en la tabla
    document.getElementById("mostrarNombre").innerText = nombre;
    document.getElementById("mostrarApellido").innerText = apellido;
    document.getElementById("mostrarPais").innerText = pais;
    document.getElementById("mostrarDepartamento").innerText = departamento;

    // Mostramos la tabla oculta
    document.getElementById("tablaDatos").style.display = "block";
}

