<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "public"; ?>
<?php $page = "blog"; ?>
<?php include 'includes/header.php'; ?>
<?php find_selected_page(true); ?>
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header-wrap">
                        <div class="page-header">
                            <h1>Блог</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Главная</a></li>
                            <li class="active">Новости компании</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Single-Service-Start -->
    <section class="single-service-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-12">
                    <div class="service-sidebar sidebar-wrapper">

                        <div class="widget">
                            <h2 class="widget-title">Категории</h2>
                            <ul class="service-list">
                                <h2><?php echo htmlentities($current_page["menu_name"], ENT_QUOTES, "UTF-8"); ?></h2>
                                <?php if ($current_page) { ?>
                                    <?php echo($current_page["content"]); ?>
                                <?php } else { ?>
                                    <?php echo public_navigation($current_subject, $current_page); ?>
                                <?php } ?>


                            </ul>
                        </div><!-- /.widget -->

                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col -->
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <h2><?php echo htmlentities($current_page["menu_name"], ENT_QUOTES, "UTF-8"); ?></h2>
                    <?php if ($current_page) { ?>
                        <?php echo($current_page["content"]); ?>
                    <?php } else { ?>
                        <?php echo public_navigation($current_subject, $current_page); ?>
                    <?php } ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Single-Service-End-->

    <!-- cta start -->
    <section class="cta-section">
        <div class="container text-center">
            <a href="orderform.php" class="btn btn-primary quote-btn">Оформить заказ</a>


        </div><!-- /.container -->
    </section><!-- /.cta-section -->
    <!-- cta end -->

<?php include 'includes/footer.php'; ?>