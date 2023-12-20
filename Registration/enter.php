<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/Registration/enter.css">
    <title>Login</title>
</head>

<body>
    <div class="login-panel">
        <h2 style="color: #333;">Вход</h2>
        <form method="post">
        <input type="text" placeholder="Имя" name="name">
        <input type="password" placeholder="Пароль" name="password">
        <input type="submit" name="ok" value="Войти">
        </form>

        <?php

            $filePath = 'data.txt'; //Путь к файлу

            $enteredData = file_exists($filePath) ? json_decode(file_get_contents($filePath),true) : []; //Декодирование и пеобразование массива

            if (isset($_POST['ok'])) {
                
                $enteredUserName = $_POST['name'];
                $enteredPassword = $_POST['password'];

                $userFound = false;//флажок

                if (!empty($enteredData)) {
                    foreach ($enteredData as $user) {
                        if ($user['username'] == $enteredUserName) {
                            if (password_verify($enteredPassword,$user['password'])) {
                                $succes = "Успешно";
                                echo '<div class="succes-message">' . $succes . '</div>';
                                $userFound = true;
                                header("Location: /wait.html");
                                exit;
                            }else {
                                $errorPassword = "Неверный пароль";
                                echo '<div class="error-message">' . $errorPassword . '</div>';
                                $userFound = true;
                                break;
                            }
                        }
                    }
                }
                    if (!$userFound) {
                        $userDoNotFound = "Пользователь не найден";
                        echo '<div class="error-message">' . $userDoNotFound . '</div>';
                    }
            }


        ?>
        <p>Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a></p>
    </div>
</body>

</html>
