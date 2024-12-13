<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include/header'); ?>

<body>
    <div class="wrapper">
        <?php $this->load->view('include/sidebar'); ?>

        <div class="main">
            <?php $this->load->view('include/navbar'); ?>
            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Change Password</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <form id="addForm" method="post" action="#">

                                        <div class="mb-3">
                                            <label class="form-label">Old Password</label>
                                            <input type="password" name="oldPassword" id="oldPassword" class="form-control" placeholder="Enter Old Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input type="password" name="newPassword" id="newPassword" class="form-control" placeholder="Enter New Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Enter Confirm Password">
                                        </div>
                                        <div class="float-end"><button type="submit" class="btn btn-success">Submit</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <?php $this->load->view('include/footer'); ?>
        </div>
    </div>

    <?php $this->load->view('include/footer_inc'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        var $form = $(this);
        $("#addForm").validate({
            rules: {
                oldPassword: "required",
                newPassword: "required",
                confirmPassword: {
                    equalTo: '#newPassword',
                    required: true
                }

            },

            submitHandler: function(form) {

                showload();

                $.ajax({
                    url: '<?php echo base_url('Dashboard/updateAdmnPassword'); ?>',
                    type: "POST",
                    data: $('#addForm').serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == true) {
                            hideload();
                            toast_msg('Success', response.message, 'success');
                            window.location.href = '<?php echo base_url('login'); ?>';
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