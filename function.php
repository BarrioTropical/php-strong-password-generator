<?php
function createPassword()
{
    $alphabetNumber = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()[]';
    $password = '';
    $i = 1;

    if (isset($_GET['password'])) {
        $passwordLength = $_GET['password'];
        do {
            $randomChar = $alphabetNumber[rand(0, strlen($alphabetNumber) - 1)];
            echo $randomChar;
            $i++;
        } while ($i <= $passwordLength);
    }
    return $password;
}
;
?>