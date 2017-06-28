<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
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

                    <?php echo message(); ?>
                    <?php $errors = errors(); ?>
                    <?php echo form_errors($errors); ?>
                    <h2>Создать категорию</h2>
                    <form role="form" action="create_subject.php" method="post">

                        <label>Название:</label>
                        <input type="text" class="form-control" name="menu_name" value=""/>

                        <label>Позиция:</label>

                        <select class="form-control" name="position">
                            <?php
                            $subject_set = find_all_subjects(false);
                            $subject_count = mysqli_num_rows($subject_set);
                            for ($count = 1; $count <= ($subject_count + 1); $count++) {
                                echo "<option value=\"{$count}\">{$count}</option>";
                            }
                            ?>
                        </select>


                        <label>Видимость:</label>
                        <input type="radio" name="visible" value="0"/> Нет
                        <input type="radio" name="visible" value="1"/> Да
                        </p>
                        <input type="submit" class="btn btn-group-justified" name="submit"
                               value="Создать категорию"/>

                    </form>
                    <br/>
                    <a href="manage_table.php">Отменить</a>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Admin-End-->

    <!-- //add category page -->
<?php include 'includes/footer.php';

