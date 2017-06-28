<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "admin"; ?>
<?php include 'includes/header.php'; ?>
    <!-- Admin-Start -->
    <section class="single-service-contents">
        <div class="container">

                <div class="row">
                    <h3>Вопросы от посетителей</h3>
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>E-mail</th>
                            <th>Груз</th>
                            <th>Вес</th>
                            <th>Высота</th>
                            <th>Длина</th>
                            <th>Ширина</th>
                            <th>Из</th>
                            <th>В</th>
                            <th>Адрес</th>
                            <th>Телефон</th>
                            <th>Описание</th>
                            <th>Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT firstname, secondname, email, cargoname, weight, height, length, width, transportfrom, transportto, address, phonenumber, description, date FROM orderform ";
                        $result = mysqli_query($connection, $query);
                        confirm_query($result);
                        ?>
                        <?php
                        while ($master = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $master["firstname"]; ?></td>
                                <td><?php echo $master["secondname"]; ?></td>
                                <td><?php echo $master["email"]; ?></td>
                                <td><?php echo $master["cargoname"]; ?></td>
                                <td><?php echo $master["weight"]; ?></td>
                                <td><?php echo $master["height"]; ?></td>
                                <td><?php echo $master["length"]; ?></td>
                                <td><?php echo $master["width"]; ?></td>
                                <td><?php echo $master["transportfrom"]; ?></td>
                                <td><?php echo $master["transportto"]; ?></td>
                                <td><?php echo $master["address"]; ?></td>
                                <td><?php echo $master["phonenumber"]; ?></td>
                                <td><?php echo $master["description"]; ?></td>
                                <td><?php echo $master["date"]; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Admin-End-->
<?php include 'includes/footer.php';