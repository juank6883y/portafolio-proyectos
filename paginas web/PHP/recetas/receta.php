<?php
$recetas = [
    "bombones" => [
        "titulo" => "Bombones de chocolate blanco y negro",
        "imagen" => "img/bombones.jpg",
        "ingredientes" => [
            "200 g de chocolate negro",
            "200 g de chocolate blanco",
            "Moldes de plástico para bombones"
        ],
        "preparacion" => [
            "Derrite el chocolate negro al baño maría o en microondas.",
            "Haz lo mismo con el chocolate blanco en otro recipiente.",
            "Vierte primero una capa de chocolate negro en los moldes.",
            "Agrega una capa de chocolate blanco encima.",
            "Refrigera hasta que los bombones estén sólidos.",
            "Desmolda con cuidado y disfruta."
        ],
        "video" => "https://www.youtube.com/watch?v=h-5lrHZfEBQ"
    ],
    "brownie" => [
        "titulo" => "Brownie de chocolate",
        "imagen" => "img/brownie.jpg",
        "ingredientes" => [
            "200 g de chocolate",
            "100 g de mantequilla",
            "150 g de azúcar",
            "2 huevos",
            "80 g de harina"
        ],
        "preparacion" => [
            "Derrite el chocolate con la mantequilla a fuego lento.",
            "Agrega el azúcar y mezcla bien.",
            "Incorpora los huevos uno a uno.",
            "Añade la harina tamizada y mezcla suavemente.",
            "Vierte en un molde engrasado.",
            "Hornea a 180°C por 25 minutos."
        ],
        "video" => null
    ],
    "conchas_atun" => [
        "titulo" => "Conchas con atún",
        "imagen" => "img/conchas_atun.jpg",
        "ingredientes" => [
            "250 g de pasta tipo conchas",
            "2 latas de atún",
            "Mayonesa al gusto",
            "Sal y pimienta"
        ],
        "preparacion" => [
            "Cocina la pasta en agua con sal hasta que esté al dente.",
            "Escurre y deja enfriar.",
            "Mezcla el atún con mayonesa, sal y pimienta.",
            "Rellena las conchas con la mezcla de atún.",
            "Sirve frío como entrada o aperitivo."
        ],
        "video" => null
      ],
    "aguacate" => [
    "titulo" => "Aguacates rellenos",
    "imagen" => "img/aguacate.jpg",
    "ingredientes" => [
        "2 aguacates maduros",
        "1 lata de atún o pollo desmenuzado",
        "2 cucharadas de mayonesa",
        "1/2 cebolla pequeña picada",
        "Sal y pimienta al gusto"
    ],
    "preparacion" => [
        "Parte los aguacates por la mitad y retira el hueso.",
        "Mezcla el atún (o pollo) con la mayonesa y la cebolla.",
        "Agrega sal y pimienta al gusto.",
        "Rellena cada mitad de aguacate con la mezcla.",
        "Sirve frío como entrada o cena ligera."
    ],
    "video" => null
],
"arroz" => [
    "titulo" => "Arroz con verduras",
    "imagen" => "img/arroz.jpg",
    "ingredientes" => [
        "2 tazas de arroz",
        "4 tazas de agua",
        "1 zanahoria picada",
        "1/2 taza de arvejas",
        "1 pimentón picado",
        "Sal y aceite al gusto"
    ],
    "preparacion" => [
        "Calienta un poco de aceite en una olla.",
        "Agrega las verduras picadas y sofríe por 3 minutos.",
        "Añade el arroz y sofríe un poco más.",
        "Agrega el agua y la sal.",
        "Cocina a fuego medio hasta que el agua se absorba.",
        "Tapa y deja reposar 10 minutos antes de servir."
    ],
    "video" => null
],
"papas" => [
    "titulo" => "Papas al horno con especias",
    "imagen" => "img/papas.jpg",
    "ingredientes" => [
        "4 papas medianas",
        "2 cucharadas de aceite de oliva",
        "1 cucharadita de pimentón dulce",
        "1/2 cucharadita de ajo en polvo",
        "Sal y pimienta al gusto"
    ],
    "preparacion" => [
        "Lava bien las papas y córtalas en gajos.",
        "Mezcla en un bol el aceite con las especias.",
        "Agrega las papas y mézclalas bien para que se impregnen.",
        "Coloca en una bandeja para horno.",
        "Hornea a 200°C por 35-40 minutos hasta que estén doradas.",
        "Sirve calientes como acompañamiento."
    ],
    "video" => null
],
"patacones" => [
    "titulo" => "Patacones crujientes",
    "imagen" => "img/patacones.jpg",
    "ingredientes" => [
        "3 plátanos verdes",
        "Aceite para freír",
        "Sal al gusto"
    ],
    "preparacion" => [
        "Pela los plátanos y córtalos en rodajas gruesas.",
        "Fríelas en abundante aceite caliente hasta que estén semi doradas.",
        "Retíralas y aplástalas con una tabla o vaso.",
        "Vuelve a freírlas hasta que queden doradas y crujientes.",
        "Escurre en papel absorbente y agrega sal.",
        "Sirve con guacamole o salsas al gusto."
    ],
    "video" => null
],
"red_velvet" => [
    "titulo" => "Torta Red Velvet",
    "imagen" => "img/red_velvet.jpg",
    "ingredientes" => [
        "250 g de harina",
        "250 g de azúcar",
        "120 g de mantequilla",
        "2 huevos",
        "2 cucharadas de cacao en polvo",
        "1 taza de buttermilk (leche + limón)",
        "1 cucharadita de vinagre",
        "Colorante rojo",
        "1 cucharadita de bicarbonato"
    ],
    "preparacion" => [
        "Bate la mantequilla con el azúcar hasta cremoso.",
        "Agrega los huevos uno a uno.",
        "Añade el cacao, la harina y el buttermilk alternando.",
        "Agrega el colorante rojo y mezcla bien.",
        "Disuelve el bicarbonato en vinagre y agrégalo a la mezcla.",
        "Hornea a 180°C por 30-35 minutos.",
        "Deja enfriar y rellena con crema de queso."
    ],
    "video" => null
  ],
];

$receta_id = $_GET["receta"] ?? null;

if (!$receta_id || !isset($recetas[$receta_id])) {
    echo "<p>Receta no encontrada.</p>";
    exit;
}

$receta = $recetas[$receta_id];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $receta["titulo"] ?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1><?= $receta["titulo"] ?></h1>
    <img src="<?= $receta["imagen"] ?>" alt="<?= $receta["titulo"] ?>" style="width:350px; border-radius:10px;">

    <h2>Ingredientes</h2>
    <ul>
        <?php foreach ($receta["ingredientes"] as $ing): ?>
            <li><?= $ing ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Preparación</h2>
    <ol>
        <?php foreach ($receta["preparacion"] as $paso): ?>
            <li><?= $paso ?></li>
        <?php endforeach; ?>
    </ol>

    <?php if (!empty($receta["video"])): ?>
        <h2>Video de la receta</h2>
        <iframe width="560" height="315" src="<?= str_replace("watch?v=", "embed/", $receta["video"]) ?>" 
                title="Video de <?= $receta["titulo"] ?>" frameborder="0" allowfullscreen></iframe>
    <?php endif; ?>

    <br><br>
    <a href="index.php">⬅ Volver al recetario</a>
</body>
</html>
