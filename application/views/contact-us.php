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
    <div class="breadcrumb-area breadcrumb-style-6">
        <div class="breadcrumb-inner">
            <h1 class="page-title">Contact us</h1>
            <ul class="page-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact area -->
    <div class="contact-area margin-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $dataSite['ts_map_iframe']; ?>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right">

                        <div class="contact-title">Send Us a Message</div>
                        <div class="form-group">
                            <form class="contact-form form" method="post" id="contact-form" action="#" name="registration">
                                <div class="form-field margin-top-20 margin-bottom-25">
                                    <label for="name">Full Name</label>
                                    <input name="name" id="name" type="text" placeholder="Your Full Name" class="input-form" />
                                </div>
                                <div class="form-field margin-top-20 margin-bottom-25">
                                    <label for="email">Email</label>
                                    <input name="email" id="email" type="email" placeholder="Your email" class="input-form"
                                        data-required="text" data-required-email="email" />
                                </div>
                                <div class="form-field margin-top-20 margin-bottom-25">
                                    <label for="thought">Thought</label>
                                    <textarea name="message" id="thought" cols="30" rows="5" placeholder="Your Thoughts"></textarea>
                                </div>
                                <div class="btn-wrapper btn-center">
                                    <button type="submit" class="btn sm-btn">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-contact-box margin-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="icon_sec">
                        <div class="d-flex flex-column align-items-center">
                            <div class="contact_icons">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <a href="tel:<?php echo $dataSite['ts_mobile']; ?>">+91 <?php echo $dataSite['ts_mobile']; ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="icon_sec">
                        <div class="d-flex flex-column align-items-center">
                            <div class="contact_icons">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <p class=" text-center">
                                <?php echo $dataSite['ts_address']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="icon_sec">
                        <div class="d-flex flex-column align-items-center">
                            <div class="contact_icons">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <a href="mailto:<?php echo $dataSite['ts_email']; ?>"><?php echo $dataSite['ts_email']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
    <?php include('include/footer.php'); ?>
    <?php include('include/footer_inc.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/loader/jquery.loading.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/toast/jquery.toast.js"></script>
    <script>
        function toast_msg(title, desc, type) {
            $.toast({
                heading: title,
                text: desc,
                icon: type,
                stack: 1,
                hideAfter: 5000,
                position: 'top-right'
            });
        }

        function showload() {
            $.showLoading({
                name: 'circle-turn',
                allowHide: false
            });
        }

        function hideload() {
            $.hideLoading();
        }
        var $form = $(this);
        $("#contact-form").validate({
            rules: {
                name: "required",
                message: "required",
                email: {
                    required: true,
                    email: true,
                },
            },
            submitHandler: function(form) {
                showload();
                $.ajax({
                    url: '<?php echo base_url('Welcome/saveInquiry'); ?>',
                    type: "POST",
                    data: $('#contact-form').serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == true) {
                            hideload();
                            toast_msg('Success', response.message, 'success');
                            $("#contact-form")[0].reset();
                        } else {
                            hideload();
                            toast_msg('Error', response.message, 'error');
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        hideload();
                        toast_msg('Error', errorThrown, 'error');
                    }
                });
                $form.submit();
            }
        });
    </script>
</body>

</html>