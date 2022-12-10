<!DOCTYPE html>
<html lang='ru'>
<?php include 'includes/head.php'; ?>
<html>

<body class="wrap-body">
    <div class="line-decorate"></div>
    <div class="wrap">
        <?php include 'includes/header.php'; ?>
        <main>
            <h1 id='h1' class="contacts-h1">Наши контакты</h1>
            <section class="contacts">
                <div class="item-contacts contacts-info">
                    <h2 class="contacts-h2">Транспортная компания<span>&#12318;Альянс-Авто&#12318;</span></h2>
                    <ul class="contacts-list">
                        <li>
                            <div class="icon-contacts map"></div>
                            <div class="content-contacts">
                                <span class="adress">Адрес:</span>
                                <p>664523, Иркутская область, Иркутский р-н, рп Маркова, мкр. Березовый, д. 234, оф. 29
                                </p>
                                <a href="mailto:perevozzka38@yandex.ru" class="mail-contacts">perevozzka38@yandex.ru</a>
                                <a href="#" class="download-contacts">Скачать карточку предприятия</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon-contacts manager">
                            </div>
                            <div class="content-contacts">
                                <span class="managers">Менеджеры:</span>
                                <a href="tel:89148986168">+7 (914) 898-61-68</a>
                                <a href="tel:89836921777">+7 (983) 692-17-77</a>
                                <a href="tel:89648087775">+7 (964) 808-77-75</a>
                            </div>

                        </li>
                        <li>
                            <div class="icon-contacts marketing">
                            </div>
                            <div class="content-contacts">
                                <span class="marketings">Менеджеры:</span>
                                <a href="tel:89041248598">+7 (904) 124-85-98</a>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="item-contacts contacts-map">
                    <img src="/img/map-contacts.jpg" alt="Карта" width="530px" class="map-contacts">
                </div>
            </section>
        </main>
    </div>
    <div class="decorate-footer"></div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/popup.php'; ?>
    <script src="/js/app.js"></script>
</body>

</html>