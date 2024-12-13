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
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/toast/jquery.toast.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/loader/loading.min.css">
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <!-- breadcrumb area -->
    <!-- shop-banner start -->
    <div class="breadcrumb-area breadcrumb-style-6">
        <div class="breadcrumb-inner">
            <h1 class="page-title">Product</h1>
            <ul class="page-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="#">Product</a></li>
            </ul>
        </div>
    </div>
    <!-- shop-banner end -->


    <section>
        <div class="container">
            <div class="container padding-top-70 padding-bottom-20">
                <h1 class="products_tab_title"><?php echo $categoryDetail['tc_title']; ?></h2>
            </div>
            <div class="row">
                <?php foreach ($list as $lp) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="shop_item_1">
                            <img class="" alt="shop" src="<?php echo ADMIN_UPLOADS . "product/" . $lp['tp_image']; ?>" />
                            <div class="ltr-box">
                                <p class="ltr-txt"><?php echo $lp['tp_liter']; ?></p>
                            </div>

                            <div class="image_text text-center">
                                <h5 class="tetx-white"><?php echo $lp['tp_title']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- contact area end -->
    <?php include('include/footer.php'); ?>
    <?php include('include/footer_inc.php'); ?>

</body>

</html>