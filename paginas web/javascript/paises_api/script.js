// script.js
const input = document.getElementById('paisInput');
const btnBuscar = document.getElementById('btnBuscar');
const btnOtro = document.getElementById('btnOtro');
const resultadoDiv = document.getElementById('resultado');
const mensajeError = document.getElementById('mensajeError');

// Función para quitar tildes/acentos
function removeDiacritics(str) {
  return str.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
}

// Función para traducir nombre en español a inglés usando el diccionario
function traducirPais(nombre) {
  nombre = removeDiacritics(nombre.toLowerCase());
  return traducciones[nombre] || nombre;
}

async function buscarPais() {
  mensajeError.textContent = "";
  resultadoDiv.style.display = "none";
  resultadoDiv.innerHTML = "";

  let q = input.value.trim();
  if (!q) {
    mensajeError.textContent = "Por favor ingresa un país.";
    return;
  }

  const nombrePais = traducirPais(q);

  try {
    const response = await fetch(`https://restcountries.com/v3.1/name/${encodeURIComponent(nombrePais)}`);
    if (!response.ok) throw new Error("No se encontró el país");

    const data = await response.json();
    const pais = data[0];

    const nombre = pais.translations?.spa?.common || pais.name?.common || "No disponible";
    const capital = pais.capital ? pais.capital[0] : "No disponible";
    const region = pais.region || "No disponible";
    const poblacion = pais.population ? pais.population.toLocaleString('es-ES') : "No disponible";
    const idiomas = pais.languages ? Object.values(pais.languages).join(', ') : "No disponible";
    const moneda = pais.currencies ? Object.values(pais.currencies)[0].name : "No disponible";
    const bandera = pais.flags?.png || pais.flags?.svg || "";

    resultadoDiv.innerHTML = `
      ${bandera ? `<img class="flag" src="${bandera}" alt="Bandera de ${nombre}">` : ''}
      <h3 style="margin:6px 0 8px 0">${nombre}</h3>
      <p><strong>Capital:</strong> ${capital}</p>
      <p><strong>Región:</strong> ${region}</p>
      <p><strong>Población:</strong> ${poblacion}</p>
      <p><strong>Idioma(s):</strong> ${idiomas}</p>
      <p><strong>Moneda:</strong> ${moneda}</p>
    `;
    resultadoDiv.style.display = 'block';

  } catch (error) {
    mensajeError.textContent = `❌ Error: ${error.message}`;
  }
}

function resetForm() {
  input.value = "";
  resultadoDiv.style.display = 'none';
  resultadoDiv.innerHTML = "";
  mensajeError.textContent = "";
  input.focus();
}

btnBuscar.addEventListener('click', buscarPais);
btnOtro.addEventListener('click', resetForm);

// Enter dispara búsqueda
input.addEventListener('keydown', e => {
  if (e.key === 'Enter') {
    e.preventDefault();
    buscarPais();
  }
});
