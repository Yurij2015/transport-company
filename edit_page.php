<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/validation_functions.php'; ?>
<?php find_selected_page(); ?>
<?php

if (!$current_page) {
    //Неверный ID или нет в БД
    redirect_to("manage_table.php");
}
?>
<?php
if (isset($_POST['submit'])) {
    // обработка формы
    $id = $current_page["id"];
    $menu_name = mysql_prep($_POST["menu_name"]);
    $position = (int)$_POST["position"];
    $visible = (int)$_POST["visible"];
    $content = mysql_prep($_POST["content"]);
    // проверка формы
    $required_fields = array("menu_name", "position", "visible", "content");
    validate_presences($required_fields);
    $fields_with_max_lengths = array("menu_name" => 300);
    validate_max_lengths($fields_with_max_lengths);
    if (empty($errors)) {
        // Perform Update
        $query = "UPDATE pages SET ";
        $query .= "menu_name = '{$menu_name}', ";
        $query .= "position = {$position}, ";
        $query .= "visible = {$visible}, ";
        $query .= "content = '{$content}' ";
        $query .= "WHERE id = {$id} ";
        $query .= "LIMIT 1";
        $result = mysqli_query($connection, $query);
        if ($result && mysqli_affected_rows($connection) >= 0) {
            // Успех
            $_SESSION["message"] = "Страница успешно обновлена";
            redirect_to("manage_table.php?page={$id}");
        } else {
            // Ошибка
            $_SESSION["message"] = "Page update failed.";
        }
    }
} else {

} // скобка для окончания - if (isset($_POST['submit']))
?>
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
                    <?php echo form_errors($errors); ?>
                    <div class="blog-title"><h2>Редактировать
                            страницу: <?php echo htmlentities($current_page["menu_name"], ENT_QUOTES, "UTF-8"); ?></h2>
                    </div>
                    <form action="edit_page.php?page=<?php echo urlencode($current_page["id"]); ?>" method="post">
                        <p>Название:
                            <input type="text" name="menu_name" class="form-control"
                                   value="<?php echo htmlentities($current_page["menu_name"], ENT_QUOTES, "UTF-8"); ?>"/>
                        </p>
                        <p>Позиция:
                            <select name="position" class="form-control">
                                <?php
                                $page_set = find_pages_for_subject($current_page["subject_id"]);
                                $page_count = mysqli_num_rows($page_set);
                                for ($count = 1; $count <= $page_count; $count++) {
                                    echo "<option value=\"{$count}\"";
                                    if ($current_page["position"] == $count) {
                                        echo " selected";
                                    }
                                    echo ">{$count}</option>";
                                }
                                ?>
                            </select>
                        </p>
                        <p>Видимость:
                            <input type="radio" name="visible" value="0" <?php if ($current_page["visible"] == 0) {
                                echo "checked";
                            } ?> /> Нет
                            &nbsp;
                            <input type="radio" name="visible" value="1" <?php if ($current_page["visible"] == 1) {
                                echo "checked";
                            } ?>/> Да
                        </p>
                        <p>Содержимое:<br/>
                            <textarea class="form-control" name="content" rows="20"
                                      cols="80"><?php echo($current_page["content"]); ?></textarea>
                            <!--textarea name="content" rows="20" cols="80"><?php echo htmlentities($current_page["content"], ENT_QUOTES, "UTF-8"); ?></textarea-->
                        </p>
                        <input type="submit" name="submit" class="btn btn-primary" value="Редактировать"/>
                    </form>
                    <br/>
                    <a href="manage_table.php?page=<?php echo urlencode($current_page["id"]); ?>">Отмена</a>
                    &nbsp;&nbsp;
                    <a href="delete_page.php?page=<?php echo urlencode($current_page["id"]); ?>"
                       onclick="return confirm('Вы уверены?');">Удалить страницу</a>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Admin-End-->

<?php include 'includes/footer.php';
