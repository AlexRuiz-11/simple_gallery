<!-- subgallery.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subgalería</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 5px;
            padding: 20px;
            background-color: #474b4e; /* Gris oscuro azulado */
            color: #fff;
            transition: background-color 0.5s, color 0.5s;
            font-family: 'Arial', sans-serif;
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

        .gallery-item {
            position: relative;
            width: calc(100% / 6 - 20px);
            height: 100%; /* Ajusta la altura de las filas según la imagen más alta o carpeta */
            margin-bottom: 20px;
            overflow: hidden;
            border: 2px solid var(--border-color-dark);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            cursor: pointer;
        }

        .folder-label {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 12px;
            color: #fff;
            /*white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: none;*/
        }

        .gallery-item.folder:hover .folder-label {
            display: block; /* Muestra el texto al pasar el ratón sobre la carpeta */
        }

        .gallery-item:hover {
            transform: scale(1.1);
        }

        .full-image-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .full-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            cursor: pointer;
        }

        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            width: 30px; /* Ancho ajustado */
            height: 30px; /* Altura ajustada */
        }

        .full-image-label {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 18px;
            color: #fff;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    </style>
</head>
<body>
     <?php
        // Obtener la ruta de la subcarpeta desde el parámetro GET
        $subdirectory = isset($_GET['dir']) ? $_GET['dir'] : '';

        // Obtener la ruta del directorio padre
        $parentDirectory = dirname($subdirectory);

        echo '<header>Carpetas: ' . ($subdirectory ? htmlspecialchars($subdirectory) : '') . '</header>';

        if ($subdirectory) {
            // Mostrar enlace para volver atrás
            echo '<p><a href="index.php">Volver Atrás</a></p>';
            
            // Obtener fotos de la subcarpeta
            $images = glob($subdirectory . "/*.{jpg,png,gif,jfif,arw,
                JPG,PNG,GIF,JFIF,ARW}", GLOB_BRACE);

            // Mostrar imágenes de la subcarpeta
            foreach ($images as $image) {
                echo '<div class="gallery-item" onclick="openItem(\'' . $image . '\', false)">';
                echo '<img src="' . $image . '" alt="' . basename($image) . '">';
                echo '</div>';
            }
        } else {
            echo '<p>Subcarpeta no especificada.</p>';
        }
    ?>
    <div class="full-image-container" id="fullImageContainer" onclick="closeItem()">
        <img src="" alt="Full Item" class="full-image" id="fullItem">
        <img src="_icons/x.png" alt="Close" class="close-icon" onclick="closeItem()">
        <div class="full-image-label" id="fullImageLabel"></div>
    </div>

    <script>
        function openItem(itemPath, isFolder) {
            if (isFolder) {
                // Si es una carpeta, redirigir a la subgalería de la carpeta
                window.location.href = 'subgallery.php?dir=' + encodeURIComponent(itemPath);
            } else {
                // Si es una imagen, abre la vista completa
                document.getElementById('fullItem').src = itemPath;
                document.getElementById('fullImageLabel').innerText = basename(itemPath);
                document.getElementById('fullImageContainer').style.display = 'flex';
            }
        }

        function closeItem() {
            document.getElementById('fullImageContainer').style.display = 'none';
        }

        function basename(path) {
            return path.split('/').reverse()[0];
        }
    </script>
</body>
</html>
