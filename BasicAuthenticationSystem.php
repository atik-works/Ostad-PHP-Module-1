<?php

define('USERNAME', 'admin');
define('PASSWORD', '123');

$inpUsername = readline("Please enter your username: ");
$inpPassword = readline("Please enter your password: ");

if ($inpUsername === USERNAME && $inpPassword === PASSWORD) {
    echo "Login Successfull. \n";
} else {
    echo "Invalid Credentials. Please check and try again later.\n";
}   