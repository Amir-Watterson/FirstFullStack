<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/Registration/registration.css">
    <title>Registration</title>

</head>

<body>
    <div class="registration-panel">
        <h2 style="color: #333;">Регистрация</h2>
        <form method="post">
        <input type="text" placeholder="Имя" name="name">
        <input type="text" placeholder="Фамилия" name="surname">
        <input type="number" placeholder="Номер телефона" name="phone">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Пароль" name="password">
        <input type="submit" name="ok" value="Зарегистрироваться" class="submit">
        <?php
        $filePath = 'data.txt';

        if (isset($_POST['ok'])) {
            $username = $_POST['name'];
            $surname = $_POST['surname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($username) || empty($surname) || empty($phone) || empty($email) || empty($password) ) {
                $error = "Заполните все поля";
                echo '<div class="error-message">' . $error . '</div>';
            }
            elseif (strlen($password) <= 7) {
                $passwordError = "Пароль должен содержать больше 7 символов";
                echo '<div class="error-message">' . $passwordError . '</div>';
            }
             else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $success = "Успешно";
                echo '<div class="success-message">' . $success . '</div>';

                $user = ["username" => $username ,
                     "surname" => $surname , 
                     "phone" => $phone ,
                     "email" => $email ,
                     "password" => $hashedPassword];

                     $currentData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true ) : [];

                     $currentData[] = $user;
         
                     $dataToWrite = json_encode($currentData,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
         
                     file_put_contents($filePath,$dataToWrite,LOCK_EX, null);

                header("Location: /wait.html");
                exit;
            }
            
        }
        ?>
    </form>
    
        <p>Уже есть аккаунт? <a href="enter.php">Войдите</a></p>
    </div>
   
</body>
</html>
