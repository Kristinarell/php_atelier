<?php
include "connection.php";

//Проверка sql-запроса на ошибки
function CheckError($query)
{
    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE)
    {
        echo $errInfo[2];
    }
    else echo"Все хорошо";
}
//Переменная с ошибками
 $errMes = null;


    // РЕГИСТРАЦИЯ
    if (isset($_POST['sub_reg'])) {

        // массив с введенными данными
        $post = [
            "password" => password_hash(trim($_POST["password"]), PASSWORD_DEFAULT),
            "name" => trim($_POST["name"]),
            "telephone" => trim($_POST["telephone"]),
            "email" => trim($_POST["email"])

        ];

        // проверка на существование пользователя с такими данными
        $query = $connection->prepare('SELECT  * FROM `сustomer` WHERE email = :email');
        $query->execute([
            "email" => $post["email"]
        ]);

        if ($query->rowCount() > 0) {
            $errMes = "Пользователь с такой почтой уже существует. <br/> <br/>";
            //echo "Пользователь с такой почтой уже существует";
        }

        $query = $connection->prepare('SELECT  * FROM `сustomer` WHERE telephone = :telephone');
        $query->execute([
            "telephone" => $post["telephone"]
        ]);

        if ($query->rowCount() > 0) {
            $errMes = $errMes . "Пользователь с таким номером уже существует";
            //echo "Пользователь с таким номером уже существует";
        }  // регистрация (добавление в бд пользователя)
        else {

            $sql = "INSERT `сustomer`(password,name,telephone,email) VALUES(:password,:name,:telephone,:email)";
            $query = $connection->prepare($sql);
            $query->execute($post);

            header('Location: authorization.php');

        }

    }

    // АВТОРИЗАЦИЯ
    if (isset($_POST['sub_auth'])) {


        $post = [
            "password" => trim($_POST["password"]) ,
            "telephone" =>  trim($_POST["login"]),
            "email" =>  trim($_POST["login"])
        ];


        // проверка на корректность введенных данных
        $query = $connection->prepare('SELECT  * FROM `сustomer` WHERE email=:email OR telephone = :telephone ');
        $query->execute([
            "email" =>  $post["email"],
            "telephone" =>  $post["telephone"]
        ]);

        // Возвращаем результат запроса в виде массива
        $user = $query->fetch();

        // Если вернулась сторока и пароль в соответвует введенномму
        if($user && password_verify($post["password"], $user["password"]))
            {
                session_start();
                $_SESSION["id"] = $user["id"];
                $_SESSION["name"] = $user["name"];
                header('Location: account.php');


            }
        else  $errMes = "Неверный логин или пароль" ;
    }


    // ВЫХОД
    if(isset($_POST['logout']))
    {
        session_start();
        unset( $_SESSION["name"] );
        session_destroy();
        header('Location: index.php');

    }



