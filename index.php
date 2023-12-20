<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Project</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="/Navigate/buy.php">Купить продукты</a></li>
                <li><a href="/Navigate/jobs.php">Вакансии</a></li>
                <li><a href="/Navigate/idea.php">Предложить идею</a></li>
                <li><a href="/EnglishSide/englishmain.html" >Сменить язык</a></li>
                <li><a href="/Registration/register.php">Зарегистрироваться</a></li>
                <li><a href="/Registration/enter.php">Войти</a></li>
            </ul>
        </nav>
    </header>

    <div class="product-container">
        <img src="/img/valley.jpg" alt="Наш товар" class="product-image">
        <div class="product-text">Наш продукт<br>Самый лучший путь к улучшению жизни<br>
            Только с нашим товаром вы перестанете беспокоиться об своих проблемах</div>
    </div>

    <div class="product-container1">
        <div class="registration-form">
            <form method="post">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="surname">Фамилия:</label>
                <input type="text" id="surname" name="surname" required>
    
                <label for="phone">Номер телефона:</label>
                <input type="number" id="phone" name="phone" required>

                <label for="email">Электронная почта:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
    
                <input type="submit" value="Купить" name="ok">
            </form>
    
            <input type="submit" value="Уже есть аккаунт?" name="account">
            

        <?php
        
        $filePath = 'registration/data.txt';

        if (isset($_POST['ok'])) {
            $username = $_POST['name'];
            $surname = $_POST['surname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (!empty($username) || !empty($surname) || !empty($phone) || !empty($email) || !empty($password) ) {
                $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
                
                $user = ["username" => $username ,
                     "surname" => $surname , 
                     "phone" => $phone ,
                     "email" => $email ,
                     "password" => $hashedPassword];

                $currentData = file_exists($filePath) ? json_decode(file_get_contents($filePath),true) : [];

                $currentData[] = $user;

                $dataToWrite = json_encode($currentData,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

                file_put_contents($filePath,$dataToWrite,LOCK_EX,null);

                header("Location: entered/enteredbuy.php");

                exit;

            }
        }
        
        ?>



        </div>
        <img src="/img/green.jpg" alt="Наш товар" class="product-image1">
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
