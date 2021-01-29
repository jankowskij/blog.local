
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
                <div>Привет, <?php echo $user['name']; ?></div>
                <div>Это твоя админпанель. Она пока не похожа на нее, но все еще впереди! :)</div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Футер -->
    <?php include_once ROOT.'/view/layouts/footer.php';?>

    <!-- Подключение скриптов -->
    <?php include_once ROOT.'/view/layouts/scripts.php';?>