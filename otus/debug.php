<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once $_SERVER["DOCUMENT_ROOT"].'/bitrix/header.php';
use Bitrix\Main\Loader;
Loader::includeModule('crm');

$date = date('d.m.Y H:i:s');

$query = new \Bitrix\Main\Entity\Query(\Bitrix\Crm\DealTable::getEntity());
$query->setSelect(["*"]);
$query->exec();

$sql = $query->getLastQuery();
echo "{$date}:<br>Query<br>{$sql}";

file_put_contents($_SERVER["DOCUMENT_ROOT"].'/logs/task_1.log', $date . ":\nQuery\n" . $sql . PHP_EOL, FILE_APPEND);

require_once $_SERVER["DOCUMENT_ROOT"].'/bitrix/footer.php';