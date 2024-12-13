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
                                <h1 class="h3 d-inline align-middle">Add New Category</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="addForm" method="post" action="#"><div class="mb-3">
                                                        <label class="form-label">Category Name</label>
                                                        <input type="text" id="title" name="name" class="form-control" value="<?php echo isset($detail->tc_id) ?  $detail->tc_title : ""; ?>" placeholder="Enter category name">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Category Banner Image</label>
                                                        <input type="file" class="form-control" id="bannerImage" name="bannerImage">
                                                        <input id="bannerImage1" name="bannerImage1" value="<?php echo isset($detail->tc_id) ?  $detail->tc_banner_image : ""; ?>" type="hidden">
                                                        <img style="margin-top:5px;width:300px;display:<?php echo isset($detail) ? "block" : "none"; ?>" src="<?php echo isset($detail->tc_id) ? base_url("uploads/category/" . $detail->tc_banner_image) : ""; ?>">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Display Order</label>
                                                        <input type="text" name="disOrder" class="form-control" value="<?php echo isset($detail->tc_id) ?  $detail->tc_display_order : ""; ?>" placeholder="Enter display order">
                                                    </div><div class="mb-3">
                                                    <label class="form-label">Meta Title</label>
                                                    <input type="text" name="metaTitle" class="form-control" value="<?php echo isset($detail->tc_id) ?  $detail->tc_meta_title : ""; ?>" placeholder="Enter meta title">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Meta Keyword</label>
                                                    <input type="text" name="metaKeyword" class="form-control" value="<?php echo isset($detail->tc_id) ?  $detail->tc_meta_keyword : ""; ?>" placeholder="Enter meta keyword">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Meta Description</label>
                                                    <input type="text" name="metaDescription" class="form-control" value="<?php echo isset($detail->tc_id) ?  $detail->tc_meta_description : ""; ?>" placeholder="Enter meta description">
                                                </div>
                                                <input type="hidden" id="id" name="id" value="<?php echo isset($detail->tc_id) ?  $detail->tc_id : ""; ?>" />
                                                <div class="float-end">
                                                    <a href="<?php echo base_url("category-list"); ?>" class="btn btn-warning">Cancel</a>
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
                        name: "required",
                        image: "required",
                        bannerImage: "required",
                        disOrder: {
                            required: true,
                            number: true,
                        },

                    },
                    submitHandler: function(form) {

                        showload();
                        var formData = new FormData($("#addForm")[0]);
                        $.ajax({
                            url: "<?php echo base_url("Category/save"); ?>",
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

                                    window.location.href = "<?php echo base_url("category-list"); ?>";

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
        <?php if (isset($detail->tc_id)) { ?>
            $("#image").rules("remove", "required");
                    $("#bannerImage").rules("remove", "required");
        <?php }?>$("#image").rules("remove", "required");</script>
        </body>

        </html>