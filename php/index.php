<?php
// Configuración del directorio (el actual por defecto)
$directory = ".";

// Obtener los archivos y carpetas del directorio
$files = scandir($directory);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Archivos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Lista de Archivos en el Directorio</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Tamaño</th>
                <th>Última Modificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($files as $file) {
                // Ignorar los directorios "." y ".."
                if ($file === "." || $file === "..") continue;

                $filePath = $directory . DIRECTORY_SEPARATOR . $file;
                $fileType = is_dir($filePath) ? "Carpeta" : "Archivo";
                $fileSize = is_file($filePath) ? filesize($filePath) . " bytes" : "-";
                $fileModTime = date("Y-m-d H:i:s", filemtime($filePath));
                ?>
                <tr>
                    <td>
                        <a href="<?php echo htmlspecialchars($file); ?>" target="_blank">
                            <?php echo htmlspecialchars($file); ?>
                        </a>
                    </td>
                    <td><?php echo $fileType; ?></td>
                    <td><?php echo $fileSize; ?></td>
                    <td><?php echo $fileModTime; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>

