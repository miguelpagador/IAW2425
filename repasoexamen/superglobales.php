<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Completa del Servidor y Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Información del Cliente y del Servidor</h1>
    <table>
        <thead>
            <tr>
                <th>Parámetro</th>
                <th>Valor</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Agrupamos todos los valores de $_SERVER en un solo array
        $datos = [
            'REMOTE_ADDR' => ['Dirección IP del cliente', $_SERVER['REMOTE_ADDR']],
            'REMOTE_PORT' => ['Puerto del cliente', $_SERVER['REMOTE_PORT']],
            'HTTP_USER_AGENT' => ['Navegador del cliente', $_SERVER['HTTP_USER_AGENT']],
            'HTTP_REFERER' => ['URL de referencia', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No disponible'],
            'REQUEST_METHOD' => ['Método HTTP utilizado', $_SERVER['REQUEST_METHOD']],
            'REQUEST_TIME' => ['Hora de la petición', date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME'])],
            'SERVER_NAME' => ['Nombre del servidor', $_SERVER['SERVER_NAME']],
            'SERVER_ADDR' => ['Dirección IP del servidor', $_SERVER['SERVER_ADDR']],
            'SERVER_PORT' => ['Puerto del servidor', $_SERVER['SERVER_PORT']],
            'SERVER_PROTOCOL' => ['Protocolo del servidor', $_SERVER['SERVER_PROTOCOL']],
            'SERVER_SOFTWARE' => ['Software del servidor', $_SERVER['SERVER_SOFTWARE']],
            'HTTP_HOST' => ['Host de la solicitud', $_SERVER['HTTP_HOST']],
            'SCRIPT_NAME' => ['Nombre del script actual', $_SERVER['SCRIPT_NAME']],
            'REQUEST_URI' => ['URI de la solicitud', $_SERVER['REQUEST_URI']],
            'QUERY_STRING' => ['Cadena de consulta', isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? $_SERVER['QUERY_STRING'] : 'No disponible'],
            'DOCUMENT_ROOT' => ['Raíz del documento', $_SERVER['DOCUMENT_ROOT']],
            'SCRIPT_FILENAME' => ['Ruta completa del script', $_SERVER['SCRIPT_FILENAME']],
            'PHP_SELF' => ['Ruta relativa del script actual', $_SERVER['PHP_SELF']],
            'HTTPS' => ['Conexión segura (HTTPS)', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'Sí' : 'No'],
            'GATEWAY_INTERFACE' => ['Versión de la interfaz CGI', isset($_SERVER['GATEWAY_INTERFACE']) ? $_SERVER['GATEWAY_INTERFACE'] : 'No disponible'],
            'PATH_INFO' => ['Ruta adicional proporcionada por el cliente', isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : 'No disponible'],
            'HTTP_ACCEPT' => ['Tipos de contenido aceptados por el cliente', isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : 'No disponible'],
            'HTTP_ACCEPT_LANGUAGE' => ['Idiomas aceptados por el cliente', isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'No disponible'],
            'HTTP_ACCEPT_ENCODING' => ['Codificaciones aceptadas por el cliente', isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : 'No disponible']
        ];

        // Imprimir cada elemento en la tabla
        foreach ($datos as $clave => $datosItem) {
            $descripcion = $datosItem[0];
            $valor = htmlspecialchars($datosItem[1]); // Escapar caracteres especiales
            echo "<tr>
                    <td><strong>$clave</strong></td>
                    <td>$valor</td>
                    <td>$descripcion</td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
