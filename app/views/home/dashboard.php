
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кабинет пользователя</title>
    <meta name="description" content="Кабинет пользователя">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/user.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">




</head>
<body>
    <?php require 'C:/MAMP/htdocs/public/blocks/header.php' ?>

    <div class="container user">
        <h1>Кабинет пользователя</h1>
        <div class="user-info">
            <p>Привет, <b><?=$data['login']?></b></p>
            <form action="/home/dashboard" method="post">
                <input type="hidden" name="exit-btn">
            <button type="submit" class="btn">Выйти</button>
            </form>
        </div>

    </div>



    <?php require 'C:/MAMP/htdocs/public/blocks/footer.php' ?>

</body>
</html>
