
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


                <?php foreach ($newsList as $newsItem) :?>
                <div class="post-preview">
                    <a href="/news/<?php echo $newsItem['id']; ?>">
                        <h2 class="post-title">
                            <?php echo $newsItem['title']; ?>
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo $newsItem['autor']; ?></a> <?php echo $newsItem['date']; ?></p>
                </div>
                <?php endforeach; ?>


                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

<!-- Футер -->
<?php include_once ROOT.'/view/layouts/footer.php';?>

<!-- Подключение скриптов -->
<?php include_once ROOT.'/view/layouts/scripts.php';?>