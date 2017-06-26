<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "public"; ?>
<?php $page = "orderform"; ?>
<?php include 'includes/header.php'; ?>
<?php find_selected_page(true); ?>

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
                <span class="section-sub">Мы рассмотрим заявку и свяжемся с вами!</span>
            </div>

            <div class="row content-row">

                <div class="col-md-12">
                    <div class="contact-map">
                        <h3>Заказ транспортировки</h3>
                        <form id="mainContact" action="sendemail.php" method="POST">
                            <div class="form-group">
                                <label for="name">Ваше имя</label>
                                <input name="name" type="text" class="form-control" required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email">Электронная почта</label>
                                <input name="email" type="email" class="form-control" required="" placeholder="">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Груз</label>
                                        <input name="subject" type="text" class="form-control" required=""
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Количество</label>
                                        <input name="phone" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Откуда</label>
                                        <input name="subject" type="text" class="form-control" required=""
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Куда</label>
                                        <input name="phone" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Адрес</label>
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
                                <label for="message">Описание</label>
                                <textarea name="message" class="form-control" rows="6" required=""
                                          placeholder=""></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Отправить заявку</button>
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

       <!-- cta start -->
    <section class="cta-section">
        <div class="container text-center">
            <a href="orderform.php" class="btn btn-primary quote-btn">Оформить заказ</a>

            <!-- Modal -->
            <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your
                                goods.</h4>
                        </div>
                        <div class="modal-body">
                            <form id="contactForm" action="sendemail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" name="name" type="text" class="form-control" required=""
                                                   placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company">Company Name</label>
                                            <input id="company" name="company" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input id="phone" name="phone" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input id="email" name="email" type="email" class="form-control" required=""
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City Name</label>
                                            <input id="city" name="city" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input id="subject" name="subject" type="text" class="form-control"
                                                   required="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-area">
                                    <label for="message">Your Message</label>
                                    <textarea id="message" name="message" class="form-control" rows="6" required=""
                                              placeholder=""></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section><!-- /.cta-section -->
    <!-- cta end -->


<?php include 'includes/footer.php'; ?>