<?php
namespace Diman\Openlive\Pages;

require './sys/prepare.php';

http_response_code(404);
trigger_error('404', E_USER_NOTICE);
exit("ты дебил, страница не найдена");