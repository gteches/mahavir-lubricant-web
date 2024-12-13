<div class="bottom-bg"></div>

<!-- footer area start -->
<footer class="footer-area footer-style-2">
    <div class="footer-top padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="footer-widget widget">
                        <div class="about_us_widget">
                            <a href="<?php echo base_url(); ?>" class="footer-logo">
                                <img src="<?php echo ADMIN_UPLOADS . "site/" . $dataSite['ts_logo']; ?>" alt="footer logo" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="footer-widget widget widget_nav_menu d-flex justify-content-center">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url('about-us'); ?>">About</a></li>

                            <li><a href="<?php echo base_url('product'); ?>">Product</a></li>
                            <li><a href="<?php echo base_url('why-us'); ?>">Why Us</a></li>
                            <li><a href="<?php echo base_url('contact-us'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer-widget widget widget_nav_menu">
                        <ul>
                            <li>
                                <a href="<?php echo $dataSite['ts_facebook_link']; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo $dataSite['ts_twitter_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo $dataSite['ts_instagram_link']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo $dataSite['ts_youtube_link']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        © Gripson 2024 design and devloped
                        <i class="fa fa-heart"></i> by
                        <a href="https://gteches.com/" target="_blank">Gtech</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->