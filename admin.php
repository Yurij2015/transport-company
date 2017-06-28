<?php require_once 'includes/session.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php confirm_logged_in(); ?>
<?php $layout_context = "admin"; ?>
<?php include 'includes/header.php'; ?>

    <!-- Admin-Start -->
    <section class="single-service-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-12">
                    <div class="service-sidebar sidebar-wrapper">

                        <div class="widget">
                            <h2 class="widget-title">Меню</h2>
                            <ul class="service-list">
                                <?php include "includes/adminmenu.php"?>
                            </ul>
                        </div><!-- /.widget -->

                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col -->
                <div class="col-md-9 col-sm-7 col-xs-12">

                    <h2>Страница администратора - <?php echo htmlentities($_SESSION["username"]); ?> </h2>
                    <p><?php echo htmlentities($_SESSION["username"]); ?>! Добро пожаловать в админ-панель!</p>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Admin-End-->

<?php include 'includes/footer.php';


