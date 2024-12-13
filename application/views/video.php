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
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <!-- breadcrumb area -->
    <div class="breadcrumb-area breadcrumb-style-6">
        <div class="breadcrumb-inner">
            <h1 class="page-title">Video</h1>
            <ul class="page-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="#">Video</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact area -->
    <section class="margin-100">
        <div class="container">
            <div class="heading section-inner-heading text-center margin-bottom-40">
                <h2>Video</h2>
            </div>
        </div>

        <div class="container gallery-container ">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <video class="video-box" height="100%" width="100%" poster="<?php echo base_url(); ?>assets/img/bg/1.png" controls>
                        <source src="<?php echo base_url(); ?>assets/img/video/video-one.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <video class="video-box" height="100%" width="100%" poster="<?php echo base_url(); ?>assets/img/bg/2.png" controls>
                        <source src="<?php echo base_url(); ?>assets/img/video/video-two.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <video class="video-box" height="100%" width="100%" poster="<?php echo base_url(); ?>assets/img/bg/3.png" controls>
                        <source src="<?php echo base_url(); ?>assets/img/video/video-one.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </section>

    <?php include('include/footer.php'); ?>
    <?php include('include/footer_inc.php'); ?>
</body>

</html>