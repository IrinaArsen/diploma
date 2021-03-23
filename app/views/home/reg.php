<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <meta name="description" content="Главная страница">


    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">


</head>
<body>



<div class="container main">
    <h1>Сокра.тим</h1>
    <p>Вам нужно сократить ссылку? Прежде чем это сделать зарегистрируйтесь на сайте</p>
    <div class="products">
        <form action="/home/index.php" method="post">

            <label for="email"></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Введите ваш Email" value="<?=$_POST['email']?>">

            <label for="login"></label>
            <input type="text" name="login" id="login" class="form-control" placeholder="Введите ваш логин" value="<?=$_POST['login']?>">
            <label for="pass"></label>
            <input type="password" name="pass" id="pass" class="form-control"placeholder="Введите ваш пароль" value="<?=$_POST['pass']?>">

            <div class="error"><?=$data['message']?></div>
            <button type="submit" class="btn btn-success mt-5" id="reg_user">
                Зарегистрироваться
            </button>
            <p>Есть аккаунт? Тогда вы можете <a href="/home/auth">авторизоваться</a></p>
        </form>


    </div>
</div>




</body>
</html>