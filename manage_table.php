<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php confirm_logged_in(); ?>
<?php $layout_context = "admin"; ?>
<?php include 'includes/header.php'; ?>
<?php find_selected_page(); ?>


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
                                <?php include "includes/adminmenu.php" ?>
                            </ul>
                        </div><!-- /.widget -->

                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col -->
                <div class="col-md-9 col-sm-7 col-xs-12">

                    <h2>Управление сайтом</h2>
                    <?php echo message(); ?>
                    <?php if ($current_subject) { ?>
                        <h2>Редактирование страниц категорий</h2>
                        Название: <?php echo htmlentities($current_subject["menu_name"], ENT_QUOTES, "UTF-8"); ?>
                        <br/>
                        Позиция: <?php echo $current_subject["position"]; ?><br/>
                        Видимость: <?php echo $current_subject["visible"] == 1 ? 'да' : 'нет'; ?><br/>
                        <br/>

                        <a href="edit_subject.php?subject=<?php echo urldecode($current_subject["id"]); ?>">Изменить</a>

                        <div style="margin-top: 2em; border-top: 1px solid #000000;">
                            <h2>Страницы в этой категории:</h2>
                            <ul>
                                <?php
                                $subject_pages = find_pages_for_subject($current_subject["id"]);
                                while ($page = mysqli_fetch_assoc($subject_pages)) {
                                    echo "<li>";
                                    $safe_page_id = urlencode($page["id"]);
                                    echo "<a href=\"manage_table.php?page={$safe_page_id}\">";
                                    echo htmlentities($page["menu_name"], ENT_QUOTES, "UTF-8");
                                    echo "</a>";
                                    echo "</li>";
                                }
                                ?>
                            </ul>
                            <br/>
                            + <a href="new_page.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Добавить
                                новую
                                страницу в категорию</a>
                        </div>
                    <?php } elseif ($current_page) { ?>
                        <h2>Редактирование страниц</h2>
                        <p><a href="edit_page.php?page=<?php echo urlencode($current_page['id']); ?>"
                              class="btn btn-primary">Редактировать
                                страницу</a></p>
                        Название: <?php echo htmlentities($current_page["menu_name"], ENT_QUOTES, "UTF-8"); ?><br/>
                        Позиция: <?php echo $current_page["position"]; ?><br/>
                        Видимость: <?php echo $current_page["visible"] == 1 ? 'yes' : 'no'; ?><br/>
                        Содержимое:<br/>
                        <div class="view-content">
                            <?php echo($current_page["content"]); ?>
                        </div>
                    <?php } else { ?>
                        Пожалуйста, выберите пункт меню
                    <?php } ?>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Admin-End-->

<?php include 'includes/footer.php';

