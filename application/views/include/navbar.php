<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- search Popup -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="#" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search....." />
        </div>
        <button type="submit" class="submit-btn">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<!-- //. search Popup -->
<div class="billa-navbar">
    <nav class="navbar navbar-area navbar-expand-lg <?php if ($this->router->fetch_class() == 'Welcome' && $this->router->fetch_method() == 'index') { ?>nav-style-01 home-navbar<?php } else {
                                                                                                                                                                                    echo "nav-style-02";
                                                                                                                                                                                } ?>">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </button>
            </div>
            <div class="logo">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo ADMIN_UPLOADS . "site/" . $dataSite['ts_logo']; ?>" alt="logo" /></a>
            </div>
            <div class="collapse navbar-collapse" id="billatrail_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">The Company</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                            <li><a href="<?php echo base_url('core-values'); ?>">Core Values</a></li>
                            <li><a href="<?php echo base_url('milestone'); ?>">Milestone</a></li>
                            <li><a href="<?php echo base_url('infrastructure'); ?>">Infrastructure</a></li>
                            <li><a href="<?php echo base_url('our-presence'); ?>">Our Presence</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('why-us'); ?>">Why Us</a>
                    </li>   
                    <li>
                        <a href="<?php echo base_url('video'); ?>">Videos</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Product</a>
                        <ul class="sub-menu">
                            <?php foreach ($dataCategory as $dc) { ?>
                                <li><a href="<?php echo base_url('products/' . $dc['tc_id']); ?>"><?php echo $dc['tc_title']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Contact</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>
                            <li><a href="<?php echo base_url('become-dealer'); ?>">Become a Dealer</a></li>
                            <li><a href="<?php echo base_url('become-vendor'); ?>">Become a Vendor</a></li>
                        </ul>
                    </li>

                  
                </ul>
            </div>
            <!-- <div class="nav-right-content">
                <ul class="nav-right-menu">
                    <li class="search" id="search">
                        <i class="fa fa-search"></i>
                    </li>
                    <li>
                        <div class="humberger-wrapper d-none d-lg-block">
                            <div role="navigation" class="humberger-menu">
                                <div id="menuToggle">
                                    <input type="checkbox" />
                                    <span></span>
                                    <span class="second"></span>
                                    <span></span>

                                    <ul id="menu">
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="#">Sign Up</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> -->
        </div>
    </nav>
</div>