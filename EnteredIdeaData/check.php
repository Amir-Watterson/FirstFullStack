<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Идея дня</title>
    <link rel="stylesheet" href="/styles/ideaandjob.css">
</head>
<body>
    
        <?php
        
        $filePath = 'idea.txt';

        // Проверяем существование файла

        if (file_exists($filePath)) {

            // Читаем содержимое файла

            $data = file_get_contents($filePath);

            // Декодируем данн ые (например, если это JSON)

            $dataArray = json_decode($data, true);

            // Выбираем последний элемент массива

            $lastElement = end($dataArray);

            // Проверяем, удалось ли выбрать элемент

            if ($lastElement !== false) {

                // Выводим данные последнего элемента на экран

                echo '<h1>Имя - ' . $lastElement['name'] . '</h1>';
                echo '<p>Фамилия - ' . $lastElement['surname'] . '</p>';
                echo '<p>Телефон - ' . $lastElement['phone'] . '</p>';
                echo '<p>Город - ' . $lastElement['city'] . '</p>';
                echo '<p>Адрес - ' . $lastElement['addres'] . '</p>';
                echo '<p>Идея - ' . $lastElement['idea'] . '</p>';

            } else {

                echo 'Файл не содержит данных или не является корректным форматом.';

            }

            }
        
        
        ?>
        <p>Если все верно нажмите на отправить </p>
            <form action="" method="post">
                <input type="submit" value="Отправить" name="ok">
                <?php
                
                if (isset($_POST['ok'])) {
                    echo '<script>window.location.replace("/EnteredBuyData/enteredmain.php");</script>';
                    exit;
                }
                
                ?>
            </form>
</body>
</html>
