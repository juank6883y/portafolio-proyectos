// --- Lista de plantas con nombre, descripción e imagen ---
const plantasPagina1 = [
    { nombre: "Acelga", descripcion: "Planta de hoja verde rica en vitaminas, ideal para ensaladas y guisos, apreciada por su sabor suave y terroso.", imagen: "imagenes/acelga.jpg" },
    { nombre: "Aurora", descripcion: "Planta ornamental con hojas coloridas, rica en hierro y vitaminas, que se cultiva fácilmente en huertas urbanas.", imagen: "imagenes/aurora.jpg" },
    { nombre: "Campanilla morada", descripcion: "Hierba aromática con flores moradas, utilizada en la cocina para dar un toque único de sabor.", imagen: "imagenes/campanilla-morada.jpg" },
    { nombre: "Cenizo", descripcion: "Arbusto resistente que se adapta bien a suelos secos, ideal para paisajismo debido a su follaje plateado y atractivo.", imagen: "imagenes/cenizo.jpg" },
    { nombre: "Cosmos", descripcion: "Flor de colores vibrantes que atrae a polinizadores, perfecta para embellecer jardines y huertas.", imagen: "imagenes/cosmos.jpg" },
    { nombre: "Eneldo", descripcion: "Planta de hojas finas y aroma característico, excelente para condimentar pescados, ensaladas y sopas.", imagen: "imagenes/eneldo.jpg" },
    { nombre: "Frambuesa", descripcion: "Fruto rojo y jugoso, cultivado en arbustos que requieren de sol y humedad.", imagen: "imagenes/frambuesa.jpg" },
    { nombre: "Fríjol", descripcion: "Leguminosa rica en proteínas y fibra, cultivada en vides que requieren espacio y calor.", imagen: "imagenes/frijol.jpg" },
    { nombre: "Helecho pluma", descripcion: "Planta ornamental de hojas finas y delicadas, ideal para interiores y jardines sombreados.", imagen: "imagenes/helecho-pluma.jpg" },
    { nombre: "Hierba de los cantores", descripcion: "Planta perenne conocida por su uso en medicina tradicional, ayuda en la mejora de la voz.", imagen: "imagenes/hierba-de-los-cantores.jpg" },
    { nombre: "Incienso", descripcion: "Arbusto aromático usado en medicina tradicional y aceites esenciales.", imagen: "imagenes/incienso.jpg" },
    { nombre: "Lechuga", descripcion: "Hortaliza de hojas verdes que se consume cruda en ensaladas, rica en agua y nutrientes.", imagen: "imagenes/lechuga.jpg" },
    { nombre: "Lengua de suegra", descripcion: "Planta resistente de hojas largas y puntiagudas, popular como planta de interior.", imagen: "imagenes/lengua-de-suegra.jpg" },
    { nombre: "Lulos", descripcion: "Fruto cítrico originario de Sudamérica, con un sabor ácido y refrescante.", imagen: "imagenes/lulos.jpg" },
    { nombre: "Maíz", descripcion: "Cultivo esencial en la alimentación mundial, utilizado para harina, tortillas y más.", imagen: "imagenes/maíz.jpg" },
    { nombre: "Manzano", descripcion: "Árbol frutal que produce manzanas, ideales para jugos, postres y consumo directo.", imagen: "imagenes/manzano.jpg" },
];

