<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
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
                                <?php include "includes/adminmenu.php" ?>
                            </ul>
                        </div><!-- /.widget -->

                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col -->
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <h3>Вопросы от посетителей</h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Пользователь</th>
                            <th>Телефон</th>
                            <th>Дата</th>
                            <th>E-mail</th>
                            <th>Сообщение</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT `name`, date, message, phonenumber, email FROM contactform ";
                        $result = mysqli_query($connection, $query);
                        confirm_query($result);
                        ?>
                        <?php
                        while ($master = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $master["name"]; ?></td>
                                <td><?php echo $master["phonenumber"]; ?></td>
                                <td><?php echo $master["date"]; ?></td>
                                <td><?php echo $master["email"]; ?></td>
                                <td><?php echo $master["message"]; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Admin-End-->
<?php include 'includes/footer.php';