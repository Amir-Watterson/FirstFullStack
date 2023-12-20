<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/Navigate/buy.css">
    <title>Project</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/Navigate/buy.php">Купить продукты</a></li>
                <li><a href="/Navigate/jobs.php">Вакансии</a></li>
                <li><a href="/Navigate/idea.php">Предложить идею</a></li>
                <li><a href="/EnglishSide/englishmain.html">Сменить язык</a></li>
                <li><a href="/Registration/register.php">Зарегистрироваться</a></li>
                <li><a href="/Registration/enter.php">Войти</a></li>
            </ul>
        </nav>
    </header>


    <div class="product-container">
        <div class="product-image">
            <img src="/img/channels4_profile.jpg" alt="Product Image">
        </div>

        <div class="order-menu">
            <form action="" method="post">
            <select>
                <option value="version1">Версия - NexusConnect = 27$</option>
                <option value="version2">Версия - QuantumLink = 56$</option>
                <option value="version3">Версия - StellarSync = 13$</option>
                <option value="version4">Версия - HorizonTalk = 89$</option>
                <option value="version5">Версия - EclipticMobile = 42$</option>
            </select>

            <select>
                <option value="version1">Цвет - Сиреневый = 8$</option>
                <option value="version2">Цвет - Ярко-зеленый = 3$</option>
                <option value="version3">Цвет - Коралловый = 14$</option>
                <option value="version4">Цвет - Голубой = 5$</option>
                <option value="version5">Цвет - Оранжевый = 11$</option>
            </select>

            <select>
                <option value="version1">Размер - 7.34px = 12$</option>
                <option value="version2">Размер - 12.78px = 22$</option>
                <option value="version3">Размер - 5.45px = 2$</option>
                <option value="version4">Размер - 9.21px  = 15$</option>
                <option value="version5">Размер - 14.68px = 43$</option>
            </select>
                <input type="submit" value="Купить" name="ok">
                <?php
            
            if (isset($_POST['ok'])) {
                
                echo '<script>window.location.replace("/Registration/enter.php");</script>';
            }
            
            ?>
            </form>
        </div>
    </div>

    <div class="product-container">
        <div class="product-image">
            <img src="/img/channels4_profile.jpg" alt="Product Image">
        </div>

        <div class="order-menu">
            <form action="" method="post">
            <select>
                <option value="version1">Версия - EclipticMobile = 42$</option>
                <option value="version2">Версия - QuantumLink = 56$</option>
                <option value="version3">Версия - EclipticMobile = 42$</option>
                <option value="version4">Версия - EclipticMobileTC = 45$</option>
                <option value="version5">Версия - NexusConnect = 27$</option>
            </select>

            <select>
                <option value="version1">Цвет - Сиреневый = 8$</option>
                <option value="version2">Цвет - Черный = 12$</option>
                <option value="version3">Цвет - Красный = 5$</option>
                <option value="version4">Цвет - Зеленый = 7$</option>
                <option value="version5">Цвет - Фиолетовый = 15$</option>
            </select>

            <select>
                <option value="version1">Размер - 7.34px = 5$</option>
                <option value="version2">Размер - 12.34px = 2$</option>
                <option value="version3">Размер - 5.34px = 12$</option>
                <option value="version4">Размер - 17.34px = 18$</option>
                <option value="version5">Размер - 14.34px = 20$</option>
            </select>
            <input type="submit" name="ok" value="Купить">

            <?php
            
            if (isset($_POST['ok'])) {
                
                echo '<script>window.location.replace("/Registration/enter.php");</script>';
            }
            
            ?>
            </form>
        </div>
    </div>

    



    <footer>
        <div class="social-icons">
            <a href="#" target="_blank"><img src="/img/free-icon-telegram-2111646.png" alt="Telegram"></a>
            <a href="#" target="_blank"><img src="/img/free-icon-youtube-4494485.png" alt="YouTube"></a>
            <a href="#" target="_blank"><img src="/img/free-icon-instagram-2111463.png" alt="Instagram"></a>
            <a href="#" target="_blank"><img src="/img/free-icon-github-2111432.png" alt="GitHub"></a>
            <a href="mailto:amiratazanov2@gmail.com"><img src="/img/free-icon-gmail-8504650.png" alt="Email"></a>
        </div>
    </footer>

</body>
</html>