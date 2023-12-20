<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/jobs.css">
    <style>
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

.form-container {
    width: 40%;
    background-color: #2ecc71;
    padding: 20px;
    border-radius: 10px;
    margin: 50px;
    box-sizing: border-box;
}

form {
    display: flex;
    flex-direction: column;
}

form input, form textarea {
    margin-bottom: 15px;
    padding: 10px;
    border: none;
    background-color: #4dde89;
    color: #fff;
    border-radius: 5px;
}

.submit-button {
    background-color: #3498db;
    color: #fff;
    padding: 15px 30px;
    border: none;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
    border-radius: 5px;
}

.submit-button:hover {
    background-color: #2980b9;
}
.text-container {
    width: 80%;
    text-align: center;
}

.text-container p {
    color: #2ecc71;
    font-size: 18px;
    line-height: 1.5;
    margin-left: 300px;
}
.text-container a{
    color: black;
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
                <li><a href="/main.php">Главная</a></li>
                <li><a href="/navigate/buy.php">Купить продукты</a></li>
                <li><a href="/navigate/jobs.php">Вакансии</a></li>
                <li><a href="/navigate/idea.php">Предложить идею</a></li>
                <li><a href="/EnglishSide/englishmain.html">Сменить язык</a></li>
                <li><a href="/Registration/register.php">Зарегистрироваться</a></li>
                <li><a href="/Registration/enter.php">Войти</a></li>
            </ul>
        </nav>
    </header>

    <div class="text-container">
        <p>
            Если хотите предложить идею то, заполните форму и ожидайте вызова от нашего администратора. 
            Более подробно про заявки идей можно узнать <a href="#">здесь</a>.
        </p>
    </div>

    <div class="form-container">
        <form>
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Фамилия">
            <input type="text" placeholder="Телефон">
            <input type="text" placeholder="Город">
            <input type="text" placeholder="Адрес">
            <textarea placeholder="Опишите свою идею"></textarea>
            <button class="submit-button">Отправить</button>
        </form>
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