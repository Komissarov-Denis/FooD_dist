<?php // синтаксис открытия файла для бэкэнда
$_POST = json_decode(file_get_contents("php://input"), true); // так как php не работает с форматом данных json, требуется данная команда декодирования
echo var_dump($_POST); // команда echo позволяет увидеть данные по команде var_dump с массивом ($_POST), приходящие с клиента 
// т.е. эта команда берет данные с клиента, превращает в строку и показывает обратно на клиенте (это response с сервера)
?>