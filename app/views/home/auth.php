
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <meta name="description" content="Авторизация">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">


</head>
<body>
    <?php require 'C:/MAMP/htdocs/public/blocks/header.php' ?>


    <div class="container main">
        <h1>Авторизация</h1>
        <p>Здесь вы можете авторизоваться на сайте</p>
        <div class="products">
            <form action="/home/auth" method="post">

                <label for="login"></label>
                <input type="text" name="login" id="login" class="form-control" placeholder="Введите ваш логин" value="<?=$_POST['login']?>">

                <label for="pass"></label>
                <input type="password" name="pass" id="pass" class="form-control"placeholder="Введите ваш пароль" value="<?=$_POST['pass']?>">

                <div class="error"><?=$data['message']?></div>
                <button type="submit" class="btn" id="send">
                    Готово
                </button>

            </form>


            </div>
    </div>
    <?php require 'C:/MAMP/htdocs/public/blocks/footer.php' ?>





</body>
</html>