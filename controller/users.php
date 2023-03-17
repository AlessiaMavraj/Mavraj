<?php

require "./model/usersService.php";

$error = null;

function login($userInputLoginData){

if (!isset($userInputLoginData['inputUserEmailAddress'])) {
    require "view/login.php";
}
require "view/login.php";
}
