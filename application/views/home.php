<!doctype html>
<html class="no-js">

<head>
    <?php include('include/header.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $dataSite['ts_company_name']; ?></title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .navbar-area .nav-container .nav-right-content .nav-right-menu li {
            color: #fff;
        }

        .navbar-area .bar1,
        .navbar-area .bar2,
        .navbar-area .bar3 {
            background: #fff;
        }
    </style>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <!-- banner start -->
    <div class="banner-area home-banner1">
        <div class="banner-slider banner-slider1">
            <?php foreach ($sliderList as $sl) { ?>
                <div class="banner-bg" style="background-image: url(<?php echo ADMIN_UPLOADS . "slider/" . $sl['ths_image']; ?>)">
                    <div class="container">
                        <div class="row h-100vh">
                            <div class="col-xl-10 col-lg-10 offset-lg-2 offset-xl-1 col-md-8 offset-md-2">
                                <div class="banner-inner">
                                    <p data-animation-in="fadeInLeft">
                                        <?php echo $sl['ths_title']; ?>
                                    </p>
                                    <h1 class="title1" data-animation-in="fadeInDown"><?php echo $sl['ths_sub_title']; ?></h1>
                                    <!-- <h1 class="title2" data-animation-in="fadeInUp">Mountain</h1> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- scroll down -->
        <div class="scroll">
            <a href="#home-about">
                <div class="scroll-btn"><span class="inside-bg"></span></div>
            </a>
            <span>Scroll to explore</span>
        </div>

        <div class="banner-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-5 d-none d-lg-block">
                        <div class="controler-wrapper">
                            <div class="active-controler">01</div>
                            <div class="progressbar">
                                <span class="home-slider-progress"></span>
                                <span class="home-slider-progress-active"></span>
                            </div>
                            <div class="total-controler"><?php echo sizeof($sliderList); ?></div>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-lg-1 col-lg-4 col-md-6 offset-md-2 col-sm-6 offset-sm-2 col-10 offset-1">
                        <div class="banner-sm-slider d-flex">
                            <?php foreach ($sliderList as $key => $sl) { ?>
                                <div class="slider-image<?php $key + 1; ?>"></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--social-icon-->
    </div>
    <!-- banner end -->

    <!-- home-about end -->

    <!-- home-rolling start -->
    <div class="home-rolling margin-100 home-about-sec" id="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rolling-content">
                        <div class="heading section-inner-heading">
                            <h2>Welcome to Mahavir Lubricants ‘Gripson’
                            </h2>
                        </div>
                        <p>
                           <b>Your Trusted Source for Premium Grease and Lubricant Oil Solutions in India!</b>
                        </p>
                        <p>Explore our wide range of superior grease and oil products under the <b> ‘Gripson’ </b>product brand prepared to fulfill the diverse requirements of automobile and other industries worldwide. With reliable lubrication offerings, expert advice, affordable pricing, and nationwide delivery, mahavirlubricants.com is your ultimate destination for getting lubrication solutions. Experience excellence today!
                        </p>
                        <a href="#" class="btn btn-style-2">Read more</a>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="home-rolling-slider">
                        <div class="single-item">
                            <img src="<?php echo base_url(); ?>assets/img/home1/rolling-slider1.png" alt="" />
                        </div>
                    </div>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="ceramic animated slideRotateFromRight">Gripson</div>
    </div>
    <!-- home-rolling end -->

    <!-- package-area start -->
    <div class="package-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading text-center margin-bottom-40">
                        <!-- <span>Our Product</span> -->
                        <h2>Engine Oil, Lubricant, Coolant</h2>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="row">
                <div class="swiper-slider swiper-container two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="<?php echo base_url(); ?>assets/img/home1/product-1.jpg" alt="slider image" />
                            </div>
                            <div class="slider-content">
                                <span> <a href="#">Engine Lubricants</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="<?php echo base_url(); ?>assets/img/home1/product-2.jpg" alt="slider image" />
                            </div>
                            <div class="slider-content">
                                <span> <a href="#">Gear Oil</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="<?php echo base_url(); ?>assets/img/home1/product-3.jpg" alt="slider image" />
                            </div>
                            <div class="slider-content">
                                <span> <a href="#">Engine Oil</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="<?php echo base_url(); ?>assets/img/home1/product-4.jpg" alt="slider image" />
                            </div>
                            <div class="slider-content">
                                <span> <a href="#">Engine Oil</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="slider-image">
                                <img src="<?php echo base_url(); ?>assets/img/home1/product-5.jpg" alt="slider image" />
                            </div>
                            <div class="slider-content">
                                <span> <a href="#">Gear Oil</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- package-area start -->

    <!-- home-blog start -->
    <div class="home-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-wrapper">
                        <div class="portfolio-blog">
                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="<?php echo base_url(); ?>assets/img/oil-sec/engineoil.jpg" />
                                <div class="content bottom-0">
                                    <!-- <span>Event Review, xtrmstudio, art</span> -->
                                    <h1>Engine Oil</h1>
                                </div>
                            </div>

                            <div class="blog-item width-33 top-100">
                                <img class="masonry-image" alt="masonry" src="<?php echo base_url(); ?>assets/img/oil-sec/lubricant.jpg" />
                                <div class="content top-0">
                                    <!-- <span>Event Review, xtrmstudio, art</span> -->
                                    <h1>Lubricant</h1>
                                </div>
                            </div>

                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="<?php echo base_url(); ?>assets/img/oil-sec/coolant.jpg" />
                                <div class="content bottom-0">
                                    <!-- <span>Event Review, xtrmstudio, art</span> -->
                                    <h1>Coolant</h1>
                                </div>
                            </div>

                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="<?php echo base_url(); ?>assets/img/oil-sec/industrial.jpg" />
                                <div class="content bottom-0">
                                    <!-- <span>Event Review, xtrmstudio, art</span> -->
                                    <h1>Industrial</h1>
                                </div>
                            </div>

                            <div class="blog-item width-33 top-100">
                                <img class="masonry-image" alt="masonry" src="<?php echo base_url(); ?>assets/img/oil-sec/automotive.jpg" />
                                <div class="content top-0">
                                    <!-- <span>Event Review, xtrmstudio, art</span> -->
                                    <h1>Automotive</h1>
                                </div>
                            </div>

                            <div class="blog-item width-33">
                                <img class="masonry-image" alt="masonry" src="<?php echo base_url(); ?>assets/img/oil-sec/engineoil.jpg" />
                                <div class="content bottom-0">
                                    <!-- <span>Event Review, xtrmstudio, art</span> -->
                                    <h1>Spciality Oils</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home-blog end -->

    <!-- vision mision start -->
    <section class="padding-60 margin-100 vission-mision-bg">
        <div class="vision-mision">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="vision-mission-img">
                            <img src="<?php echo base_url(); ?>assets/img/vission-mission/mission.png" />
                        </div>
                        <div class="vision-mission-txt">
                            <h3>Our Mission</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A ad
                                neque magni vel modi labore id iste qui! Quae praesentium
                                deserunt veritatis suscipit nesciunt est error aut neque
                                aliquam cumque?
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="vision-mission-img">
                            <img src="<?php echo base_url(); ?>assets/img/vission-mission/Vision.png" />
                        </div>
                        <div class="vision-mission-txt">
                            <h3>Our Vision</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A ad
                                neque magni vel modi labore id iste qui! Quae praesentium
                                deserunt veritatis suscipit nesciunt est error aut neque
                                aliquam cumque?
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="vision-mission-img">
                            <img src="<?php echo base_url(); ?>assets/img/vission-mission/corevalue.png" />
                        </div>
                        <div class="vision-mission-txt">
                            <h3>Our Core Value</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A ad
                                neque magni vel modi labore id iste qui! Quae praesentium
                                deserunt veritatis suscipit nesciunt est error aut neque
                                aliquam cumque?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- vision mision end -->

    <div class="home-rolling home-user-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 position-relative">
                    <div class="home-rolling-slider">
                        <div class="single-item pt-3">
                            <img src="<?php echo base_url(); ?>assets/img/home1/rolling-slider1.png" alt="" />
                        </div>
                    </div>
                    <span></span>
                </div>
                <div class="col-lg-7">
                    <div class="rolling-content">
                        <div class="heading section-inner-heading">
                            <h2>Management Desk</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                            sit amet semper augue. Maecenas gravida tortor sit amet enim
                            venenatis tristique. Nulla vehicula porta tortor non maximus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet
                            dignissim augue, nec posuere augue pharetra sed. Pellentesque
                            consequat ornare ornare. Aliquam erat volutpat. Nullam posuere
                            porttitor lectus, ut efficitur nisi tincidunt posuere.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                            sit amet semper augue. Maecenas gravida tortor sit amet enim
                            venenatis tristique. Nulla vehicula porta tortor non maximus.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet
                            dignissim augue, nec posuere augue pharetra sed. Pellentesque
                            consequat ornare ornare. Aliquam erat volutpat. Nullam posuere
                            porttitor lectus, ut efficitur nisi tincidunt posuere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- discount start -->
    <section class="cta-bg margin-100">
        <div class="container">
            <div class="cta-sec">
                <div>
                    <h2>Explore Our Premium Oil Products</h2>
                </div>
                <div class="cta-btn">
                    <a href="product.html" class="ctn_btn_inner sm-btn btn">
                        Explore Products
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- discount end -->

    <!-- home-contact start -->
    <div class="home-contact margin-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="contact-title">
                        <h1>Get In Touch</h1>
                    </div>
                </div>
            </div>
            <div class="row contact-row">
                <div class="col-lg-5">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29561.430038885253!2d70.77129842082007!3d22.157266703159152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958359f6684fe6b%3A0xf590914470ce3372!2sShapar%2C%20Gujarat%20360024!5e0!3m2!1sen!2sin!4v1728986586992!5m2!1sen!2sin"
                                width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor review</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-right">
                        <div class="form-group">
                            <form class="contact-form form" action="#" name="registration">
                                <div class="form-field margin-top-20 margin-bottom-20">
                                    <input name="firstname" id="name" type="text" placeholder="Your name" class="input-form" />
                                </div>
                                <div class="form-field margin-top-20 margin-bottom-20">
                                    <input id="email" type="email" placeholder="santa@gmail.com" class="input-form" data-required="text"
                                        data-required-email="email" name="email" />
                                </div>
                                <div class="form-field margin-top-20 margin-bottom-20">
                                    <input name="subject" id="subject" type="text" placeholder="Subject" class="input-form" />
                                </div>
                                <div class="form-field margin-top-20 margin-bottom-20">
                                    <textarea name="message" id="thought" cols="30" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="btn-wrapper desktop-center">
                                    <button type="submit" class="btn btn-element btn-medium btn-red">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home-contact end -->
    <?php include('include/footer.php'); ?>
    <?php include('include/footer_inc.php'); ?>
</body>

</html>