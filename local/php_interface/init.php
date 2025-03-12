<?php 
if (file_exists($_SERVER["DOCUMENT_ROOT"].'/vendor/autoload.php')) 
{
    require_once $_SERVER["DOCUMENT_ROOT"].'/vendor/autoload.php';
}

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Инициализация Twig
$twigLoader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/templates/');
$twig = new Environment($twigLoader, [
    'cache' => false, //$_SERVER['DOCUMENT_ROOT'] . '/bitrix/cache/twig'
    'auto_reload' => true,
]);