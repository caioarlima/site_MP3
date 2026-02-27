<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>MP3 em PHP</title>
    <link rel="stylesheet" href="global.css">
</head>
<body>
    
    <div class = "container">
            <?php

                include_once 'helpers.php';

                if (isset($_GET['page'])) {
                    if (file_exists("../pages/{$_GET['page']}.php")) {
                        include_once "../pages/{$_GET['page']}.php";
                    } else {
                        include_once '../pages/erro404.php';
                    }
                } else {
                    include_once '../pages/albuns.php';
                }
            ?>
    </div>

</body>
</html>