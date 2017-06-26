<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "public"; ?>
<?php $page = "contact-form"; ?>
<?php include 'includes/header.php'; ?>
<?php find_selected_page(true); ?>
    <section class="page-title-section">
        <div class="container">
            <div class="page-header-wrap">
                <div class="page-header">
                    <h1>Контакты</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a></li>
                    <li class="active">Контакты</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="contact-info-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Обратная связь</h2>
                <span class="section-sub">Задавайте интересующие вопросы в форме</span>
            </div>

            <div class="row content-row">

                <div class="col-md-7">
                    <div class="contact-map">
                        <h3>Контактная форма</h3>
                        <form id="mainContact" action="sendemail.php" method="POST">
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input name="name" type="text" class="form-control" required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email">Эл. адрес</label>
                                <input name="email" type="email" class="form-control" required="" placeholder="">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Тема</label>
                                        <input name="subject" type="text" class="form-control" required=""
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Номер телефона</label>
                                        <input name="phone" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-area">
                                <label for="message">Сообщение</label>
                                <textarea name="message" class="form-control" rows="6" required=""
                                          placeholder=""></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="contact-info">
                        <h3>Адрес компании</h3>

                        <address>
                            г. Корсаков<br>
                            ул. Портовая, 20<br>
                            Номер телефона : +79146469252<br>
                            Электронная почта : logistic@magistraltransport.ru<br>
                        </address>
                    </div><!-- /.contact-info -->

                    <div class="contact-map">
                        <h3>Мы на карте</h3>

                        <div id="contactMap"></div>
                    </div><!-- /.contact-info -->


                </div>
            </div>
        </div>
    </section>
    <!-- cta start -->
    <section class="cta-section">
        <div class="container text-center">
            <a href="orderform.php" class="btn btn-primary quote-btn">Оформить заказ</a>

        </div><!-- /.container -->
    </section><!-- /.cta-section -->
    <!-- cta end -->
<?php include 'includes/footer.php';