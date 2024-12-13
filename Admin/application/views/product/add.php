<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("include/header"); ?>
<script src="<?php echo base_url("assets/") ?>ckeditor/ckeditor.js"></script>

<body>
    <div class="wrapper">
        <?php $this->load->view("include/sidebar"); ?>
        <div class="main">
            <?php $this->load->view("include/navbar"); ?>
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Add New Product</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <form id="addForm" method="post" action="#">
                                        <?php if ($this->db->table_exists("tbl_category")) { ?>
                                            <div class="mb-3">
                                                <label class="form-label">Category</label>
                                                <?php if ($this->db->table_exists("tbl_sub_category")) { ?>
                                                    <select class="form-select" name="catId" id="catId" onchange="getSubCategory(this.value)">
                                                    <?php } else { ?>
                                                        <select class="form-select" name="catId" id="catId">
                                                        <?php } ?>
                                                        <option value="">Select Category</option>
                                                        <?php foreach ($catList as $cl) {
                                                            $selCate = "";
                                                            if (isset($detail->tp_cat_id) && $cl["tc_id"] == $detail->tp_cat_id) {
                                                                $selCate = "selected='selected'";
                                                            } ?>
                                                            <option <?php echo $selCate; ?> value="<?php echo $cl["tc_id"]; ?>"><?php echo $cl["tc_title"]; ?></option>
                                                        <?php } ?>
                                                        </select>
                                            </div>
                                        <?php }
                                        if ($this->db->table_exists("tbl_sub_category")) { ?>
                                            <div class="mb-3">
                                                <label class="form-label">Sub Category</label>
                                                <select class="form-select" name="subCatId" id="subCatId">
                                                    <option value="">Select Sub Category</option>
                                                    <?php foreach ($subCatList as $cl) {
                                                        $selSubCate = "";
                                                        if (isset($detail->tp_sub_cat_id) && $cl["tsc_id"] == $detail->tp_sub_cat_id) {
                                                            $selSubCate = "selected='selected'";
                                                        } ?>
                                                        <option <?php echo $selSubCate; ?> value="<?php echo $cl["tsc_id"]; ?>"><?php echo $cl["tsc_title"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        <?php } ?>
                                        <div class="mb-3">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" id="name" name="name" value="<?php echo isset($detail->tp_id) ?  $detail->tp_title : ""; ?>" class="form-control" placeholder="Enter product name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Product Ltr</label>
                                            <input type="text" id="ltr" name="ltr" value="<?php echo isset($detail->tp_id) ?  $detail->tp_liter : ""; ?>" class="form-control" placeholder="Enter product liter">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            <input id="image1" name="image1" value="<?php echo isset($detail->tp_id) ?  $detail->tp_image : ""; ?>" type="hidden">
                                            <img style="margin-top:5px;width:300px;display:<?php echo isset($detail) ? "block" : "none"; ?>" src="<?php echo isset($detail->tp_id) ? base_url("uploads/product/" . $detail->tp_image) : ""; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Display Order</label>
                                            <input type="text" id="disOrder" name="disOrder" value="<?php echo isset($detail->tp_id) ?  $detail->tp_display_order : ""; ?>" class="form-control" placeholder="Enter display order">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input type="text" name="metaTitle" class="form-control" value="<?php echo isset($detail->tp_id) ?  $detail->tp_meta_title : ""; ?>" placeholder="Enter meta title">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Meta Keyword</label>
                                            <input type="text" name="metaKeyword" class="form-control" value="<?php echo isset($detail->tp_id) ?  $detail->tp_meta_keyword : ""; ?>" placeholder="Enter meta keyword">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Meta Description</label>
                                            <input type="text" name="metaDescription" class="form-control" value="<?php echo isset($detail->tp_id) ?  $detail->tp_meta_description : ""; ?>" placeholder="Enter meta description">
                                        </div>
                                        <input type="hidden" id="id" name="id" value="<?php echo isset($detail->tp_id) ?  $detail->tp_id : ""; ?>" />
                                        <div class="float-end"><button type="submit" class="btn btn-success">Submit</button></div>
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
                catId: "required",
                subCatId: "required",
                name: "required",
                image: "required",
                disOrder: {
                    required: true,
                    number: true,
                },

            },

            submitHandler: function(form) {

                showload();
                var formData = new FormData($("#addForm")[0]);
                $.ajax({
                    url: "<?php echo base_url("Product/save"); ?>",
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
                            /*$("#addForm")[0].reset()*/
                            window.location.href = "<?php echo base_url("product-list"); ?>";

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
        <?php if (isset($detail->tp_id)) { ?>
            $("#image").rules("remove", "required");
        <?php }
        if (!$this->db->table_exists("tbl_category")) { ?>
            $("#catId").rules("remove", "required");
        <?php }
        if (!$this->db->table_exists("tbl_sub_category")) { ?>
            $("#subCatId").rules("remove", "required");
        <?php } ?>

        function getSubCategory(id) {
            showload();
            $.ajax({
                url: "<?php echo base_url("Product/getSubCategory"); ?>",
                type: "POST",
                data: {
                    id: id
                },
                dataType: "json",
                success: function(response) {
                    hideload();
                    if (response.status == true) {
                        $("#subCatId").html(response.data);
                    } else {
                        toast_msg("Error", response.message, "error");
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    hideload();
                    toast_msg("Error", errorThrown, "error");
                }
            });
        }
    </script>
</body>

</html>