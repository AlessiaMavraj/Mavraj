<?php


require "../model/dbConnector.php";

$result = isLoginCorrect("alessia.mavraj@cpnv.ch", "PaSsw0rd");

function isLoginCorrect($userEmailAddress, $userPwd): bool
{

    $userPwdDb = getUserPwd($userEmailAddress);

    if (password_verify($userPwd, $userPwdDb)) {

        return true;

    }
    return false;

}

function getUserPwd($userEmailAddress)
{
    $separator = '\'';
    $loginQuery = 'SELECT userHashPsw FROM users WHERE userEmailAddress =' . $separator . $userEmailAddress . $separator;
    $queryResults = executeQuerySelect($loginQuery);
    return $queryResults[0][0];
}