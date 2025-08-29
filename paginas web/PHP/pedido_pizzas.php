<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirmar'])) {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $pedido = "Nombre: $nombre\nDirección: $direccion\n";

        if (isset($_POST['jamon'])) {
            $cantidad = $_POST['cantidad_jamon'];
            $pedido .= "Jamon y queso: $cantidad\n";
        }
        if (isset($_POST['napolitana'])) {
            $cantidad = $_POST['cantidad_napolitana'];
            $pedido .= "Napolitana: $cantidad\n";
        }
        if (isset($_POST['muzzarella'])) {
            $cantidad = $_POST['cantidad_muzzarella'];
            $pedido .= "Muzzarella: $cantidad\n";
        }

        $pedido .= "-------------------------\n";

        file_put_contents("pedidos.txt", $pedido, FILE_APPEND);
        echo "<p style='color: lime;'>Pedido guardado con éxito ✅</p>";
    }

    if (isset($_POST['resetear'])) {
        file_put_contents("pedidos.txt", ""); // Deja vacío el archivo
        echo "<p style='color: yellow;'>Historial reseteado ⚡</p>";
    }

    if (isset($_POST['eliminar'])) {
        if (file_exists("pedidos.txt")) {
            unlink("pedidos.txt"); // Elimina el archivo
            echo "<p style='color: red;'>Archivo eliminado 🗑️</p>";
        } else {
            echo "<p style='color: orange;'>No existe el archivo para eliminar ⚠️</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido de Pizzas</title>
    <style>
        body {
            background-color: #4B0082;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
        }
        form {
            background-color: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        label, input {
            display: block;
            margin: 10px auto;
        }
        .botones {
            margin-top: 15px;
        }
        .botones input {
            margin: 5px;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .confirmar { background-color: limegreen; color: white; }
        .resetear { background-color: orange; color: white; }
        .eliminar { background-color: red; color: white; }
    </style>
</head>
<body>
    <form method="post">
        <label>Nombre: <input type="text" name="nombre" required></label>
        <label>Dirección: <input type="text" name="direccion" required></label>

        <label><input type="checkbox" name="jamon"> Jamon y queso</label>
        <input type="number" name="cantidad_jamon" min="0" placeholder="Cantidad">

        <label><input type="checkbox" name="napolitana"> Napolitana</label>
        <input type="number" name="cantidad_napolitana" min="0" placeholder="Cantidad">

        <label><input type="checkbox" name="muzzarella"> Muzzarella</label>
        <input type="number" name="cantidad_muzzarella" min="0" placeholder="Cantidad">

        <div class="botones">
            <input type="submit" name="confirmar" value="Confirmar" class="confirmar">
            <input type="submit" name="resetear" value="Resetear historial" class="resetear" formnovalidate>
            <input type="submit" name="eliminar" value="Eliminar archivo" class="eliminar" formnovalidate>
        </div>
    </form>
</body>
</html>
