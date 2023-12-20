<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/FinalBuyData/finalbuy.css">
    <title>Статус заказа</title>
</head>
<body>
    <h1>Ваш заказ успешно оформлен!</h1>

    <p>Скоро с свами свяжеться наш администратор.</p>

    <p>Спасибо за покупку. Мы рады обслуживать вас.</p>
    <form action="" method="post">
        <input type="submit" name="ok" value="Продолжить покупки">
    </form>
    <?php
    
    if (isset($_POST['ok'])) {
        header("Location: /EnteredBuyData/enteredbuy.php");
        exit;   
    }
    
    ?>
    

</body>
</html>
