<?php
function find_login (string $log, string $pass):array{
    $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
    $arrayUs = json_decode($json,true);
    foreach ($arrayUs as $user) {
        if ($user['login']==$log && $user['pass']==$pass) {
            return $user;
        }
    }
    return[];
}


?>