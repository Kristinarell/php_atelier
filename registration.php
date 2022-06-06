
<?php include "reg_form.php"; ?>

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
            <div class="inner_block">

                <form action="registration.php" , method="post" class="form-container" >

                    <input type="text" name="name" placeholder="Ваше имя:" required class="form">
                    <input type="tel" name="telephone" placeholder="Телефон:" required class="form">
                    <input type="email" name="email" placeholder="Email:" required class="form">
                    <input type="password" name="password" placeholder="Пароль:" required class="form">
                    <input type="submit" name="sub_reg"   class="btn_enter reg" value="Зарегестрироваться">
                    <?php if(!empty($errMes)):?> <p class="error"> <?php echo $errMes; ?>  </p> <?php endif; ?>

                    <!-- <a href="account.html" class="btn_enter reg">Зарегестрироваться</a> -->


                </form>
            </div>

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