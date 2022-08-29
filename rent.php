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
                    <li class="rent-list-item"><img src="/img/truck.jpg" alt="Грузовик"><a
                            href="#">Грузовики</a><span>2</span></li>
                    <li class="rent-list-item"><img src="/img/trawl.jpg" alt="Трал"><a href="#">Тралы</a><span>24</span>
                    </li>
                    <li class="rent-list-item"><img src="/img/self - loading.jpg" alt="Самогруз"><a
                            href="#">Самогрузы</a><span>24</span></li>
                    <li class="rent-list-item"><img src="/img/loader.jpg" alt="Погрузчик"><a
                            href="#">Погрузчики</a><span>44</span></li>
                    <li class="rent-list-item"><img src="/img/grader.jpg" alt="Грейдер"><a
                            href="#">Грейдеры</a><span>1</span></li>
                    <li class="rent-list-item"><img src="/img/excavator.jpg" alt="Экскаватор"><a
                            href="#">Экскаваторы</a><span>7</span></li>
                    <li class="rent-list-item"><img src="/img/dump-truck.jpg" alt="Самосвал"><a
                            href="#">Самосвалы</a><span>55</span></li>
                    <li class="rent-list-item"><img src="/img/crane.jpg" alt="Кран"><a href="#">Краны</a><span>54</span>
                    </li>
                    <li class="rent-list-item"><img src="/img/bulldozer.jpg" alt="Бульдозер"><a
                            href="#">Бульдозеры</a><span>45</span></li>
                </ul>
            </section>
            <?php include 'includes/section_send.php'; ?>
        </main>
    </div>
    <div class="decorate-footer"></div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/popup.php'; ?>
    <script src="/js/app.js"></script>
</body>

</html>