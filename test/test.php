$filePath = 'path/to/your/file.txt';

if (isset($_GET['ok'])) {
    $username = $_GET['name'];
    $surname = $_GET['surname'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $password = md5($_GET['password']); // Хешируем пароль

    if (empty($username) || empty($surname) || empty($phone) || empty($email) || empty($password)) {
        $error = "Заполните все поля";
        echo '<div class="error-message">' . $error . '</div>';
    } else {
        $user = [
            'name' => $username,
            'surname' => $surname,
            'phone' => $phone,
            'email' => $email,
            'password' => $password,
        ];

        // Получаем текущий массив данных из файла, если он существует
        $currentData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

        // Добавляем нового пользователя в массив данных
        $currentData[] = $user;

        // Преобразуем массив в строку для записи в файл
        $dataToWrite = json_encode($currentData, JSON_PRETTY_PRINT);

        // Записываем данные в файл
        file_put_contents($filePath, $dataToWrite);

        $success = "Успешно";
        echo '<div class="success-message">' . $success . '</div>';
    }
}







$filePath = 'UserData.txt';

            $enteredData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

            if (isset($_POST['ok'])) {
                $enteredUserNameOrEmail = $_POST['nameOrEmail'];
                $enteredPassword = $_POST['password'];

                $userFound = false;

                if (!empty($enteredData)) {
                    foreach ($enteredData as $user) {
                        if ($user['username'] == $enteredUserNameOrEmail) {
                            if (password_verify($enteredPassword, $user['password'])) {
                                echo "Успешно";
                                $userFound = true;
                                break;
                            } else {
                                echo "Неверный пароль";
                                $userFound = true;
                                break;
                            }
                        }
                    }
                }

                if (!$userFound) {
                    echo "Пользователь не найден";
                }
            }


