<?php
// Evitar warnings de variables no definidas
error_reporting(E_ALL & ~E_NOTICE);

// Inicializamos variables
$nombre = "";
$horas = 0;
$categoria = "";
$salarioBruto = 0;
$descuento = 0;
$salarioNeto = 0;

$colorResultado = "#f1f1f1";

// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["procesar"])) {
    $nombre = $_POST["nombre"];
    $horas = floatval($_POST["horas"]);
    $categoria = $_POST["categoria"];

    // Definir pago por hora según categoría
    switch ($categoria) {
        case "Jefe":
            $pagoHora = 50;
            $colorResultado="#FFD700";
            break;
        case "Administrativo/a":
            $pagoHora = 30;
            $colorResultado="#87CEEB";
            break;
        case "Operario/a":
            $pagoHora = 15;
            $colorResultado="#90EE90";
            break;
        case "Practicante":
            $pagoHora = 5;
            $colorResultado="#FFB6C1";
            break;
        default:
            $pagoHora = 0;
            $colorResultado="#f1f1f1";
            break;
    }

    // Cálculos
    $salarioBruto = $horas * $pagoHora;
    $descuento = $salarioBruto * 0.15; // 15%
    $salarioNeto = $salarioBruto - $descuento;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>PAGO DE SALARIO DE EMPLEADOS</title>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #c3ec52, #0ba29d);
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    padding: 0;
}

.contenedor {
    background: #fff;
    padding: 30px 35px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    width: 450px;
    margin-top: 30px;
}

h3 {
    text-align: center;
    color: #333;
    font-size: 1.8em;
}

img {
    display: block;
    margin: 10px auto 20px auto;
    max-width: 100px;
}

label {
    font-weight: 600;
}

input, select {
    width: 100%;
    padding: 10px;
    margin: 8px 0 15px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1em;
}

.botones {
    display: flex;
    justify-content: space-between;
}

.btn {
    padding: 12px;
    border-radius: 8px;
    border: none;
    width: 48%;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
}

.btn-procesar {
    background-color: #007bff;
    color: white;
}

.btn-procesar:hover {
    background-color: #0056b3;
}

.btn-reset {
    background-color: #6c757d;
    color: white;
}

.btn-reset:hover {
    background-color: #495057;
}

.resultado {
    margin-top: 20px;
    padding: 15px;
    border-radius: 12px;
    background-color: <?php echo $colorResultado; ?>;
    color: #000;
    font-weight: bold;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

footer {
    text-align: center;
    font-size: 0.9em;
    color: #fff;
    margin-top: auto;
    padding: 15px 0;
}
</style>
</head>
<body>
<div class="contenedor">
    <h3>PAGO DE SALARIO DE EMPLEADOS</h3>
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Empleado">
    <form method="post">
        <label>Nombre del empleado/a:</label>
        <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>

        <label>Horas trabajadas:</label>
        <input type="number" name="horas" value="<?php echo $horas ? $horas : ''; ?>" step="0.01" required>

        <label>Categoría:</label>
        <select name="categoria" required>
            <option value="">--Elija una categoria--</option>
            <option value="Jefe" <?php if($categoria=="Jefe") echo "selected"; ?>>Jefe</option>
            <option value="Administrativo/a" <?php if($categoria=="Administrativo/a") echo "selected"; ?>>Administrativo/a</option>
            <option value="Operario/a" <?php if($categoria=="Operario/a") echo "selected"; ?>>Operario/a</option>
            <option value="Practicante" <?php if($categoria=="Practicante") echo "selected"; ?>>Practicante</option>
        </select>

        <div class="botones">
            <input type="submit" name="procesar" class="btn btn-procesar" value="Procesar">
            <input type="reset" class="btn btn-reset" value="Limpiar" onclick="limpiarResultado()">
        </div>
    </form>

    <?php if(isset($_POST["procesar"])): ?>
    <div class="resultado">
        <p>Nombre: <?php echo htmlspecialchars($nombre); ?></p>
        <p>Salario Bruto: $<?php echo number_format($salarioBruto,2); ?></p>
        <p>Descuento 15%: $<?php echo number_format($descuento,2); ?></p>
        <p>Salario Neto: $<?php echo number_format($salarioNeto,2); ?></p>
    </div>
    <?php endif; ?>
</div>

<footer>
    Todos los derechos reservados - Ing. TaskPro
</footer>

<script>
function limpiarResultado() {
    window.location.href = window.location.pathname;
}
</script>
</body>
</html>
