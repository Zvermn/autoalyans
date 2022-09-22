<!DOCTYPE html>
<html lang='ru'>
<?php include 'includes/head.php'; ?>
<html>

<body>
    <div class="line-decorate"></div>
    <div class="wrap">
        <?php include 'includes/header.php'; ?>
        <main>
            <h1 class="page_2">Аренда специализированной <span class="red-text">техники в Иркутске</span></h1>
            <section class="rent-mashin">
                <h2>Каталог спецтехники</h2>
                <ul class="mashin-info">
                    <li class="mashin-info-item">
                        <div class="info-item img">
                            <picture>
                                <source media="(max-width:700px )" srcset="/img/maz.jpg">
                                <img src="/img/maz.jpg" alt="Маз">
                            </picture>
                        </div>
                        <div class="info-item table-info">
                            <table class="mashine-about">
                                <caption>Грузовик М1</caption>
                                <tr class="mashine-about-tr">
                                    <td>Максимальная высота выгрузки, м</td>
                                    <td>6,6</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Объем ковша, м</td>
                                    <td>3</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Предельная высота копания, м</td>
                                    <td>1,4</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Предельная глубина копания, м</td>
                                    <td>7,38</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Радиус копания, м</td>
                                    <td>10,2</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Стоимость, р/час (от):</td>
                                    <td>3000</td>
                                </tr>
                            </table>
                        </div>
                        <div class="info-item">
                            <button type="submit" class="btn-send open-pop-up">Заказать</button>
                        </div>
                    </li>
                    <li class="mashin-info-item">
                        <div class="info-item img">
                            <picture>
                                <source media="(max-width:700px )" srcset="/img/maz.jpg">
                                <img src="/img/maz.jpg" alt="Маз">
                            </picture>
                        </div>
                        <div class="info-item table-info">
                            <table class="mashine-about">
                                <caption>Грузовик М1</caption>
                                <tr class="mashine-about-tr">
                                    <td>Максимальная высота выгрузки, м</td>
                                    <td>6,6</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Объем ковша, м</td>
                                    <td>3</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Предельная высота копания, м</td>
                                    <td>1,4</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Предельная глубина копания, м</td>
                                    <td>7,38</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Радиус копания, м</td>
                                    <td>10,2</td>
                                </tr>
                                <tr class="mashine-about-tr">
                                    <td>Стоимость, р/час (от):</td>
                                    <td>3000</td>
                                </tr>
                            </table>
                        </div>
                        <div class="info-item">
                            <button type="submit" class="btn-send open-pop-up">Заказать</button>
                        </div>
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
</body>

</html>