<?php
$password_length = $_GET['password'] ?? '';
function generate_password($length)
{
    $all_character = str_split('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ^@#()[]&');
    shuffle($all_character);
    $password = '';
    foreach ($all_character as $character) {
        if (strlen($password) < $length) {
            $password .= $character;
        }
    }
    return $password;
};
