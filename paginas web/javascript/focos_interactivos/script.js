// Selección de focos y elementos
const bulbs = document.querySelectorAll('.bulb');
const switchBtn = document.getElementById('switch');
const fraseDisplay = document.getElementById('frase');

// Lista de frases motivacionales para el interruptor
const frasesAleatorias = [
    "Cree en ti y todo será posible.",
    "El camino al éxito está lleno de desafíos.",
    "Nunca es tarde para perseguir tus sueños.",
    "La disciplina es el puente entre metas y logros.",
    "Haz lo que puedas con lo que tengas."
];

// Función para iluminar foco individual y mostrar frase
bulbs.forEach(bulb => {
    bulb.addEventListener('mouseenter', () => {
        bulb.classList.add('on');
        fraseDisplay.textContent = bulb.dataset.frase;
    });
    bulb.addEventListener('mouseleave', () => {
        bulb.classList.remove('on');
        fraseDisplay.textContent = '';
    });
});

// Función para alternar todos los focos con interruptor
let allOn = false;

switchBtn.addEventListener('click', () => {
    allOn = !allOn;
    bulbs.forEach(bulb => {
        if(allOn) {
            bulb.classList.add('on');
        } else {
            bulb.classList.remove('on');
        }
    });

    // Mostrar frase aleatoria si están todos encendidos
    if(allOn) {
        const randomIndex = Math.floor(Math.random() * frasesAleatorias.length);
        fraseDisplay.textContent = frasesAleatorias[randomIndex];
        switchBtn.textContent = "Apagar todos los focos";
    } else {
        fraseDisplay.textContent = '';
        switchBtn.textContent = "Encender todos los focos";
    }
});
