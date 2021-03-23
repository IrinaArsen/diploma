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
        <?php require 'C:/MAMP/htdocs/public/blocks/header.php' ?>

        <?php
        if($_COOKIE['login'] == ''):
        ?>

        <?php require 'C:/MAMP/htdocs/app/views/home/reg.php' ?>

        <?php else: ?>

            <div class="container main">
                <h1>Сокра.тим</h1>
                <p>Вам нужно сократить ссылку? Сейчас мы это сделаем!</p>
                <div class="products">

                    <form action="/home" method="post">

                        <label for="linkl"></label>
                        <input type="text" name="linkl" id="linkl" class="form-control" placeholder="Длинная ссылка" value="<?=$_POST['linkl']?>">

                        <label for="links"></label>
                        <input type="text" name="links" id="links" class="form-control" placeholder="Короткое название" value="<?=$_POST['links']?>">

                        <div class="error"><?=$data['message']?></div>


                        <button type="submit" class="btn" id="send2" name="reduce-btn">
                            Уменьшить
                        </button>

                    </form>


                </div>
            </div>






                <?php endif; ?>




        <?php require 'C:/MAMP/htdocs/public/blocks/footer.php' ?>



    </body>
    </html>