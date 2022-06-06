<?php
include "connection.php";

$errMsg = null;


if (isset($_POST['sub_ord']) && isset($_SESSION["name"]))
{

    $post = [
        "comment" => trim($_POST["comment"]),
        "datetime" => $_POST["datetime"],
        "type" => $_POST["type"],
        "customer_id" => $_SESSION["id"]

    ];

    $sql = "INSERT `orders`(commentary,appointment,customer_id,type_id) VALUES(:comment,:datetime,:customer_id, :type)";
    $query = $connection->prepare($sql);
    $query->execute($post);
    header('Location: account.php');

}
elseif (!isset($_SESSION["name"]))
{
    $errMsg = "Для оформления заказа необходимо авторизироваться!";
}



