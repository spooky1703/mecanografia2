// Referencias a elementos
const palabras = palabrasArray;
const palabraContainer = document.getElementById("palabraActual");
const input = document.querySelector("input");
const correctasElement = document.querySelector("#correctas span");
const incorrectasElement = document.querySelector("#incorrectas span");
const ppmElement = document.querySelector("#ppm span");
const empezarBoton = document.getElementById("empezar");
const barraProgreso = document.querySelector("#barraProgreso div");
const finalContainer = document.getElementById("final");
const reiniciarBoton = document.getElementById("reiniciar");
const volverBoton = document.getElementById("volver");

// Otras variables
let listaLetras;
let indiceActual = 0;
let letrasCorrectas;
let letrasIncorrectas;
let palabrasTerminadas;
let ppm;
let jugando = false;
const tiempoJuego = 60;  // Duración del juego en segundos
document.documentElement.style.setProperty("--tiempo", tiempoJuego + 's');

// Funciones
function nuevaPalabra() {
    indiceActual = 0;
    const nPalabraElegida = Math.floor(Math.random() * (palabras.length - 1));
    const palabraElegida = palabras[nPalabraElegida];
    borrarHijos(palabraContainer);
    listaLetras = [];
    for (let i = 0; i < palabraElegida.length; i++) {
        const letraElement = document.createElement("span");
        letraElement.textContent = palabraElegida[i];
        letraElement.classList.add("aparecer");
        palabraContainer.appendChild(letraElement);
        listaLetras.push(letraElement);
        letraElement.addEventListener("animationend", () => {
            letraElement.classList.toggle("aparecer", false);
        });
    }
}

function empezar() {
    jugando = true;
    empezarBoton.classList.add("escondido");
    palabraContainer.classList.remove("escondido");
    reset();
    nuevaPalabra();
    barraProgreso.classList.add("completarTiempo");
    finalContainer.classList.add("escondido");
    listaLetras[0].classList.add("letraActual");
    setTimeout(terminar, tiempoJuego * 1000);  // Terminar el juego después del tiempo de juego
}

function terminar() {
    jugando = false;
    palabraContainer.classList.add("escondido");
    finalContainer.classList.remove("escondido");
    barraProgreso.classList.remove("completarTiempo");
    ppm = palabrasTerminadas * (60 / tiempoJuego);
    ppmElement.textContent = ppm;
}

function reset() {
    letrasCorrectas = 0;
    letrasIncorrectas = 0;
    ppm = 0;
    palabrasTerminadas = 0;
    correctasElement.textContent = letrasCorrectas;
    incorrectasElement.textContent = letrasIncorrectas;
}

function borrarHijos(element) {
    while (element.firstChild) {
        element.removeChild(element.firstChild);
    }
}

function crearLetraEfecto(element) {
    const letra = element.textContent;
    const posicionLetra = element.getBoundingClientRect();
    element.classList.add("invisible");
    const nuevaLetra = document.createElement("span");
    nuevaLetra.textContent = letra;
    nuevaLetra.style = `
        --top: ${posicionLetra.top}px;
        --left: ${posicionLetra.left}px;
    `;
    nuevaLetra.classList.add("desaparecer");
    document.body.appendChild(nuevaLetra);
    nuevaLetra.addEventListener("animationend", () => {
        document.body.removeChild(nuevaLetra);
    });
}

// Eventos
barraProgreso.addEventListener("animationend", () => {
    terminar();
});
document.getElementById("empezar").addEventListener("click", () => empezar());
reiniciarBoton.addEventListener("click", () => empezar());
volverBoton.addEventListener("click", () => window.location.href = "../index.php");
input.addEventListener("input", (event) => {
    if (!jugando) {
        if (event.data === " ") empezar();
        return;
    }
    if (listaLetras[indiceActual].textContent === event.data) {
        crearLetraEfecto(listaLetras[indiceActual]);
        listaLetras[indiceActual].classList.remove("letraActual");
        indiceActual++;
        letrasCorrectas++;
        correctasElement.textContent = letrasCorrectas;
        if (indiceActual === listaLetras.length) {
            palabrasTerminadas++;
            nuevaPalabra();
        } else {
            listaLetras[indiceActual].classList.add("letraActual");
        }
    } else {
        letrasIncorrectas++;
        incorrectasElement.textContent = letrasIncorrectas;
    }
});
input.addEventListener("blur", () => input.focus());

// Ejecución
input.focus();
