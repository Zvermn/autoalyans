<!DOCTYPE html>
<html lang='ru'>
<?php include 'includes/head.php'; ?>
<html>

<body>
    <div class="line-decorate"></div>
    <div class="wrap">
        <?php include 'includes/header.php'; ?>
        <main>
            <h1>Аренда специализированной <span class="red-text">техники в Иркутске</span></h1>
            <section class="rent">
                <h2>Каталог спецтехники</h2>
                <ul class="rent-list">
                    <li class="rent-list-item"><a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/truck-768.jpg" media="(max-width: 700px)">
                                <img src="/img/truck.jpg" alt="Грузовик">Грузовики<span>2</span>
                        </a>
                        </picture>
                    </li>
                    <li class="rent-list-item"><a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/trawl-768.jpg" media="(max-width: 700px)">
                                <img src="/img/trawl.jpg" alt="Трал">Тралы<span>24</span>
                            </picture>
                        </a>
                    </li>
                    <li class="rent-list-item">
                        <a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/self - loading-768.jpg" media="(max-width: 700px)">
                                <img src="/img/self - loading.jpg" alt="Самогруз">Самогрузы<span>24</span>
                            </picture>
                        </a>
                    </li>
                    <li class="rent-list-item">
                        <a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/loader-768.jpg" media="(max-width: 700px)">
                                <img src="/img/loader.jpg" alt="Погрузчик">Погрузчики<span>44</span>
                            </picture>
                        </a>
                    </li>
                    <li class="rent-list-item">
                        <a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/grader-768.jpg" media="(max-width: 700px)">
                                <img src="/img/grader.jpg" alt="Грейдер">Грейдеры<span>1</span>
                            </picture>
                        </a>
                    </li>
                    <li class="rent-list-item">
                        <a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/excavator-768.jpg" media="(max-width: 700px)">
                                <img src="/img/excavator.jpg" alt="Экскаватор">Экскаваторы<span>7</span>
                            </picture>
                        </a>
                    </li>
                    <li class="rent-list-item">
                        <a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/dump-truck-768.jpg" media="(max-width: 700px)">
                                <img src="/img/dump-truck.jpg" alt="Самосвал">Самосвалы<span>55</span>
                            </picture>
                        </a>
                    </li>
                    <li class="rent-list-item">
                        <a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/crane-768.jpg" media="(max-width: 700px)">
                                <img src="/img/crane.jpg" alt="Кран">Краны<span>54</span>
                            </picture>
                        </a>
                    </li>
                    <li class="rent-list-item">
                        <a href="/rent-info.php">
                            <picture>
                                <source srcset="/img/bulldozer-768.jpg" media="(max-width: 700px)">
                                <img src="/img/bulldozer.jpg" alt="Бульдозер">Бульдозеры<span>45</span>
                            </picture>
                        </a>
                    </li>
                </ul>
            </section>
            <?php include 'includes/section_send.php'; ?>
        </main>
    </div>
    <div class="decorate-footer"></div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/popup.php'; ?>
    <script src="/js/app.js"></script>
    <script src="wow.min.js"></script>
    <script>new WOW().init();</script>
</body>

</html>