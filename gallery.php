<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Fotos</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background-color: #414141; /* Nuevo color de fondo */
            color: var(--text-color-dark);
            transition: background-color 0.5s, color 0.5s;
        }

        h1 {
            background-color: #535b61; /* Gris claro azulado*/
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            text-align: left;
            font-size: 18px;
            color: #fff; /* Color de texto blanco */
        }

        header {
            background-color: #535b61; /* Gris claro azulado*/
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            text-align: left;
            font-size: 18px;
            color: #fff; /* Color de texto blanco */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .image-row {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            max-height: 360px; /* Altura fija de cada fila */
            overflow: hidden; /* Asegura que el overflow se maneje correctamente */
        }

        img {
            width: calc(100% / 6 - 20px);
            height: 100%; /* Hace que las imágenes ocupen toda la altura de la fila */
            object-fit: cover; /* Ajusta el tamaño de la imagen para cubrir la altura de la fila */
            border: 2px solid var(--border-color-dark);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            display: block; /* Elimina el espacio extra debajo de las imágenes */
            margin: 0 auto; /* Centra la imagen en el eje X */
        }

        img:hover {
            transform: scale(1.1);
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #414141; /* Nuevo color de fondo */
            z-index: -1;
        }
    </style>
</head>
<body>
    <h1>Alex</h1>
    <header>Carpetas: </header>
    <?php
        if (isset($_GET['dir'])) {
            $currentDirectory = "fulls/" . $_GET['dir'];
            $images = getImagesFromDirectory($currentDirectory);

            $imagesPerRow = 6;
            $rowCount = 0;
            $totalImages = count($images);

            foreach ($images as $index => $image) {
                if ($rowCount == 0) {
                    echo '<div class="image-row">';
                }

                echo '<img src="' . $image . '" alt="Imagen">';

                $rowCount++;

                // Verificar si es la última imagen y cerrar la fila
                if (($rowCount == $imagesPerRow && $index != $totalImages - 1) || $index == $totalImages - 1) {
                    echo '</div>';
                    $rowCount = 0;
                }
            }
        } else {
            echo '<p>Directorio no válido.</p>';
        }

        function getImagesFromDirectory($directory) {
            $images = glob($directory . "/*.{jpg,png,gif}", GLOB_BRACE);
            return $images;
        }
    ?>
</body>
</html>
