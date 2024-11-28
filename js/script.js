//TESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTESTTESTEST


/* // Seleccionar elementos necesarios
const addButton = document.querySelector(".button-bar button"); // Botón para añadir una tarea
const columns = document.querySelectorAll(".column ul"); // Las listas de tareas en las columnas

// Función para añadir una tarea a una columna
function addTask(columnIndex, taskText) {
    const taskItem = document.createElement("li"); // Crea un nuevo elemento de lista
    taskItem.textContent = taskText; // Agrega el texto de la tarea

    // Añadir funcionalidad de eliminar al hacer clic
    taskItem.addEventListener("click", () => {
        taskItem.remove(); // Elimina la tarea al hacer clic en ella
    });

    // Añadir la tarea a la columna especificada
    columns[columnIndex].appendChild(taskItem);
}

// Evento para añadir una tarea
addButton.addEventListener("click", () => {
    const taskText = prompt("Ingresa una nueva tarea:");
    if (taskText) {
        addTask(0, taskText); // Agrega la tarea en la primera columna (puedes cambiarlo)
    }
});
 */


const BOTONAÑADIR = document.getElementById("crearTarea");
const BOTONEMPEZAR = document.getElementById("empezarTarea");
const BOTONFINALIZAR = document.getElementById("finalizarTarea");
const BOTONREPETIR = document.getElementById("repetirTarea");

BOTONAÑADIR.addEventListener("click", () => {
    console.log("EL BOTON CREAR TAREA FUNCIONA");
});
BOTONEMPEZAR.addEventListener("click", () => {
    console.log("EL BOTON EMPEZAR TAREA FUNCIONA");
});
BOTONFINALIZAR.addEventListener("click", () => {
    console.log("EL BOTON FINALIZAR TAREA FUNCIONA");
});
BOTONREPETIR.addEventListener("click", () => {
    console.log("EL BOTON REPETIR TAREA FUNCIONA");
});