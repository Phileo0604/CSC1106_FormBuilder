<?php
function generateToken() {
    $length = 30;
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $string = '';
    $charCount = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, $charCount - 1)];
        $string .= $randomChar;
    }

    return $string;
}
