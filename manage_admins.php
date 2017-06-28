<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php confirm_logged_in(); ?>
<?php
$admin_set = find_all_admins();
?>
<?php $layout_context = "admin"; ?>
<?php include "includes/header.php"; ?>


    <!-- Admin-Start -->
    <section class="single-service-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-12">
                    <div class="service-sidebar sidebar-wrapper">

                        <div class="widget">
                            <h2 class="widget-title">Меню</h2>
                            <ul class="service-list">
                                <h3>Публичная часть</h3>
                                <?php echo navigation($current_subject, $current_page); ?>
                                <h3>Администатор</h3>
                                <?php include "includes/adminmenu.php"?>
                            </ul>
                        </div><!-- /.widget -->

                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col -->
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <?php echo message(); ?>
                    <div class="blog-title"><h2>Управление администраторами</h2></div>
                    <table class="table table-hover">
                        <tr>
                            <th style="text-align: left; width: 200px;">Логин</th>
                            <th colspan="2" style="text-align: left;">Действия</th>
                        </tr>
                        <?php while ($admin = mysqli_fetch_assoc($admin_set)) { ?>
                            <tr>
                                <td><?php echo htmlentities($admin["username"], ENT_QUOTES, "UTF-8"); ?>
                                    <br><?php // echo htmlentities($admin["hashed_password"]); ?>
                                </td>
                                <td>
                                    <a href="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>">Редактировать</a>
                                </td>
                                <td><a href="delete_admin.php?id=<?php echo urlencode($admin["id"]); ?>"
                                       onclick="return confirm('Вы уверены?');">Удалить</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <br/>
                    <a href="new_admin.php">Добавить администратора</a>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Admin-End-->


<?php include 'includes/footer.php';

