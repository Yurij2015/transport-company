<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "public"; ?>
<?php $page = "about"; ?>
<?php include 'includes/header.php'; ?>
<?php find_selected_page(true); ?>
    <!-- welcome -->


    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header-wrap">
                        <div class="page-header">
                            <h1>О компании</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Главная</a></li>
                            <li class="active">О компании</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- about-intro-section -->
    <section class="about-intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-intro">
                        <h2>ООО “Магистраль”</h2>

                        <p class="lead">Организация перевозки морем Владивосток- Корсаков-Курилы ( по направлению Южные
                            Курилы),
                            автоперевозка по Курилам.</p>
                        <p class="lead">Организация перевозки 40 рефрижераторных и 20 рефрижераторных морем
                            Корсаков-Владивоток.</p>
                        <p class="lead"> Организация перевозки 40 рефрижераторных и 20 рефрижераторных и сухих
                            контейнеров морем
                            Владивосток-Корсаков. </p>
                        <p class="lead">Автодоставка по всему Сахалину 20 фут и 40 фут. контейнеров, перевозка
                            генерального груза.
                        </p>

                        <div class="company-in-number">
                            <div class="row">

                            </div>
                        </div>
                    </div><!-- /.about-intro -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5"></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.about-intro-section -->

    <!-- cta start -->
    <section class="cta-section">
        <div class="container text-center">
            <a href="orderform.php" class="btn btn-primary quote-btn">Оформить заказ</a>

        </div><!-- /.container -->
    </section><!-- /.cta-section -->
    <!-- cta end -->


<?php include 'includes/footer.php'; ?>