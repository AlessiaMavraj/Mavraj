<?php

require "./model/usersService.php";

$error = null;

//$_SESSION['index.php']=();

function login($userInputLoginData)
{
    if(isset($userInputLoginData['inputUserEmailAddress'])){
        if(false){
        }else{
            $error = "Erreur de login";
            require "view/login.php";
        }

    }else{
        require "view/login.php";

    }
}
function logout(){
//insérer fonction ici :) o ka ou
}