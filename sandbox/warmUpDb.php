<?php
$dbConnector = null;
$dsn = "mysql:host=localhost;port=3306;dbname=snows";//exemple de dsn avec la mention explicite du port de communication. Si on est en 3306 ceci est facultatif.
$usr = "snows-connector";
$pwd = "Passw0rd";//coder un pwd dans le code source n'est jamais une bonne idée... mais on y va pas étape ;)

try{
$dbConnector = new PDO($dsn, $usr, $pwd);//instanciation d'un object de type "PDO"

//try to fetch snows boards data
$query = "SELECT * FROM snows";
$queryResult = null;

$statement = $dbConnector->prepare($query);//prepare query
$statement->execute();//execute query
$queryResult = $statement->fetchAll();//prepare result for client

$dbConnexion = null;//close database connexion
return $queryResult;
}
catch (PDOException $ex){
print($ex);
}