<?php
$recetas = [
    [
        "id" => "bombones",
        "titulo" => "Bombones de chocolate blanco y negro",
        "imagen" => "img/bombones.jpg",
        "tipo" => "postre"
    ],
    [
        "id" => "brownie",
        "titulo" => "Brownie de chocolate",
        "imagen" => "img/brownie.jpg",
        "tipo" => "postre"
    ],
    [
        "id" => "conchas_atun",
        "titulo" => "Conchas con atún",
        "imagen" => "img/conchas_atun.jpg",
        "tipo" => "salado"
    ],
    [
        "id" => "aguacate",
        "titulo" => "Aguacates rellenos",
        "imagen" => "img/aguacate.jpg",
        "tipo" => "salado"
    ],
    [
        "id" => "arroz",
        "titulo" => "Arroz con verduras",
        "imagen" => "img/arroz.jpg",
        "tipo" => "salado"
    ],
    [
        "id" => "papas",
        "titulo" => "Papas al horno con especias",
        "imagen" => "img/papas.jpg",
        "tipo" => "salado"
    ],
    [
        "id" => "patacones",
        "titulo" => "Patacones crujientes",
        "imagen" => "img/patacones.jpg",
        "tipo" => "salado"
    ],
    [
        "id" => "red_velvet",
        "titulo" => "Torta Red Velvet",
        "imagen" => "img/red_velvet.jpg",
        "tipo" => "postre"
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recetario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Recetario en PHP</h1>
    <div class="recetas">
        <?php foreach ($recetas as $receta): ?>
            <div class="card <?= $receta["tipo"] ?>">
                <img src="<?= $receta["imagen"] ?>" alt="<?= $receta["titulo"] ?>">
                <h2><?= $receta["titulo"] ?></h2>
                <a href="receta.php?receta=<?= $receta["id"] ?>">Ver receta</a>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>
        <p>Todos los derechos reservados © 2000-2025 - Ing. TaskPro</p>
    </footer>
</body>
</html>
