<script>
    // Función para cargar el iframe
    function cargarIframe(url) {
        document.getElementById("miIframe").src = url;
    }
    // Función para manejar el envío del formulario
    document.getElementById("citaForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita el envío del formulario
        // Obtener datos del formulario
        const nombre = document.getElementById("nombre").value;
        const email = document.getElementById("email").value;
        const telefono = document.getElementById("telefono").value;
        const fecha = document.getElementById("fecha").value;
        // Crear objeto de cita
        const cita = {
            nombre,
            email,
            telefono,
            fecha
        };
        // Obtener citas del localStorage o inicializar un array vacío
        let citas = JSON.parse(localStorage.getItem("citas")) || [];
        // Agregar nueva cita al array
        citas.push(cita);
        // Guardar el array actualizado en localStorage
        localStorage.setItem("citas", JSON.stringify(citas));
        // Actualizar la lista de citas mostradas
        mostrarCitas();
        // Limpiar el formulario
        document.getElementById("citaForm").reset();
    });
    // Función para mostrar las citas en la lista
    function mostrarCitas() {
        const listaCitas = document.getElementById("listaCitas");
        listaCitas.innerHTML = ""; // Limpiar la lista antes de mostrar
        // Obtener citas del localStorage
        let citas = JSON.parse(localStorage.getItem("citas")) || [];
        // Iterar sobre las citas y agregarlas a la lista
        citas.forEach(cita => {
            const li = document.createElement("li");
            li.textContent = `${cita.nombre} - ${cita.email} - ${cita.telefono} - ${cita.fecha}`;
            listaCitas.appendChild(li);
        });
    }
    // Mostrar citas al cargar la página
    mostrarCitas();
</script>