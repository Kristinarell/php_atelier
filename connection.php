<?php


try{

    $connection = new PDO( 'mysql:host=localhost; dbname=atelier', "root", "mysql");

}
catch ( PDOException $exception)
{
    echo "Connection failed " . $exception->getMessage();
}


