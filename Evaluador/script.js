// Notas iniciales
let parcial1 = 12;
let parcial2 = 15;
let proyectoFinal = 18;

// Cálculo de la nota final
let notaFinal = (parcial1 * 0.3) + (parcial2 * 0.3) + (proyectoFinal * 0.4);

// Mostrar resultado en la consola
console.log("Nota final:", notaFinal.toFixed(2));

// Evaluación
let resultadoTexto = "Nota final: " + notaFinal.toFixed(2) + "<br>";

if (notaFinal >= 14) {
  resultadoTexto += "Resultado: <strong>Aprobado directamente.</strong>";
} else if (notaFinal >= 10 && notaFinal < 13.9) {
  resultadoTexto += "Resultado: <strong>Debe ir a recuperación.</strong>";
} else {
  resultadoTexto += "Resultado: <strong>Pierde la materia.</strong>";
}

// Mostrar resultado en la página
document.getElementById("resultado").innerHTML = resultadoTexto;
