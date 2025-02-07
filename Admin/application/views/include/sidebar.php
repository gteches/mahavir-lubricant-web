<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle"><?php echo $this->session->userdata("userData")["ts_company_name"]; ?></span>
        </a>


        <ul class="sidebar-nav">


            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "Dashboard" && ($this->router->fetch_method() == "index")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("dashboard"); ?>">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "HomeSlider" && ($this->router->fetch_method() == "add" || $this->router->fetch_method() == "list")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("home-slider-list"); ?>">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home Slider</span>
                </a>
            </li>
            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "Category" && ($this->router->fetch_method() == "add" || $this->router->fetch_method() == "index")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("category-list"); ?>">
                    <i class="align-middle" data-feather="table"></i> <span class="align-middle">Category</span>
                </a>
            </li>
            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "Product" && ($this->router->fetch_method() == "add" || $this->router->fetch_method() == "index")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("product-list"); ?>">
                    <i class="align-middle" data-feather="table"></i> <span class="align-middle">Product</span>
                </a>
            </li>
            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "ContactInquiry" && ($this->router->fetch_method() == "inquiryList")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("inquiry-list"); ?>">
                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Contact Inquiry</span>
                </a>
            </li>
            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "DealerInquiry" && ($this->router->fetch_method() == "inquiryList")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("dealer-inquiry-list"); ?>">
                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Dealer Inquiry</span>
                </a>
            </li>
            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "VendorInquiry" && ($this->router->fetch_method() == "inquiryList")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("vendor-inquiry-list"); ?>">
                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Vendor Inquiry</span>
                </a>
            </li>
            <li class="sidebar-item <?php echo ($this->router->fetch_class() == "SiteSetting" && ($this->router->fetch_method() == "siteSetting")) ? "active" : ""; ?>">
                <a class="sidebar-link" href="<?php echo base_url("site-setting"); ?>">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Site Setting</span>
                </a>
            </li>
        </ul>

    </div>
</nav>