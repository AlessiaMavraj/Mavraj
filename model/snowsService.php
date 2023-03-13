<?php


require_once 'model/dbConnector.php';
const SEPARATOR = '\'';

/**
 * This function is designed to get all active snows
 * @return array : containing all information about snows. Array can be empty.
 */
function getSnows(){
    $snowsQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, active FROM snows';
    return executeQuerySelect($snowsQuery);
}

function getSnow($code)
{
    $snowQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, description, photo FROM snows WHERE code='.SEPARATOR.$code.SEPARATOR.'AND active=1';
    return executeQuerySelect($snowQuery);
}