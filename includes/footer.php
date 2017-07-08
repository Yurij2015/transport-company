<!-- footer-widget-section start -->
<section class="footer-widget-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1 col-sm-4">
                <div class="footer-widget">
                    <h3>Адрес и контакты</h3>
                    <address>
                        г. Корсаков<br>
                        ул. Портовая, 20<br>
                        <!-- Google Map Modal Trigger -->
                        <button type="button" class="modal-map" data-toggle="modal"
                                data-target="#cssMapModal">Мы на карте
                        </button>
                        <span class="tel">89146469252<br>89147592130<br>89621252245</span>

                    </address>
                    <!-- Modal -->
                    <div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Мы здесь!</h4>
                                </div>
                                <div class="modal-body">

                                    <div id="googleMap"></div>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- End Modal -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-3 col-sm-4">
                <div class="footer-widget">
                    <h3><a name="calculation" style="color: #606676">Оценка</a></h3>
                    <p>Стоимость перевозки 20 футовых контейнеров из/в Корсаков </p>
                    <h4>20 футовые контейнеры</h4>
                    <form action="/orderform.php#calculation" method="post">
                        <div class="form-group">
                            <label for="place">В/из населенного пункта</label>
                            <select class="form-control" name="place" id="place">
                                <option value="Александровск-Сахалинский">Александровск-Сахалинский</option>
                                <option value="Анива">Анива</option>
                                <option value="Арги-Паги">Арги-Паги</option>
                                <option value="Арсентьевка">Арсентьевка</option>
                                <option value="Береговое">Береговое</option>
                                <option value="Березняки">Березняки</option>
                                <option value="Быков">Быков</option>
                                <option value="Бошняково">Бошняково</option>
                                <option value="Вал">Вал</option>
                                <option value="Вахрушев">Вахрушев</option>
                                <option value="Взморье">Взморье</option>
                                <option value="Восток">Восток</option>
                                <option value="Восточный">Восточный</option>
                                <option value="Гастелло ">Гастелло</option>
                                <option value="Горнозаводск">Горнозаводск</option>
                                <option value="Долинск">Долинск</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Рассчитать">
                        </div>

                        <?php
                        $place = $_POST['place'];

                        if ($place == 'Александровск-Сахалинский') {
                            $calculation = 71000;
                        } elseif ($place == 'Анива') {
                            $calculation = 16000;
                        } elseif ($place == 'Арги-Паги') {
                            $calculation = 72500;
                        } elseif ($place == 'Арсентьевка') {
                            $calculation = 25000;
                        } elseif ($place == 'Береговое') {
                            $calculation = 14500;
                        } elseif ($place == 'Березняки') {
                            $calculation = 15000;
                        } elseif ($place == 'Бошняково') {
                            $calculation = 57000;
                        } elseif ($place == 'Вал') {
                            $calculation = 80000;
                        } elseif ($place == 'Вахрушев') {
                            $calculation = 36000;
                        } elseif ($place == 'Взморье') {
                            $calculation = 24000;
                        } elseif ($place == 'Восток') {
                            $calculation = 36000;
                        } elseif ($place == 'Восточный') {
                            $calculation = 28500;
                        } elseif ($place == 'Быков') {
                            $calculation = 19000;
                        }

                        ?>
                        <h5 style="color: red"><?php
                            if ($_POST) {
                            echo "Расчет для - " . $place;
                            ?></h5>
                        <h3 style="color: red"><?php
                            echo 'Стоимость: ';
                            echo $calculation;
                            }


                            ?>
                        </h3>
                    </form>


                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <div class="footer-widget">
                    <h3>Подпишитесь</h3>
                    <p>Введите адрес своей электронной почты</p>

                    <form class="newsletter-form">
                        <div class="form-group">
                            <label class="sr-only" for="InputEmail1">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1"
                                   placeholder="Ваш E-mail">
                            <button type="submit" class="">Отправить &nbsp;<i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </form>
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta-section -->
<!-- footer-widget-section end -->
<!-- copyright-section start -->
<footer class="copyright-section">
    <div class="container text-center">
        <div class="footer-menu">
            <ul>
                <!--                <li><a href="#">Privacy &amp; Cookies</a></li>-->
                <li><a href="/admin.php">админ-панель</a></li>
                <!--                <li><a href="#">Accessibility</a></li>-->
            </ul>
        </div>

        <div class="copyright-info">
                        <span>Copyright © <?php echo date("Y"); ?>, <a
                                    href="/">Транспортная компания ООО "Магистраль"<?php if ($layout_context == "admin") {
                                    echo ": Панель администратора";
                                } ?></a></span>
        </div>
    </div><!-- /.container -->
</footer>
<!-- copyright-section end -->
</div> <!-- .st-content -->
</div> <!-- .st-pusher -->

</div><!-- /st-container -->


<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<!-- owl.carousel -->
<script src="../owl.carousel/owl.carousel.min.js"></script>
<!-- Magnific-popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<!-- Offcanvas Menu -->
<script src="../js/hippo-offcanvas.js"></script>
<!-- inview -->
<script src="../js/jquery.inview.min.js"></script>
<!-- stellar -->
<script src="../js/jquery.stellar.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo.js"></script>
<!-- classie -->
<script src="../js/classie.js"></script>
<!-- selectFx -->
<script src="../js/selectFx.js"></script>
<!-- sticky kit -->
<script src="../js/jquery.sticky-kit.min.js"></script>
<!-- GOGLE MAP -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBciz48-T5b9XZkwNmirfCAp38Lwxt8WT8"></script>
<!--TWITTER FETCHER-->
<script src="../js/twitterFetcher_min.js"></script>
<!-- Custom Script -->
<script src="../js/scripts.js"></script>

</body>
</html>


<?php
if (isset($connection)) {
    mysqli_close($connection);
}
?>