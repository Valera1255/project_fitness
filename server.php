<?php
// PHP не умеет работать с JSON подкоректируем
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST);