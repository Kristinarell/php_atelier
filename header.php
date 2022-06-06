

<?php
// функцию нужно запускать вначале каждой страницы, на которой мы хотим в дальнейшем прочитать данные из сессии
    session_start(); ?>




          <header class="header">

                    <div class="left_side"> <a class="logo" href="index.php">Kristinarell</a> </div>

                    <div class = "right_side">
                        <span class="tel-image"></span> <span class="tel">+7 (925)-183-84-13</span>

                        <?php if(isset($_SESSION["name"])): ?>
                        <a class="entrance" href="account.php">

                            <?php echo $_SESSION["name"]; ?>

                        </a>
                        <?php else: ?>
                        <a class="entrance" href="authorization.php">
                            Sign in

                        </a>
                        <?php endif; ?>
                        <span class="user-image"></span>



                    </div>

          </header>




