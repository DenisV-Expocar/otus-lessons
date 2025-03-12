<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Мой профиль");

// Проверка авторизации
global $USER;
if (!$USER->IsAuthorized()) {
    LocalRedirect('/auth/'); // Перенаправить на страницу входа
}

// Получаем данные пользователя
$userID = $USER->GetID();
$userData = CUser::GetByID($userID)->Fetch();

// Обработка аватара
if ($userData['PERSONAL_PHOTO']) {
    $avatarPath = CFile::GetPath($userData['PERSONAL_PHOTO']);
} else {
    $avatarPath = '/bitrix/images/no_photo.png';
}

// Подключаем Twig
$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/twig/');
$twig = new \Twig\Environment($loader, [
    'cache' => $_SERVER['DOCUMENT_ROOT'] . '/bitrix/cache/twig',
    'auto_reload' => true,
]);

// Рендеринг шаблона
echo $twig->render('user_profile.twig', [
    'USER' => [
        'NAME' => $userData['NAME'],
        'LAST_NAME' => $userData['LAST_NAME'],
        'EMAIL' => $userData['EMAIL'],
        'PHOTO' => $avatarPath,
        'POSITION' => $userData['WORK_POSITION'],
        'PHONE' => $userData['PERSONAL_PHONE']
    ]
]);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>