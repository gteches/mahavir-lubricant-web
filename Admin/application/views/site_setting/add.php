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
                                <h1 class="h3 d-inline align-middle">Site Setting</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="addForm" method="post" action="#"><div class="mb-3">
                                                        <label class="form-label">Company Name</label>
                                                        <input type="text" name="companyName" id="companyName" value="<?php echo $detail->ts_company_name; ?>" class="form-control" placeholder="Enter Company Name">
                                                    </div><div class="mb-3">
                                                        <label class="form-label"> Logo</label>
                                                        <input type="file" class="form-control" id="logo" name="logo">
                                                        <input id="image1" name="image1" value="<?php echo $detail->ts_logo; ?>" type="hidden">
                                                        <img style="margin-top:5px;width:100px;display:<?php echo $detail->ts_logo != "" ? "block" : "none"; ?>" src="<?php echo $detail->ts_logo != "" ? base_url("uploads/site/" . $detail->ts_logo) : ""; ?>">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Short Description</label>
                                                        <textarea type="text" id="shortDesc" name="shortDesc" class="form-control" placeholder="Enter Short Description"><?php echo $detail->ts_short_desc; ?></textarea>
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" name="email" id="email" value="<?php echo $detail->ts_email; ?>" class="form-control" placeholder="Enter Email">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Phone No</label>
                                                        <input type="text" name="mobileNo" id="mobileNo" value="<?php echo $detail->ts_mobile; ?>" class="form-control" placeholder="Enter Phone No">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Address</label>
                                                        <textarea type="text" name="address" id="address" class="form-control" placeholder="Enter Address"><?php echo $detail->ts_address; ?></textarea>
                                                    </div><div class="mb-3">
                                                        <label class="form-label">FaceBook link</label>
                                                        <input type="text" name="fbLink" id="fbLink" value="<?php echo $detail->ts_facebook_link; ?>" class="form-control" placeholder="Enter FaceBook link">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Youtube Link</label>
                                                        <input type="text" name="youtubeLink" id="youtubeLink" value="<?php echo $detail->ts_youtube_link; ?>" class="form-control" placeholder="Enter Youtube Link">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Instagram Link</label>
                                                        <input type="text" name="instagramLink" id="instagramLink" value="<?php echo $detail->ts_instagram_link; ?>" class="form-control" placeholder="Enter Instagram Link">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Twitter Link</label>
                                                        <input type="text" name="twitterLink" id="twitterLink" value="<?php echo $detail->ts_twitter_link; ?>" class="form-control" placeholder="Enter Instagram Link">
                                                    </div><div class="mb-3">
                                                        <label class="form-label">Map Iframe</label>
                                                        <textarea type="text" name="mapIframe" id="mapIframe" class="form-control" placeholder="Enter Map Iframe"><?php echo $detail->ts_map_iframe; ?></textarea>
                                                    </div><div class="mb-3">
                                                    <label class="form-label">User Name</label>
                                                    <input type="text" name="userName" id="userName" class="form-control" value="<?php echo $detail->ts_user_name; ?>" placeholder="Enter User Name">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Meta Title</label>
                                                    <input type="text" name="metaTitle" id="metaTitle" class="form-control" value="<?php echo $detail->ts_meta_title; ?>" placeholder="Enter meta title">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Meta Keyword</label>
                                                    <input type="text" name="metaKeyword" id="metaKeyword" class="form-control" value="<?php echo $detail->ts_meta_keyword; ?>" placeholder="Enter meta keyword">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Meta Description</label>
                                                    <input type="text" name="metaDescription" id="metaDescription" class="form-control" value="<?php echo $detail->ts_meta_description; ?>" placeholder="Enter meta description">
                                                </div>
                                                <input type="hidden" id="id" name="id" value="<?php echo isset($detail->ts_id) ?  $detail->ts_id : ""; ?>" />
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
            <script>CKEDITOR.addCss(".cke_editable ");

                    CKEDITOR.replace("shortDesc", {
                        toolbar: [{
                                name: "document",
                                items: ["Print", "Source"]
                            },
                            {
                                name: "clipboard",
                                items: ["Undo", "Redo"]
                            },
                            {
                                name: "styles",
                                items: ["Format", "Font", "FontSize"]
                            },
                            {
                                name: "colors",
                                items: ["TextColor", "BGColor"]
                            },
                            {
                                name: "align",
                                items: ["JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyBlock"]
                            },
                            "/",
                            {
                                name: "basicstyles",
                                items: ["Bold", "Italic", "Underline", "Strike", "RemoveFormat", "CopyFormatting"]
                            },
                            {
                                name: "links",
                                items: ["Link", "Unlink"]
                            },
                            {
                                name: "paragraph",
                                items: ["NumberedList", "BulletedList", "-", "Outdent", "Indent", "-", "Blockquote"]
                            },
                            {
                                name: "insert",
                                items: ["Image", "Table"]
                            },
                            {
                                name: "tools",
                                items: ["Maximize"]
                            },
                            {
                                name: "editing",
                                items: ["Scayt"]
                            }
                        ],

                        extraAllowedContent: "h3{clear};h2{line-height};h2 h3{margin-left,margin-top}",

                        extraPlugins: "print,format,font,colorbutton,justify,uploadimage",
                        uploadUrl: "<?php echo base_url("assets/") ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json",

                        filebrowserBrowseUrl: "<?php echo base_url("assets/") ?>ckfinder/ckfinder.html",
                        filebrowserImageBrowseUrl: "<?php echo base_url("assets/") ?>ckfinder/ckfinder.html?type=Images",
                        filebrowserUploadUrl: "<?php echo base_url("assets/") ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
                        filebrowserImageUploadUrl: "<?php echo base_url("assets/") ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",

                        height: 360,

                        removeDialogTabs: "image:advanced;link:advanced",
                        removeButtons: "PasteFromWord"
                    });
                    CKEDITOR.config.allowedContent = true;var $form = $(this);
                $("#addForm").validate({
                    rules: {
                        companyName: "required",
                        logo: "required",
                        logo2: "required",
                        address: "required",
                        address2: "required",
                        fbLink: "required",
                        youtubeLink: "required",
                        instagramLink: "required",
                        twitterLink: "required",
                        mapIframe: "required",
                        brochure: "required",
                        userName: "required",
                        email: {
                            required: true,
                            email: true,
                        },
                        email2: {
                            required: true,
                            email: true,
                        },
                        mobileNo: {
                            required: true,
                            number: true,
                        },
                        mobileNo2: {
                            required: true,
                            number: true,
                        },
                    },
                    submitHandler: function(form) {

                        showload();for (instance in CKEDITOR.instances) {
                                CKEDITOR.instances[instance].updateElement();
                            }var formData = new FormData($("#addForm")[0]);
                        $.ajax({
                            url: "<?php echo base_url("SiteSetting/updateSiteSetting"); ?>",
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
                                    location.reload();
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
                <?php if (isset($detail->ts_logo) && $detail->ts_logo != "") { ?>
                    $("#logo").rules("remove", "required");
                <?php }
                if (isset($detail->ts_footer_logo) && $detail->ts_footer_logo != "") { ?>
                    $("#logo2").rules("remove", "required");
                <?php }
                if (isset($detail->ts_brochure) && $detail->ts_brochure != "") { ?>
                    $("#brochure").rules("remove", "required");
                <?php } ?>$("#address2").rules("remove", "required");$("#brochure").rules("remove", "required");$("#email2").rules("remove", "required");
                    $("#mobileNo2").rules("remove", "email");$("#mobileNo2").rules("remove", "required");
                    $("#mobileNo2").rules("remove", "number");$("#logo2").rules("remove", "required"); </script>
        </body>

        </html>