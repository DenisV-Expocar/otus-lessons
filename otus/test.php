<?php
declare (strict_types=1);
require_once $_SERVER["DOCUMENT_ROOT"].'/bitrix/header.php';

function divison (float $a, float $b): int 
{
    return $a / $b;
}

divison (2, 2);


require_once $_SERVER["DOCUMENT_ROOT"].'/bitrix/footer.php';