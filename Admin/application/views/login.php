<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <title>Sign In | Admin</title>

    <link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/loader/loading.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/toast/jquery.toast.css">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <h1 class="h2">Sign In</h1>
                                    </div>
                                    <form id="addForm" method="post" action="#">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control form-control-lg" type="text" name="userName" placeholder="Enter your username" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url('assets/'); ?>js/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/loader/jquery.loading.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/toast/jquery.toast.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        function toast_msg(title, desc, type) {
            $.toast({
                heading: title,
                text: desc,
                icon: type,
                stack: 1,
                hideAfter: 5000,
                position: 'top-right'
            })
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
        $("#addForm").validate({
            rules: {
                userName: "required",
                password: "required",


            },
            messages: {
                userName: "Please enter username",
                password: "Please enter password",
            },
            submitHandler: function(form) {

                showload();
                $.ajax({
                    url: '<?php echo base_url('Login/authentication'); ?>',
                    type: "POST",
                    data: $('#addForm').serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == true) {
                            hideload();
                            window.location.href = "<?php echo base_url("dashboard"); ?>";
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