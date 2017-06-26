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
                        <span class="tel">+79146469252</span>
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
                                    <h4 class="modal-title" id="myModalLabel">Our Location</h4>
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
                    <h3>Новости компании</h3>

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
<!--        <div class="footer-menu">-->
<!--            <ul>-->
<!--                <li><a href="#">Privacy &amp; Cookies</a></li>-->
<!--                <li><a href="#">Terms &amp; Conditions</a></li>-->
<!--                <li><a href="#">Accessibility</a></li>-->
<!--            </ul>-->
<!--        </div>-->

        <div class="copyright-info">
                        <span>Copyright © <?php echo date("Y"); ?>, <a
                                    href="/">Транспортная компания<?php if ($layout_context == "admin") {
                                    echo ": Панель администратора";
                                } ?></a></span>
        </div>
    </div><!-- /.container -->
</footer>
<!-- copyright-section end -->
</div> <!-- .st-content -->
</div> <!-- .st-pusher -->

<!-- OFF CANVAS MENU -->
<div class="offcanvas-menu offcanvas-effect">
    <div class="offcanvas-wrap">
        <div class="off-canvas-header">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
                    id="off-canvas-close-btn">&times;
            </button>
        </div>
        <ul id="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
            <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
            <li>
                <a href="#">Pages</a>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Service</a></li>
                    <li><a href="our-people.html">Our people</a></li>
                    <li><a href="career.html">Career</a></li>
                    <li><a href="faq.html">FAQ Page</a></li>
                    <li><a href="typography.html">Typography</a></li>
                </ul>

            </li>
            <li>
                <a href="#">Services</a>
                <ul>
                    <li><a href="air.html">Air transportation</a></li>
                    <li><a href="marine.html">Marine transportation</a></li>
                    <li><a href="moving.html">Moving &amp; storage</a></li>
                    <li><a href="shipping.html">Shipping &amp; operations</a></li>
                    <li><a href="transportation.html">Transportation logistics</a></li>
                    <li><a href="trucking.html">Trucking</a></li>
                </ul>

            </li>
            <li>
                <a href="#">Blog</a>
                <ul>
                    <li>
                        <a href="blog.html">Standard blog</a>
                    </li>
                    <li>
                        <a href="blog-single.html">Single blog</a>
                    </li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="typography.html">Typography</a></li>
        </ul>
        <div class="offcanvas-widgets hidden-sm hidden-xs">
            <div id="twitterWidget">
                <h2>Tweeter feed</h2>
                <div class="twitter-widget"></div>
            </div>
            <div class="newsletter-widget">
                <h2>Stay in Touch</h2>
                <p>Enter your email address to receive news &amp; offers from us</p>

                <form class="newsletter-form">
                    <div class="form-group">
                        <label class="sr-only" for="InputEmail1">Email address</label>
                        <input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
                        <button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
                    </div>
                </form>

            </div><!-- newsletter-widget -->
        </div>
    </div>
</div><!-- .offcanvas-menu -->
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