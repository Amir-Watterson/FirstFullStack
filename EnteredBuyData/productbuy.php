<?php
        
        if (isset($_POST['ok'])) {
            header("Location: /FinalBuyData/finalbuy.php");
            exit;
        }else {
            $error = "Нажмите на \"Оформить\" если все верно";
            echo '<div class="success-message">' . $error . '</div>';
        }
        
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список товаров</title>
    <link rel="stylesheet" href="/styles/EnteredBuyData/productbuy.css">
</head>
<body>
    <h1>Список товаров</h1>

    <?php
        
        $filePath = 'buydata.txt';

        if (file_exists($filePath)) {
            
            $data = file_get_contents($filePath);

            $dataArray = json_decode($data,true);

            $lastElement = end($dataArray);

            if ($lastElement !== false) {
                echo '<ul><li>'.$lastElement['version'].'</li>';
                echo '<li>'.$lastElement['color'].'</li>';
                echo '<li>'.$lastElement['size'].'</li></ul>';
            }else {
                echo "Вы не выбрали товары";
            }
        }else {
            echo "Ошибка";
        }

        ?>

    <form action="" method="post">
        
        <input type="submit" name="ok" value="Оформить">
      
    

    </form>
    

</body>
</html>
