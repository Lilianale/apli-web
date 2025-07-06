<?php
function limpiar($dato) {
    return htmlspecialchars(trim($dato));
}

echo "<h2>Datos recibidos</h2>";

echo "Correo: " . (isset($_POST['correo']) ? limpiar($_POST['correo']) : "No enviado") . "<br>";
echo "URL: " . (isset($_POST['url']) ? limpiar($_POST['url']) : "No enviado") . "<br>";

echo "Teléfono: " . (isset($_POST['tel']) ? limpiar($_POST['tel']) : "No enviado") . "<br>";
echo "Número: " . (isset($_POST['number']) ? limpiar($_POST['number']) : "No enviado") . "<br>";

echo "Fecha: " . (isset($_POST['date']) ? limpiar($_POST['date']) : "No enviado") . "<br>";
echo "Hora: " . (isset($_POST['time']) ? limpiar($_POST['time']) : "No enviado") . "<br>";

echo "Fecha y hora: " . (isset($_POST['datetime']) ? limpiar($_POST['datetime']) : "No enviado") . "<br>";
echo "Mes: " . (isset($_POST['month']) ? limpiar($_POST['month']) : "No enviado") . "<br>";

echo "Semana: " . (isset($_POST['week']) ? limpiar($_POST['week']) : "No enviado") . "<br>";
echo "Contraseña: " . (isset($_POST['password']) ? limpiar($_POST['password']) : "No enviado") . "<br>";

echo "Buscar: " . (isset($_POST['search']) ? limpiar($_POST['search']) : "No enviado") . "<br>";

if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
    echo "Archivo subido: " . htmlspecialchars($_FILES['file']['name']) . "<br>";
} else {
    echo "Archivo: No enviado o con error<br>";
}

echo "Selección: " . (isset($_POST['select']) ? limpiar($_POST['select']) : "No enviada") . "<br>";
echo "¿Cómo te sientes?: " . (isset($_POST['text']) ? limpiar($_POST['text']) : "No enviado") . "<br>";

echo "Género: " . (isset($_POST['genero']) ? limpiar($_POST['genero']) : "No enviado") . "<br>";
echo "Color: " . (isset($_POST['color']) ? limpiar($_POST['color']) : "No enviado") . "<br>";
echo "Rango: " . (isset($_POST['range']) ? limpiar($_POST['range']) : "No enviado") . "<br>";

echo "Describe tu personalidad: " . (isset($_POST['textarea']) ? limpiar($_POST['textarea']) : "No enviado") . "<br>";

echo "Aceptar términos: " . (isset($_POST['checkbox']) ? "Aceptado" : "No aceptado") . "<br>";

echo "Campo oculto: " . (isset($_POST['hiddenField']) ? limpiar($_POST['hiddenField']) : "No enviado") . "<br>";
?>

?>
