<!DOCTYPE html>
<html lang='ru'>
<?php include 'includes/head.php'; ?>
<html>

<body>
    <div class="line-decorate"></div>
    <div class="wrap">
        <?php include 'includes/header.php'; ?>
        <main>
            <h1 id = 'h1'>Доставка любых грузов <span class="red-text">автомобильным</span> транспортом по России</h1>
            <section class="about">
                <h2>О компании "Альянс-Авто"</h2>
                <div class="about-wrap">
                    <div class="about-wrap-item-1">
                        <p>«Альянс -Авто» — надёжное транспортно-сервисное агентство, которое специализируется на
                            автомобильной перевозке грузов по территории России и <span class="about-blue-text">аренде
                                специализированной техники.</span>
                        </p>
                        <ul class="about-list">
                            <li>оперативная доставка груза</li>
                            <li>контроль перевозки</li>
                            <li>страхование перевозимого груза </li>
                            <li>отправка сборных грузов</li>
                        </ul>
                    </div>
                    <picture class="about-wrap-item-2">
                        <source srcset="/img/map-320.jpg" media="(max-width: 360px)" width="307">
                        <source srcset="/img/map-480.jpg" media="(max-width: 480px)" width="416">
                        <source srcset="/img/map-1024.jpg" media="(max-width: 1024px)" width="622">
                        <img src="/img/map-1920.jpg" alt="Карта России" width="641">
                    </picture>
                </div>
                <div class="stat-block numbers">
                    <div class="stat-block-item">
                        <span class="numb numscroller" data-min='1' data-max='9' data-delay='1.5' data-increment='1'>1</span>
                        <span class="text">лет на рынке</span>
                    </div>
                    <div class="stat-block-item">
                        <span class="numb numscroller" data-min='1' data-max='230' data-delay='20' data-increment='10'>1</span>
                        <span class="text">проверенных перевозчика</span>
                    </div>
                    <div class="stat-block-item">
                        <span class="numb numscroller" data-min='1' data-max='870' data-delay='30' data-increment='10'>1</span>
                        <span class="text">довольных клиентов</span>
                    </div>
                    <div class="stat-block-item">
                        <span class="numb numscroller" data-min='1' data-max='590000' data-delay='0.01' data-increment='700'>1</span>
                        <span class="text">тонн доставленных грузов</span>
                    </div>
                </div>
                <picture class="white-car wow slideInRight " data-wow-offset='100'>
                    <source srcset="/img/car-1-320.jpg" media="(max-width: 360px)" width="316">
                    <source srcset="/img/car-1-480.jpg" media="(max-width: 480px)  and (min-width: 361px)" width="390">
                    <img src="/img/car-1-1920.jpg" alt="Белая фура" width="501">
                </picture>
            </section>
            <section class="cost-calculation">
                <h2>Расчет стоимости грузов</h2>
                <div class="bacground-form">
                    <form action="#" class="form-1">
                        <div class="wrap-form">
                            <div class="from-wrap">
                                <label for="from">Откуда</label>
                                <input type="text" name="from" id="from" class="inp-from">
                            </div>
                            <div class="where-wrap">
                                <label for="where">Куда</label>
                                <input type="text" name="where" id="where" class="inp-where">
                            </div>
                            <div class="cargo-info-wrap">
                                <div class="weight-wrap">
                                    <label for="weight">Вес груза, т.</label>
                                    <input pattern="[0-9]{1,2}|[0-9],([0-9]){1,3}|[0-9]\.([0-9]){1,3}" type="text" name="weight" id="weight" class="inp-weight"  title="Введите вес в тоннах">
                                    <div class="icon-inp icon-weight"></div>
                                </div>
                                <div class="volume-wrap">
                                    <label for="volume">Объем груза, м<sup>3</sup>.</label>
                                    <input pattern="[0-9]{1,2}|[0-9],([0-9]){1,3}|[0-9]\.([0-9]){1,3}" type="text" name="volume" id="volume" class="inp-volume" title="Введите объем в м кубических">
                                    <div class="icon-inp icon-volume"></div>
                                </div>
                            </div>
                            <div class="text-area">
                                <span class="label-textarea">Комментарий к заказу</span>
                                <textarea name="comment" id="comment"></textarea>
                            </div>
                            <div class="name-wrap">
                                <label for="client-name">Ваше имя</label>
                                <input type="text" name="client-name" id="client-name" class="inp-name">
                            </div>
                            <div class="tel-wrap">
                                <label for="tel">Телефон</label>
                                <input type="tel" name="tel" id="tel" class="inp-tel tel-input phone-field">
                            </div>
                            <button type="submit" class="btn-form-1">Расчитать стоимость</button>
                        </div>
                    </form>
                </div>
            </section>
            <section class="combined-cargo ">
                <h2>Отправка сборных грузов</h2>
                <div class="cargo-wrap">
                    <div class="cargo-wrap-item text-item">
                        <p>Принимаем заказы на доставку сборных грузов</p>
                        <p>Сборные грузоперевозки — это экономичный способ доставки небольшой партии товара, продукции,
                            стройматериалов или оборудования, для которого не выгодно использовать отдельное
                            транспортное
                            средство.</p>
                        <p>Что такое «сборный груз»
                            Сборный груз — это груз, перевозимый сборными партиями. В одной машине мы перевозим сборные
                            грузы
                            разных клиентов, которые оплачивают только ту часть стоимости доставки сборных грузов,
                            которая
                            соответствует объему и месту, занятому под их груз.</p>
                    </div>
                    <div class="cargo-wrap-item box-item">
                        <picture class=''>
                            <source srcset="/img/box-320.jpg" media="(max-width: 370px)" width="316">
                            <source srcset="/img/box-480.jpg" media="(max-width: 480px)" width="396">
                            <source srcset="/img/box-768.jpg" media="(max-width: 768px)" width="648">
                            <source srcset="/img/box-1024.jpg" media="(max-width: 1024px) and (min-width: 769px)" width="491">
                            <img src="/img/box-1920.jpg" alt="Груз в коробках" class='wow bounceInDown' data-wow-offset='250' width="665">
                        </picture>
                    </div>
                </div>
                <button type="submit" class="cargo-btn open-pop-up">Отправить сборным грузом</button>
            </section>
            <section class="oversize-cargo">
                <h2>Негабаритный груз</h2>
                <div class="cargo-wrap">
                    <div class="cargo-wrap-item text-item">
                        <p>Осуществляем оперативное оформление сопроводительной документации, получение специальных
                            разрешений на перевозку тяжеловесных и крупногабаритных грузов по территории России.
                        </p>
                        <ul class="oversize-list">
                            <li>Оформление и подача заявлений в любые подразделения федерального
                                дорожного агенства
                            </li>
                            <li>Оформление схемы транспортного средства (Автопоезда)</li>
                            <li>Согласование с балансодержателями дорог (федеральных, местных, администрациями
                                населённых пунктов, учреждениями ЖКХ, Российскими железными дорогами (переезды) и т.д.)
                            </li>
                            <li>Оформление проектов организации дорожного движения</li>
                            <li>Доставка разрешений до адресата</li>
                        </ul>
                    </div>
                    <div class="cargo-wrap-item box-item">
                        <picture>
                            <source srcset="/img/IMG-oversize-320.jpg" media="(max-width: 370px)" width="306">
                            <source srcset="/img/IMG-oversize-480.jpg" media="(max-width: 480px)" width="416">
                            <source srcset="/img/IMG-oversize-768.jpg" media="(max-width: 768px)" width="494">
                            <source srcset="/img/IMG-oversize-1024.jpg" media="(max-width: 1024px)" width="493">
                            <img src="/img/IMG-oversize-1920.jpg" alt="Большегруз" class='wow slideInRight' data-wow-offset='250' width="772">
                        </picture>
                    </div>
                </div>
                <button type="submit" class="cargo-btn open-pop-up">Заказать перевоз негабаритного груза</button>
            </section>
            <section class="dangerouse-cargo">
                <h2>Перевозка опасных грузов</h2>
                <div class="cargo-wrap">
                    <div class="cargo-wrap-item text-item">
                        <p>«Альянс -Авто» — надёжное транспортно-сервисное агентство, которое специализируется на
                            автомобильной перевозке грузов по территории России, аренде специализированной техники и
                            выездном ремонте.
                        </p>
                    </div>
                    <div class="cargo-wrap-item box-item">
                        <picture>
                            <source srcset="/img/IMG-danger-320.jpg" media="(max-width: 370px)" width="316">
                            <source srcset="/img/IMG-danger-480.jpg" media="(max-width: 480px)" width="422">
                            <source srcset="/img/IMG-danger-768.jpg" media="(max-width: 768px)" width="494">
                            <source srcset="/img/IMG-danger-1024.jpg" media="(max-width: 1024px)" width="493">
                            <img src="/img/IMG-danger-1920.jpg" alt="Опасный груз" class='wow slideInRight' data-wow-offset='250' width="689">
                        </picture>
                    </div>
                </div>
                <button type="submit" class="cargo-btn open-pop-up">Заказать перевозку опасного груза</button>
            </section>
    </div>
    <section class="steps">
        <div class="wrap">
            <h2>Быстро организуем перевозку в три шага:</h2>
            <ul class="steps-list">
                <li class="steps-list-item"><span class="steps-numb">1<span
                            class="steps-numb-shadow">1</span></span>Расскажите нам какой груз и
                    куда вам необходимо его перевезти - <span class="link-blue">отправить заявку</span></li>
                <li class="steps-list-item"><span class="steps-numb">2<span class="steps-numb-shadow">2</span>
                    </span>Мы подберем под ваш груз
                    оптимальный транспорт, согласуем детали,
                    перезвоним и сообщим стоимость.</li>
                <li class="steps-list-item"><span class="steps-numb">3<span
                            class="steps-numb-shadow">3</span></span>Заключаем договор и ваш
                    груз отправляется в пункт назначения</li>
            </ul>
        </div>
    </section>
    <div class="wrap">
        <section class="insurance">
            <h2>Страхование</h2>
            <p>Страхование грузов при перевозке — одно из важных условий максимального снижения имущественных рисков
                собственников при доставке сборных грузов и возмещения ущерба в максимально короткие сроки.
            </p>
        </section>
        <?php include 'includes/section_send.php';?>
        </main>
    </div>
    <div class="decorate-footer"></div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/popup.php'; ?>
    <script src="/js/app.js"></script>
    <script src="/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/numscroller-1.0.js"></script>
</body>

</html>