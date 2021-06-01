<?php

use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;

require_once './vendor/autoload.php';

$name = $_POST['user_name'] ?? null;
$phone = $_POST['user_phone'] ?? null;

if (!$name || !$phone) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    echo <<<HTML
        <!doctype html><html lang="en"><head>
        <meta charset="UTF-8">
        <title>Ошибка формы</title>
        </head><body>
            <p>Ошибка ввода данных на форму</p>
            <a href="/">Вернуться на галыную</a>
        </body></html>
    HTML;
    exit();
}

$letter = (new Message())
    ->setFrom('silatimofei@yandex.ru')
    ->addTo('CONSTANTIN.MILOV@YANDEX.RU')
    ->setSubject('Заявка с сайта')
    ->setBody(<<<MAIL
                Пришла новая заявка!
                Имя: $name
                Телефон: $phone
              MAIL);

(new SmtpMailer([
    'host' => 'smtp.yandex.ru',
    'username' => 'silatimofei@yandex.ru',
    'password' => 'zX238hH92qX32',
    'secure' => 'ssl'
]))->send($letter);

header('Location: ../thank.html', true, 302);
exit();