// --- Lista de plantas página 2 ---
const plantasPagina2 = [
    { nombre: "Marrubio", descripcion: "Planta medicinal utilizada para tratar problemas respiratorios y digestivos.", imagen: "imagenes/marrubio.jpg" },
    { nombre: "Menta", descripcion: "Hierba aromática muy usada en infusiones, con propiedades digestivas y refrescantes.", imagen: "imagenes/menta.jpg" },
    { nombre: "Mirto", descripcion: "Arbusto mediterráneo con hojas aromáticas y bayas medicinales.", imagen: "imagenes/mirto.jpg" },
    { nombre: "Mostaza india", descripcion: "Planta de semillas picantes, empleadas en la cocina y con propiedades antioxidantes.", imagen: "imagenes/mostaza-india.jpg" },
    { nombre: "Nudosilla", descripcion: "Planta trepadora usada en medicina tradicional para aliviar dolores.", imagen: "imagenes/nudosilla.jpg" },
    { nombre: "Pascuita", descripcion: "Arbusto ornamental de flores blancas, utilizado en festividades religiosas.", imagen: "imagenes/pascuita.jpg" },
    { nombre: "Perejil", descripcion: "Hierba culinaria muy popular, rica en vitaminas y minerales.", imagen: "imagenes/perejil.jpg" },
    { nombre: "Rosa", descripcion: "Flor ornamental por excelencia, también usada en perfumes y cosmética.", imagen: "imagenes/rosa.jpg" },
    { nombre: "Ruda", descripcion: "Planta con fuerte aroma, empleada en rituales y medicina tradicional.", imagen: "imagenes/ruda.jpg" },
    { nombre: "Salvia", descripcion: "Hierba medicinal con propiedades antiinflamatorias y digestivas.", imagen: "imagenes/salvia.jpg" },
    { nombre: "Santolina", descripcion: "Planta aromática usada como repelente natural y en infusiones.", imagen: "imagenes/santolina.jpg" },
    { nombre: "Sedo bastardo", descripcion: "Planta suculenta que crece en suelos áridos, usada como ornamental.", imagen: "imagenes/sedo-bastardo.jpg" },
    { nombre: "Tomillo", descripcion: "Planta aromática y medicinal, ampliamente usada en cocina mediterránea.", imagen: "imagenes/tomillo.jpg" },
    { nombre: "Uña de gato", descripcion: "Planta trepadora con propiedades medicinales para fortalecer el sistema inmune.", imagen: "imagenes/uña-de-gato.jpg" },
    { nombre: "Yacón", descripcion: "Planta andina de raíces dulces, usada como alimento y con beneficios digestivos.", imagen: "imagenes/yacón.jpg" }
];

// --- Función genérica para mostrar plantas ---
function mostrarPlantas(listaPlantas) {
    const catalogo = document.getElementById("catalogo");
    catalogo.innerHTML = "";

    listaPlantas.forEach(planta => {
        const div = document.createElement("div");
        div.classList.add("planta");
        div.innerHTML = `
            <div class="imagen">
                <img src="${planta.imagen}" alt="${planta.nombre}">
            </div>
            <div class="texto">
                <h3>${planta.nombre}</h3>
                <p>${planta.descripcion}</p>
            </div>
        `;
        catalogo.appendChild(div);
    });

    // 👇 Cada vez que se dibujen las plantas, activamos el modal
    activarModalImagenes();
}

let indiceActual = 0;
let listaImagenes = [];
let modal, modalImg, captionText;

// --- Función para mostrar una imagen en el modal ---
function abrirModalPorIndice(index) {
    indiceActual = (index + listaImagenes.length) % listaImagenes.length; // ciclo circular
    modal.style.display = "block";
    modalImg.src = listaImagenes[indiceActual].src;
    captionText.innerHTML = listaImagenes[indiceActual].alt;
}

// --- Funciones globales de navegación ---
function mostrarAnterior() {
    abrirModalPorIndice(indiceActual - 1);
}

function mostrarSiguiente() {
    abrirModalPorIndice(indiceActual + 1);
}

// --- Función para activar el modal en las imágenes ---
function activarModalImagenes() {
    modal = document.getElementById("modal");
    modalImg = document.getElementById("modal-img");
    captionText = document.getElementById("caption");
    const btnCerrar = document.getElementById("cerrar");
    const btnAnterior = document.getElementById("anterior");
    const btnSiguiente = document.getElementById("siguiente");

    listaImagenes = Array.from(document.querySelectorAll(".planta img"));

    listaImagenes.forEach((img, index) => {
        img.addEventListener("click", () => {
            abrirModalPorIndice(index);
        });
    });

    // Botón cerrar
    btnCerrar.onclick = () => modal.style.display = "none";

    // Botones de navegación
    btnAnterior.onclick = mostrarAnterior;
    btnSiguiente.onclick = mostrarSiguiente;

    // Cerrar al hacer clic fuera
    modal.onclick = (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    };
}

// --- Detectar qué página está abierta ---
window.onload = function() {
    const archivo = window.location.pathname;
    if (archivo.includes("plantas2.html")) {
        mostrarPlantas(plantasPagina2);
    } else {
        mostrarPlantas(plantasPagina1);
    }
};

// --- Eventos de teclado ---
document.addEventListener("keydown", function(event) {
  if (modal && modal.style.display === "block") {
    if (event.key === "ArrowLeft") {
      mostrarAnterior();
    } else if (event.key === "ArrowRight") {
      mostrarSiguiente();
    } else if (event.key === "Escape") { 
      modal.style.display = "none";
    }
  }
});