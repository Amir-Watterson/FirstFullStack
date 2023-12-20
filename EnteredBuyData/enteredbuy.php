<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/buy.css">
    <style>
        .product-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
}

.product-image {
    width: 100px;
    height: 100px;
    object-fit: cover; 
    border-radius: 10px; 
}


.order-menu {
    width: 40%;
    background-color: #2ecc71;
    padding: 20px;
    border-radius: 10px;
}

.order-menu select {
    width: 100%;
    margin-bottom: 20px;
    padding: 10px;
    border: none;
    background-color: #27ae60;
    color: #fff;
    border-radius: 5px;
}

.buy-button {
    background-color: #3498db;
    color: #fff;
    padding: 15px 30px;
    border: none;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
    border-radius: 5px;
}

.buy-button:hover {
    background-color: #2980b9;
}


.order-menu input {
    transition: box-shadow 0.3s;
}

.order-menu input:focus {
    box-shadow: 0 0 10px #2ecc71;
}
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    background-image: url(/img/back.jpg);
}

header {
    background-color: #2ecc71; 
    padding: 15px 0;
}

nav {
    text-align: center;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

li {
    margin: 0 25px; 
}

a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    position: relative;
    transition: color 0.3s;
}

a:hover {
    color: #ecf0f1; 
}

a::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #ecf0f1;
    bottom: -5px;
    left: 0;
    transform-origin: center;
    transform: scaleX(0);
    transition: transform 0.3s;
}

a:hover::after {
    transform: scaleX(1);
}
footer {
    background-color: #2ecc71;
    padding: 20px;
    text-align: center;
}

.social-icons {
    margin-top: 10px;
}

.social-icons a {
    display: inline-block;
    margin: 0 10px;
}

.social-icons img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    transition: transform 0.3s;
}

.social-icons a:hover img {
    transform: scale(1.2);
}
input[type="submit"] {
    background-color: #4caf50; 
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px; 
}

input[type="submit"]:hover {
    background-color: #45a049; 
}
    </style>
    <title>Project</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/EnteredBuyData/enteredmain.php">Главная</a></li>
                <li><a href="/EnteredBuyData/enteredbuy.php">Купить продукты</a></li>
                <li><a href="/EnteredJobs/enteredjobs.php">Вакансии</a></li>
                <li><a href="/EnteredIdeaData/enteredidea.php">Предложить идею</a></li>
                
                
            </ul>
        </nav>
    </header>


    <div class="product-container">
        <div class="product-image">
            <img src="/img/channels4_profile.jpg" alt="Product Image">
        </div>

        <div class="order-menu">
            <form action="" method="post">
            <select name="version">
                <option value="Версия - NexusConnect = 27$">Версия - NexusConnect = 27$</option>
                <option value="Версия - QuantumLink = 56$">Версия - QuantumLink = 56$</option>
                <option value="Версия - StellarSync = 13$">Версия - StellarSync = 13$</option>
                <option value="Версия - HorizonTalk = 89$">Версия - HorizonTalk = 89$</option>
                <option value="Версия - EclipticMobile = 42$">Версия - EclipticMobile = 42$</option>
            </select>

            <select name="color">
                <option value="Цвет - Сиреневый = 8$">Цвет - Сиреневый = 8$</option>
                <option value="Цвет - Ярко-зеленый = 3$">Цвет - Ярко-зеленый = 3$</option>
                <option value="Цвет - Коралловый = 14$">Цвет - Коралловый = 14$</option>
                <option value="Цвет - Голубой = 5$">Цвет - Голубой = 5$</option>
                <option value="Цвет - Оранжевый = 11$">Цвет - Оранжевый = 11$</option>
            </select>

            <select name="size">
                <option value="Размер - 7.34px = 12$">Размер - 7.34px = 12$</option>
                <option value="Размер - 12.78px = 22$">Размер - 12.78px = 22$</option>
                <option value="Размер - 5.45px = 2$">Размер - 5.45px = 2$</option>
                <option value="Размер - 9.21px  = 15$">Размер - 9.21px  = 15$</option>
                <option value="Размер - 14.68px = 43$">Размер - 14.68px = 43$</option>
            </select>

            <input type="submit" value="Купить" name="ok">

            <?php
            
            $filePath = 'buydata.txt';

            if (isset($_POST['ok'])) {
                $version = $_POST['version'];
                $color = $_POST['color'];
                $size = $_POST['size'];

                $buyItems = ["version" => $version,
                             "color" => $color,
                             "size" => $size];

                $currentData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

                $currentData[] = $buyItems;

                $dataToWrite = json_encode($currentData,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

                file_put_contents($filePath,$dataToWrite,LOCK_EX,null);

                echo '<script>window.location.replace("productbuy.php");</script>';
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
            <select name="version2">
                <option value="Версия - EclipticMobile = 42$">Версия - EclipticMobile = 42$</option>
                <option value="Версия - QuantumLink = 56$">Версия - QuantumLink = 56$</option>
                <option value="Версия - EclipticMobile = 42$">Версия - EclipticMobile = 42$</option>
                <option value="Версия - EclipticMobileTC = 45$">Версия - EclipticMobileTC = 45$</option>
                <option value="Версия - NexusConnect = 27$">Версия - NexusConnect = 27$</option>
            </select>

            <select name="color2">
                <option value="Цвет - Сиреневый = 8$">Цвет - Сиреневый = 8$</option>
                <option value="Цвет - Черный = 12$">Цвет - Черный = 12$</option>
                <option value="Цвет - Красный = 5$">Цвет - Красный = 5$</option>
                <option value="Цвет - Зеленый = 7$">Цвет - Зеленый = 7$</option>
                <option value="Цвет - Фиолетовый = 15$">Цвет - Фиолетовый = 15$</option>
            </select>

            <select name="size2">
                <option value="Размер - 7.34px = 5$">Размер - 7.34px = 5$</option>
                <option value="Размер - 12.34px = 2$">Размер - 12.34px = 2$</option>
                <option value="Размер - 5.34px = 12$">Размер - 5.34px = 12$</option>
                <option value="Размер - 17.34px = 18$">Размер - 17.34px = 18$</option>
                <option value="Размер - 14.34px = 20$">Размер - 14.34px = 20$</option>
            </select>
            <input type="submit" value="Купить" name="ok2">

           <?php
            
            $filePath = 'buydata.txt';
            
            if (isset($_POST['ok2'])) {
                $version = $_POST['version2'];
                $color = $_POST['color2'];
                $size = $_POST['size2'];

                $buyItems = ["version" => $version,
                             "color" => $color,
                             "size" => $size];

                $currentData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

                $currentData[] = $buyItems;

                $dataToWrite = json_encode($currentData,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

                file_put_contents($filePath,$dataToWrite,LOCK_EX,null);

                echo '<script>window.location.replace("productbuy.php");</script>';
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