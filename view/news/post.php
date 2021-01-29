<!-- Подключение стилей и файлов -->
<?php include_once ROOT.'/view/layouts/include.php';?>

<!-- Навигация -->
<?php include_once ROOT.'/view/layouts/navigation.php';?>

<!-- Header -->
<?php include_once ROOT.'/view/layouts/header.php';?>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php echo $newsItem['post']; ?>
                </div>
            </div>
        </div>
    </article>

    <hr>

    <!-- Футер -->
    <?php include_once ROOT.'/view/layouts/footer.php';?>

    <!-- Подключение скриптов -->
    <?php include_once ROOT.'/view/layouts/scripts.php';?>

