<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="icon" type="image/jpg" href="/img/channels4_profile.jpg">
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
    
                <input type="submit" name="ok" value="Купить">
                <?php
                
                if (isset($_POST['ok'])) {
                    $username = $_POST['name'];
                    $surname = $_POST['surname'];
                    $phone = $_POST['phone'];

                    if (empty($username) || empty($surname) || empty($phone)) {
                        $error = "Заполните все поля";
                        echo '<div class="error-message">' . $error . '</div>';
                    }else {
                        header("Location: enteredbuy.php");
                        exit;
                    }
                }

                
                ?>
            </form>
    
            
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
