<!-- Подключение стилей и файлов -->
<?php include_once ROOT.'/view/layouts/include.php';?>

<!-- Навигация -->
<?php include_once ROOT.'/view/layouts/navigation.php';?>

<!-- Header -->
<?php include_once ROOT.'/view/layouts/header.php';?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <?php if (isset($rezult)) : ?>
                <p>Вы успешно зарегистрированы</p>
                <?php else :?>

                <p>Форма регистрации пользователя.</p>


                <?php if (isset($errors) and is_array($errors)) : ?>
                <ul>
                <?php foreach ($errors as $error) : ?>
                <li> <?php echo $error ?> </li>
                <?php endforeach; ?>
                </ul>
                <?php endif; ?>


                <form action="" method="POST" name="register">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Your name</label>
                            <input type="text" class="form-control" placeholder="Ваше имя" name="name">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Ваш email" name="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Пароль"  name="pass">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" name="send" value="Отправить">
                        </div>
                    </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
  <hr>

    <!-- Футер -->
    <?php include_once ROOT.'/view/layouts/footer.php';?>

    <!-- Подключение скриптов -->
    <?php include_once ROOT.'/view/layouts/scripts.php';?>