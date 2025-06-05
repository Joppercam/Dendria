<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 * Versión modificada para hosting legacy con PHP 8.1
 */

// Mostrar errores solo en desarrollo
if (isset($_ENV['APP_DEBUG']) && $_ENV['APP_DEBUG'] === 'true') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

// Verificar versión mínima de PHP
if (version_compare(PHP_VERSION, '8.1.0', '<')) {
    die('Laravel requiere PHP 8.1.0 o superior. Versión actual: ' . PHP_VERSION);
}

// Definir el directorio base del proyecto
define('LARAVEL_START', microtime(true));

// Registrar el autoloader de Composer
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    die('Error: No se encontraron las dependencias de Composer. Ejecuta "composer install".');
}

// Bootstrap de la aplicación Laravel
try {
    $app = require_once __DIR__ . '/../bootstrap/app.php';
} catch (Throwable $e) {
    // Si falla el bootstrap normal, mostrar página de error básica
    http_response_code(500);
    echo '<!DOCTYPE html>
<html>
<head>
    <title>DendrIA - Sitio en Mantenimiento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #1a202c; color: #fff; }
        .container { max-width: 600px; margin: 50px auto; text-align: center; }
        .logo { font-size: 2.5em; margin-bottom: 20px; }
        .message { font-size: 1.2em; margin-bottom: 30px; }
        .error { background: #2d3748; padding: 20px; border-radius: 8px; margin: 20px 0; }
        .blue { color: #3b82f6; }
        .yellow { color: #fbbf24; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <span class="blue">Dendr</span><span class="yellow">IA</span>
        </div>
        <div class="message">
            <h2>Sitio en Configuración</h2>
            <p>Estamos configurando el sitio web. Por favor, intenta nuevamente en unos minutos.</p>
        </div>
        <div class="error">
            <h3>Información Técnica:</h3>
            <p>Error de inicialización: ' . htmlspecialchars($e->getMessage()) . '</p>
            <p>PHP: ' . PHP_VERSION . '</p>
        </div>
    </div>
</body>
</html>';
    exit;
}

// Manejar la petición
try {
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    
    $request = Illuminate\Http\Request::capture();
    
    $response = $kernel->handle($request);
    
    $response->send();
    
    $kernel->terminate($request, $response);
    
} catch (Throwable $e) {
    // Página de error amigable para usuarios
    http_response_code(500);
    echo '<!DOCTYPE html>
<html>
<head>
    <title>DendrIA - Error del Servidor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #1a202c; color: #fff; }
        .container { max-width: 600px; margin: 50px auto; text-align: center; }
        .logo { font-size: 2.5em; margin-bottom: 20px; }
        .message { font-size: 1.2em; margin-bottom: 30px; }
        .blue { color: #3b82f6; }
        .yellow { color: #fbbf24; }
        .btn { display: inline-block; background: #3b82f6; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <span class="blue">Dendr</span><span class="yellow">IA</span>
        </div>
        <div class="message">
            <h2>Oops! Algo salió mal</h2>
            <p>Estamos trabajando para resolver este problema. Por favor, intenta nuevamente más tarde.</p>
        </div>
        <a href="/" class="btn">Volver al inicio</a>
        <a href="mailto:soporte@dendria.cl" class="btn">Contactar soporte</a>
    </div>
</body>
</html>';
}
?>