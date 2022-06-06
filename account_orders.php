<?php
include "connection.php";
//echo '<pre>';
//print_r($orders);
//echo '</pre>';


$id = $_SESSION["id"];
$sql = "SELECT * FROM `orders` WHERE customer_id = $id";

$result = $connection -> query("SELECT * FROM `orders` WHERE customer_id = $id ORDER BY order_id DESC");
$orders = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($orders as $key => $order) {

    $order_id= $order['order_id'];
    $comment = $order['commentary'];
    $appointment =$order['appointment'];


    // проверяем статус заказа
    $status = $order['order_stat'];
    $result = $connection -> query("SELECT * FROM `order_status` WHERE ID = $status");
    $stat = $result->fetch(PDO::FETCH_ASSOC);
    $price = 'Стоимость устанавливается после снятия мерок';

    if($stat['ID']==2 || $stat['ID']==4)
    {
      $result = $connection -> query("SELECT * FROM `final_cheque` WHERE order_id = $order_id");
      $cheque= $result->fetch(PDO::FETCH_ASSOC);
      $price='Итого: '.$cheque['price'];
    }
    if($stat['ID']==3)
    {
        $price='';
    }


/*
    (если надо будет выводить тип изделия)
    $product_type = $order['type_id'];
    $result = $connection -> query("SELECT * FROM `product_type` WHERE type_id = $product_type");
    $type = $result->fetch(PDO::FETCH_ASSOC);*/



    if ($stat['ID']==1)
    {
        $total_price  = ' <p class="small">  '. $price. '   </p>  ';
    }
    else
    {
        $total_price = ' <p>  '. $price. '   </p>  ';
    }




        echo '<div class="order"> 

            <div class="order_number">

                <p class="number">Заказ №M'. $order_id . '   </p>

                <div class="condition">

                    <span>'. $stat['name'] . '</span>

                </div>

            </div>


                <div class="additional_info" >
                    <p class="comment">' .  $comment . ' </p>
                    <p> '. $appointment. ' </p> 
                   
                  '.$total_price.' 

                </div>

           

        </div>';


}





