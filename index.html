<!-- index.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de fotos de Alex</title>
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
            width: calc(100% / 6 - 30px);
            height: 100%; /* Ajusta la altura de las filas según la imagen más alta o carpeta */
            margin-bottom: 10px;
            margin-left: 30px;
            margin-right: 30px;
            overflow: hidden10
            border: 5px solid var(--border-color-dark);
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
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 16px;
            color: #fff;
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
    <header>Carpetas: imagenes </header>
    <?php
        // Obtener carpetas de la carpeta "imagenes"
        $folders = glob("imagenes/*", GLOB_ONLYDIR);

        // Mostrar carpetas de la carpeta "imagenes"
        foreach ($folders as $folder) {
            echo '<div class="gallery-item folder" onclick="openItem(\'' . $folder . '\', true)">';
            echo '<img src="iconos/folder-icon.png" alt="Folder">';
            echo '<div class="folder-label">' . basename($folder) . '</div>';
            echo '</div>';
        }

        // Obtener fotos de la carpeta "imagenes"
        $images = glob("imagenes/*.{jpg,png,gif,jfif,arw,
                JPG,PNG,GIF,JFIF,ARW}", GLOB_BRACE);

        // Mostrar imágenes de la carpeta "imagenes"
        foreach ($images as $image) {
            echo '<div class="gallery-item" onclick="openItem(\'' . $image . '\', false)">';
            echo '<img src="' . $image . '" alt="' . basename($image) . '">';
            echo '</div>';
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
