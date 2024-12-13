<!DOCTYPE html>
        <html lang="en">
        <?php $this->load->view("include/header"); ?>
        <body>
            <div class="wrapper">
                <?php $this->load->view("include/sidebar"); ?>
                <div class="main">
                    <?php $this->load->view("include/navbar"); ?>
                    <main class="content">
                        <div class="container-fluid p-0">
                            <div class="mb-3">
                                <h1 class="h3 d-inline align-middle">Add New Slider</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="addForm" method="post" action="#"><div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="title" id="title" class="form-control" value="<?php echo isset($detail->ths_id) ?  $detail->ths_title : ""; ?>" placeholder="Enter title">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Sub Title</label>
                                                        <input type="text" name="subTitle" id="subTitle" class="form-control" value="<?php echo isset($detail->ths_id) ?  $detail->ths_sub_title : ""; ?>" placeholder="Enter sub title">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Image</label>
                                                        <input type="file" class="form-control" id="image" name="image">

                                                        <input id="image1" name="image1" value="<?php echo isset($detail->ths_id) ?  $detail->ths_image : ""; ?>" type="hidden">
                                                        <img style="margin-top:5px;width:300px;display:<?php echo isset($detail->ths_id) ? "block" : "none"; ?>" src="<?php echo isset($detail->ths_id) ? base_url("uploads/slider/" . $detail->ths_image) : ""; ?>">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Display Order</label>
                                                        <input type="text" name="disOrder" id="disOrder" class="form-control" value="<?php echo isset($detail->ths_id) ?  $detail->ths_display_order : ""; ?>" placeholder="Enter display order">
                                                    </div><input type="hidden" id="id" name="id" value="<?php echo isset($detail->ths_id) ?  $detail->ths_id : ""; ?>" />
                                                <div class="float-end">
                                                    <a href="<?php echo base_url("home-slider-list"); ?>" class="btn btn-warning">Cancel</a>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </main>

                    <?php $this->load->view("include/footer"); ?>
                </div>
            </div>

            <?php $this->load->view("include/footer_inc"); ?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
            <script>
                var $form = $(this);
                $("#addForm").validate({
                    rules: {
                        title: "required",
                        subTitle: "required",
                        link: "required",
                        image: "required",
                        disOrder: {
                            required: true,
                            number: true,
                        }
                    },

                    submitHandler: function(form) {

                        showload();
                        var formData = new FormData($("#addForm")[0]);
                        $.ajax({
                            url: "<?php echo base_url("HomeSlider/saveSlider"); ?>",
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            cache: false,
                            dataType: "json",
                            success: function(response) {
                                if (response.status == true) {
                                    hideload();
                                    toast_msg("Success", response.message, "success");

                                    window.location.href = "<?php echo base_url("home-slider-list"); ?>";

                                } else {
                                    hideload();
                                    toast_msg("Error", response.message, "error");
                                }
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) {
                                hideload();
                                toast_msg("Error", errorThrown, "error");
                            }
                        });
                        $form.submit();
                    }
                });
                <?php if (isset($detail->ths_id)) { ?>
                    $("#image").rules("remove", "required");
                <?php } ?>$("#link").rules("remove", "required");</script>
        </body>

        </html>