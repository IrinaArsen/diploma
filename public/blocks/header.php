<header>
    <div class="container top-menu">
        <div class="logo">
            <img src="/public/img/cat.png" alt="Logo">
            <span>Уберем все лишнее из ссылки!</span>
        </div>
        <div class="nav">
            <a href="/">Главная</a>
            <a href="/">Про нас</a>
            <a href="/contact">Контакты</a>

            <?php if($_COOKIE['login'] == ''): ?>

            <a href="/home/auth">Войти</a>


            <?php else: ?>

                <a href="/home/dashboard">
                    <button class="btn dashboard">Кабинет пользователя</button>

                </a>

            <?php endif; ?>


        </div>

    </div>


</header>