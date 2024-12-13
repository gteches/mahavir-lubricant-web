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
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <!-- breadcrumb area -->
    <div class="breadcrumb-area breadcrumb-style-6">
        <div class="breadcrumb-inner">
            <h1 class="page-title">Become a Vendor</h1>
            <ul class="page-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="#">Become A Vendor</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact area -->
    <div class="margin-100">
        <div class="contact-area margin-bottom-40">
            <div class="container">
                <div class="text-center">
                    <div class="heading text-center section-inner-heading  margin-bottom-40">
                        <h2>Required Documents Uploaded</h2>
                    </div>
                    <!-- <h5 class="contact_heading">Required Documents Uploaded</h5> -->
                    <ul class="Contact_ul text-left mt-4">
                        <li>
                            <p>Soft Copy Of Business Card</p>
                        </li>
                        <li>
                            <p>Soft Copy Of Pan</p>
                        </li>
                        <li>
                            <p>
                                Soft Copy Of Gst Regn. Certificate(Mandatory Where GSTIN
                                Mentioned In The Form)
                            </p>
                        </li>
                        <li>
                            <p>Soft Copy Of Cancelled Cheque</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form method="post" id="dealer-form" action="#">
            <div class="container ">
                <div class="row Dealer_sec">
                    <div class="col-sm-6 col-12">
                        <label>Category</label>

                        <select name="category" id="category" aria-required="true" aria-invalid="false">
                            <option value="goods_supplier">Goods Supplier</option>

                            <option value="service_provider">Service Provider</option>

                            <option value="asset_supplier">Asset Supplier</option>

                            <option value="job_worker">Job Worker</option>

                            <option value="transporter">Transporter</option>
                        </select>
                    </div>

                    <div class="col-sm-6 col-12"></div>

                    <div class="col-sm-6 col-12">
                        <label>Vendor Name 1</label>

                        <input type="text" class="textbox" name="vendor_name1" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Vendor Name 2</label>

                        <input type="text" class="textbox" name="vendor_name2" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Address 1</label>

                        <input type="text" class="textbox" name="address1" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Address 2</label>

                        <input type="text" class="textbox" name="address2" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Address 3</label>

                        <input type="text" class="textbox" name="address3" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>District </label>

                        <input type="text" class="textbox" name="district" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>City</label>

                        <input type="text" class="textbox" name="city" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Pin Code</label>

                        <input type="text" class="textbox" name="pincode" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Country </label>
                        <input type="text" class="textbox" name="country" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>State </label>
                        <input type="text" class="textbox" name="state" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Contact Person Name </label>
                        <input type="text" class="textbox" name="person_name" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>E-mail </label>

                        <input type="email" class="textbox" name="email" placeholder="" />
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>Landline No.</label>

                        <input type="text" class="textbox" name="landline_no" placeholder="" />
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>Extension</label>

                        <input type="text" class="textbox" name="extension" placeholder="" />
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>Mobile No.</label>

                        <input type="text" class="textbox" name="mobile" placeholder="" />
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>PAN</label>

                        <input type="text" class="textbox" name="pan_number" placeholder="" />
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>GSTIN</label>

                        <input type="text" class="textbox" name="gst" placeholder="" />
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>MSME Registration</label>

                        <select name="msme_registration">
                            <option value="yes">Yes</option>

                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Account Name as per Bank</label>

                        <input type="text" class="textbox" name="account_name" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Bank Name</label>

                        <input type="text" class="textbox" name="bank_name" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Account No.</label>

                        <input type="text" class="textbox" name="account_no" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>IFSC </label>

                        <input type="text" class="textbox" name="ifsc_code" placeholder="" />
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>Payment Term</label>

                        <select name="payment_term">
                            <option value="30 days">30 Days after Delivery</option>

                            <option value="45 days">45 Days after Delivery</option>

                            <option value="60 days">60 Days after Delivery</option>
                        </select>
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>IncoTerms</label>

                        <select name="inco_term">
                            <option value="exw">EXW (EXW-Ex Works )</option>

                            <option value="fob">FOB (FOB-Free on board)</option>

                            <option value="for">FOR (FOR-Free On Road)</option>

                            <option value="cif">
                                CIF (CIF-Costs, insurance &amp; freight)
                            </option>
                        </select>
                    </div>

                    <div class="col-sm-4 col-12">
                        <label>Location</label>

                        <input type="text" class="textbox" name="location" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Please Enter Reference Number</label>

                        <input type="text" class="textbox" name="ref_name" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12">
                        <label>Buyer Mail Address</label>

                        <input type="text" class="textbox" name="buyer_mail" placeholder="" />
                    </div>

                    <div class="col-sm-6 col-12 resume">
                        <label>Business Card</label>

                        <input type="file" name="business_card" id="business_card" />
                    </div>

                    <div class="col-sm-6 col-12 resume">
                        <label>PAN </label>

                        <input type="file" name="pan" id="pan" />
                    </div>

                    <div class="col-sm-6 col-12 resume">
                        <label>GST Registration</label>

                        <input type="file" name="gst_reg" id="gst_reg" />
                    </div>

                    <div class="col-sm-6 col-12 resume">
                        <label>Cancelled Cheque</label>

                        <input type="file" name="cancel_cheque" id="cancel_cheque" />
                    </div>

                    <div class="col-sm-12 mt-5">
                        <div class="btn-wrapper btn-center">
                            <button type="submit" class="btn btn-element btn-lg btn-red">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

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
        $("#dealer-form").validate({
            rules: {
                category: "required",
                vendor_name1: "required",
                address1: "required",
                district: "required",
                city: "required",
                pincode: {
                    required: true,
                    digits: true,
                    minlength: 6,
                    maxlength: 6,
                },
                country: "required",
                state: "required",
                person_name: "required",
                email: {
                    required: true,
                    email: true,
                },
                landline_no: {
                    digits: true,
                    minlength: 10,
                    maxlength: 12,
                },
                extension: {
                    digits: true,
                    maxlength: 5,
                },
                mobile: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                pan_number: {
                    required: true,
                    maxlength: 10,
                },
                gst: {
                    required: true,
                    maxlength: 15,
                },
                msme_registration: "required",
                account_name: "required",
                bank_name: "required",
                account_no: {
                    required: true,
                    digits: true,
                },
                ifsc_code: {
                    required: true,
                    minlength: 11,
                    maxlength: 11,
                },
                payment_term: "required",
                inco_term: "required",
                location: "required",
                ref_name: "required",
                buyer_mail: {
                    required: true,
                    email: true,
                },
                business_card: "required",
                pan: "required",
                gst_reg: "required",
                cancel_cheque: "required",
            },
            messages: {
                category: "Please select a category",
                vendor_name1: "Please enter the primary vendor name",
                address1: "Please enter address line 1",
                district: "Please enter the district",
                city: "Please enter the city",
                pincode: {
                    required: "Please enter the pincode",
                    digits: "Please enter only digits",
                    minlength: "Pincode must be 6 digits",
                    maxlength: "Pincode must be 6 digits",
                },
                country: "Please select the country",
                state: "Please select the state",
                person_name: "Please enter the contact person's name",
                email: {
                    required: "Please enter the email address",
                    email: "Please enter a valid email address",
                },
                mobile: {
                    required: "Please enter the mobile number",
                    digits: "Please enter only digits",
                    minlength: "Mobile number must be 10 digits",
                    maxlength: "Mobile number must be 10 digits",
                },
                pan_number: {
                    required: "Please enter the PAN number",
                    maxlength: "PAN number cannot exceed 10 characters",
                },
                gst: {
                    required: "Please enter the GST number",
                    maxlength: "GST number cannot exceed 15 characters",
                },
                ifsc_code: {
                    required: "Please enter the IFSC code",
                    minlength: "IFSC code must be 11 characters",
                    maxlength: "IFSC code must be 11 characters",
                },
                buyer_mail: {
                    required: "Please enter the buyer's email",
                    email: "Please enter a valid email address",
                },
                business_card: "Please upload the business card",
                pan: "Please upload the PAN document",
                gst_reg: "Please upload the GST registration",
                cancel_cheque: "Please upload the canceled cheque",
            },
            submitHandler: function(form) {
                showload();
                var formData = new FormData($("#dealer-form")[0]);
                $.ajax({
                    url: '<?php echo base_url('Welcome/saveVendor'); ?>',
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.status == true) {
                            hideload();
                            toast_msg('Success', response.message, 'success');
                            $("#dealer-form")[0].reset();
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