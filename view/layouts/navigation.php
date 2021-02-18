
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                        Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">Start Bootstrap</a>
            </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="/">Главная</a></li>
                    <li><a href="/about">Обо мне</a></li>
                    <li><a href="/feedback">Контакты</a></li>
                    <?php if(\models\User::isGuest()): ?>
                    <li><a href="/login">Войти</a></li>
                    <?php else: ?>
                    <li><a href="/manager">Панель</a></li>
                    <li><a href="/logout">Выйти</a></li>
                    <?php endif; ?>

                </ul>
            </div>

        </div>

    </nav>