<?php

include "connection.php";


if (isset($_POST['sub_ord']))
{

    if (isset($_POST['type']))
    {

        $type = $_POST['type'];


            if ($type==0)
            {
                $result = $connection->query("SELECT * FROM `catalog` ORDER BY name");
                $products = $result->fetchAll(PDO::FETCH_ASSOC);


                foreach($products  as $key => $product )
                {
                    echo '
                    <div class="price_record">              
                    <p class="record">'. $product['name']. '   </p> 
                    <p class="record"> от '. $product['price']. '   </p>
                    
                    </div>  
                    <p class="line"></p>' ;}
            }


        $result = $connection->query("SELECT * FROM `catalog` WHERE type  = $type");
        $products = $result->fetchAll(PDO::FETCH_ASSOC);


        foreach($products  as $key => $product )
        {
            echo '
                    <div class="price_record">              
                    <p class="record">'. $product['name']. '   </p> 
                    <p class="record"> от '. $product['price']. '   </p>
                    
                    </div>  
                    <p class="line"></p>' ;}


        }


    }














else{
    $result = $connection->query("SELECT * FROM `catalog` ORDER BY name");
    $products = $result->fetchAll(PDO::FETCH_ASSOC);


    foreach ($products as $key => $product) {
        echo '
                    <div class="price_record">              
                    <p class="record">' . $product['name'] . '   </p> 
                    <p class="record"> от ' . $product['price'] . '   </p>
                    
                    </div>  
                    <p class="line"></p>';
    }
}




