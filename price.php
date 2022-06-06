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

    <main class="main ">

        <nav>
            <ul class="navigation">
                <li> <a href="order.php">Пошив на заказ</a></li>
                <li> <a href="fabric.php">Ткани и Фурнитура</a></li>
                <li> <a href="portfolio.php">Портфолио</a></li>
                <li> <a href="price.php">Цены</a></li>
            </ul>
        </nav>


        <div class="prices_container">

            <form action="price.php" method="post" class="price_form">
                <select name="type"  class="types">
                    <option value="0">Тип изделия</option>
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


                <input type="submit" name="sub_ord" value="Применить" class="apply">
            </form>

            <?php include 'price_form.php'; ?>


        </div>




        <p class="warning w">*Стоимость работы зависит от сложности пошива, материала, модели, особенностей фигуры</p>



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