<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "public"; ?>
<?php $page = "index"; ?>
<?php include 'includes/header.php'; ?>
<?php find_selected_page(true); ?>
    <!-- welcome -->
    <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./img/slider/slide-1.jpg" alt="Заказ транспортировки">
                <!--Slide Image-->
                <div class="container">
                    <div class="carousel-caption">
                        <small class="animated fadeIn">ЗАКАЗ ТРАНСПОРТИРОВКИ</small>
                        <div class="phone animated lightSpeedIn">89621252245, 89147592130</div>
                        <h1 class="animated lightSpeedIn">Грузоперевозки</h1>

                        <p class="lead animated lightSpeedIn">Обеспечиваем сохранность груза,<br>качественное
                            обслуживание,<br> быстрое оформление. </p>
                        <a class="btn btn-primary animated lightSpeedIn" href="orderform.php">Оформить
                            заказ</a>
                    </div>
                    <!--.carousel-caption-->
                </div>
                <!--.container-->
            </div>
            <!--.item-->
            <div class="item">
                <img src="./img/slider/slide-2.jpg" alt="Работа с клиентами">
                <!--Slide Image-->
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="animated bounceIn">Мы ценим ваше время</h1>
                        <p class="lead animated bounceIn">Наши специалисты с радостью помогут вам и проконсультируют по
                            всем <br> интересующим
                            вопросам.</p>
                        <a class="btn btn-primary animated bounceIn" href="orderform.php">Оформить заказ</a>
                    </div>
                    <!--.carousel-caption-->
                </div>
                <!--.container-->
            </div>
            <!--.item-->
        </div>
        <!--.carousel-inner-->
        <!-- Controls -->
        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- #main-carousel-->


    <!-- services start -->
    <section class="service-home section-padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-title">Наши услуги</h2>
                    <span class="section-sub">Только качественные услуги<br> на рынке транспортных перевозок</span>
                </div>
            </div> <!-- /.row -->

            <div class="row content-row">
                <div class="col-sm-4">
                    <div class="service">
                        <div class="service-thumb-home">
                            <a href="#"><img src="../img/trans.jpg" alt=""></a>
                        </div>

                        <h3>Транспортировка и логистика</h3>

                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="service">
                        <div class="service-thumb-home">
                            <a href="#"><img src="../img/moving.jpg" alt=""></a>
                        </div>
                        <h3>Перемещение и сохранение</h3>

                    </div>

                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="service">
                        <div class="service-thumb-home">
                            <a href="#"><img src="../img/shipping.jpg" alt=""></a>
                        </div>
                        <h3>Перевозки водным транспортом</h3>

                    </div>
                </div><!-- /.col-sm-4 -->
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- services end -->

    <!-- featuer-section start -->
    <section class="feature-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-xs-12">
                    <h2>Ваш груз будет в целости и сохранности!</h2>

                    <p>Компания несет ответственность за груз с момента его получения до момента выдачи надлежащему
                        лицу. В этот промежуток перевозчик должен следить за безопасной погрузкой, выгрузкой и
                        транспортировкой и хранением доверенного груза.
                        Если перевозимый груз требует особых условий (например, соблюдения температурного режима,
                        влажности), это должно быть прописано в договоре.</p>
                    <p>Одним из способов снижения риска повреждения или пропажи грузов является пломбирование контейнера
                        или вагона. В случае таможенного досмотра перепломбирование осуществляется сотрудниками таможни.
                        Также для обеспечения сохранность груза может использоваться группа сопровождения, вооруженная
                        охрана или экспедиторы</p>

                    <a href="orderform.php" class="btn btn-primary">Оформить перевозку</a>
                </div>

            </div>
        </div>
    </section>
    <!-- featuer-section end -->


<?php include 'includes/footer.php'; ?>