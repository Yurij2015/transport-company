<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "public"; ?>
<?php $page = "orderform"; ?>
<?php include 'includes/header.php'; ?>
    <!-- welcome -->
    <section class="page-title-section">
        <div class="container">
            <div class="page-header-wrap">
                <div class="page-header">
                    <h1>Оформить заказ</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li class="active">Форма заказа</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="contact-info-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Заполните форму</h2>
                <h4> <?php echo message(); ?></h4>
                <h4>  <?php echo form_errors($errors); ?></h4>
                <h4> <?php $errors = errors(); ?></h4>
                <span class="section-sub">Мы рассмотрим заявку и свяжемся с Вами!</span>
            </div>

            <div class="row content-row">

                <div class="col-md-12">
                    <div class="contact-map">
                        <h3>Заказ транспортировки</h3>
                        <form id="mainContact" action="processing_order_form.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firsname">Ваше имя</label>
                                        <input name="firstname" type="text" class="form-control" placeholder=""
                                               required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="secondname">Ваша фамилия</label>
                                        <input name="secondname" type="text" class="form-control" placeholder=""
                                               required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Электронная почта</label>
                                <input name="email" type="email" class="form-control"
                                       id="email">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cargoname">Наименование груза</label>
                                        <input name="cargoname" type="text" class="form-control" placeholder=""
                                               required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="weight">Вес</label>
                                                <input name="weight" type="text" class="form-control"
                                                       placeholder="" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="height">Высота</label>
                                                <input name="height" type="text" class="form-control"
                                                       placeholder="" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="length">Ширина</label>
                                                <input name="length" type="text" class="form-control"
                                                       placeholder="" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="width">Длина</label>
                                                <input name="width" type="text" class="form-control"
                                                       placeholder="" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="transportfrom">Откуда</label>
                                        <input name="transportfrom" type="text" class="form-control" placeholder=""
                                               required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="transportto">Куда</label>
                                        <input name="transportto" type="text" class="form-control" placeholder=""
                                               required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Адрес</label>
                                        <input name="address" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phonenumber">Номер телефона</label>
                                        <input name="phonenumber" type="text" class="form-control"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-area">
                                <label for="description">Описание</label>
                                <textarea name="description" class="form-control" rows="6" placeholder=""></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Отправить заявку">
                        </form>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="contact-info">
                        <!--<h3>Head Office</h3>-->

                        <!--<address>-->
                        <!--384 Maple Circle<br>-->
                        <!--Simi Valley, Nevada 47424<br>-->
                        <!--Phone : +12 30 456789<br>-->
                        <!--Email : yourname@transport.com<br>-->
                        <!--</address>-->
                    </div><!-- /.contact-info -->

                    <div class="contact-map">
                        <!--<h3>Location Map</h3>-->

                        <!--<div id="contactMap"></div>-->
                    </div><!-- /.contact-info -->


                </div>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php'; ?>