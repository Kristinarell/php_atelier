


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@500&family=GFS+Didot&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Авторизация</title>
</head>


<body>

<div class="wrapper">

    <?php include 'header.php'; ?>

    <main class="main authorization_page">


        <img src="img/main_img.png" alt="">

        <div class="authorization_form">


            <?php  include "order_form.php" ?>



            <form action="order.php" method="post" class="form-container">

                <div class="order_container form order_form " >
                    <span class="order-image"></span>

                    <?php if(isset($_SESSION["name"])):?>
                        <span class="order_btn"> <?php echo $_SESSION["name"];  ?>   </span>
                    <?php else: ?>
                    <a class="order_btn " href="authorization.php" >
                        Есть учетная запись? Войти или зарегистрироваться</a>
                    <?php endif; ?>
                </div>










                <!-- плагины jQuery
                 Стилизация собственного элемента select очень сложна


                <select name="type" class="form order_form calendar" >
                    <option>Тип изделия</option>
                    <option>Платья</option>
                </select>

                 <p>Выберите удобную для вас дату примерки:</p>
                -->
                <select name="type"  class="form order_form font " required>
                    <option value="">Тип изделия</option>
                    <option value="2">Блузки и рубашки</option>
                    <option value="6">Брюки</option>
                    <option value="9">Верхняя одежда</option>
                    <option value="4">Джемперы и кардиганы</option>
                    <option value="7">Джинсы</option>
                    <option value="8">Жакеты и пиджаки</option>
                    <option value="5">Костюмы</option>
                    <option value="1">Платья</option>
                    <option value="10">Футболки и топы</option>
                    <option value="3">Юбки</option>
                </select>

                <p class="date form order_form font">Дата снятия мерок   <input type="datetime-local" name="datetime" class="font calendar" required  >  </p>
                <textarea class="form order_comment" name="comment" placeholder="Комментарий к заказу"></textarea>
                <input type="submit" name="sub_ord" value="Отправить" class="btn_enter reg order_form">
                <?php if(!empty($errMsg)):?> <p class="error"> <?php echo $errMsg; ?>  </p> <?php endif; ?>


            </form>

        </div>


    </main>


    <footer class="footer">
        <div class="first-block">

            <div class="adress">
                <span class="adress-image"> </span>
                <h2>г. Москва, Стремянный переулок, 36</h2>
            </div>

            <div class="socialmedia">
                <div class="sochial">  <span class="inst"></span> <p>INSTAGRAM</p>  </div>
                <div class="sochial">  <span class="telega"></span> <p>TELEGRAM</p>  </div>
                <div class="sochial">  <span class="whats"></span> <p>WhatsApp</p>  </div>


            </div>

        </div>

        <div class="second-block">
            <h3>Контакты:</h3>
            <p>+7 (925)-183-84-13</p>
            <p>kristina2812g@gmail.com</p>

        </div>

        <div class="third-block">
            <h3>Работаем без выходных с 11:00 до 22:00</h3>
            <p>© 2022 by Kristinarell</p>

        </div>



    </footer>

</div>




</body>
</html>