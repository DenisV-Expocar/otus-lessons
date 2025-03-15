<?php 
if (file_exists(__DIR__.'/../../vendor/autoload.php')) 
{
    require_once __DIR__.'/../../vendor/autoload.php';
}

if (file_exists(__DIR__ . '/../src/autoloader.php')) 
{
    require_once __DIR__ . '/../src/autoloader.php';
}

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Инициализация Twig
$twigLoader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/templates/');
$twig = new Environment($twigLoader, [
    'cache' => false, //$_SERVER['DOCUMENT_ROOT'] . '/bitrix/cache/twig'
    'auto_reload' => true,
]);