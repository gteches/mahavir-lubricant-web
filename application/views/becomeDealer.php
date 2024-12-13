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
            <h1 class="page-title">Become A Dealer</h1>
            <ul class="page-list">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="#">Become A Dealer</a></li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact area -->

    <div class="margin-100">
        <div class="container dealer-form">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading text-center section-inner-heading  margin-bottom-40">
                        <h2>Required Documents Uploaded</h2>
                    </div>
                    <form method="post" id="dealer-form" action="#">
                        <div class="row mb-32 Dealer_sec">
                            <div class="col-sm-12">
                                <div class="text-center mb-2">
                                    <h5 class="contact_heading">Desired Area For Dealership</h5>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-12">
                                <span class="State">
                                    <select class="form-control" name="state" id="" onchange="getDistrict(this.value,'district')">
                                        <option value="">Select State</option>
                                        <?php foreach ($stateList as $sl) { ?>
                                            <option value="<?php echo $sl['s_id']; ?>"><?php echo $sl['s_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </span>
                            </div>

                            <div class="col-sm-12 col-md-4 col-12">
                                <span class="District">
                                    <select class="form-control" name="district" id="district">
                                        <option value="">Select District</option>
                                    </select>
                                </span>
                            </div>

                            <div class="col-sm-12 col-md-4 col-12">
                                <span class="Taluka">
                                    <input type="text" class="textbox" name="taluka" placeholder="Taluka *" />
                                </span>
                            </div>



                            <div class="col-sm-12">
                                <div class="text-center mb-2 mt-3">
                                    <h5 class="contact_heading">Firm Detail</h5>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Firm Name :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <input type="text" class="textbox" name="firm_name" placeholder="Firm Name" />
                            </div>

                            <div class="col-md-3">
                                <label>Firm Address :</label>
                            </div>

                            <div class="col-md-9">
                                <textarea rows="4" cols="50" placeholder="Address" name="firm_address"></textarea>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-12 ">
                                        <span class="State">
                                            <select class="form-control" name="firm_state" onchange="getDistrict(this.value,'firm_district')">
                                                <option value="">Select State</option>

                                                <?php foreach ($stateList as $sl) { ?>
                                                    <option value="<?php echo $sl['s_id']; ?>"><?php echo $sl['s_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="col-sm-12 col-md-4 col-12">
                                        <span class="District">
                                            <select class="form-control" name="firm_district" id="firm_district">
                                                <option value="">Select District</option>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="col-sm-12 col-md-4 col-12 ">
                                        <span class="Taluka">
                                            <input type="text" class="textbox" name="firm_taluka" placeholder="Taluka *" />
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mb-24">
                                <label>Type Of Firm :</label>
                            </div>

                            <div class="col-md-9 radio-input">
                                <span class="radiobox">
                                    <input type="radio" name="type_firm" value="proprietor" />

                                    <label for="proprietor">proprietor</label>
                                </span>

                                <span class="radiobox">
                                    <input type="radio" name="type_firm" value="partnership" />

                                    <label for="partnership">partnership</label>
                                </span>

                                <span class="radiobox">
                                    <input type="radio" name="type_firm" value="llp" />

                                    <label for="llp">LLP</label>
                                </span>

                                <span class="radiobox">
                                    <input type="radio" name="type_firm" value="pvt ltd" />

                                    <label for="pvt">Pvt Ltd.</label>
                                </span>
                            </div>

                            <div class="col-md-3">
                                <label>GST Registration No :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <input type="text" class="textbox" name="firm_gst" placeholder="GST No" />
                            </div>

                            <div class="col-md-3">
                                <label>Mobile No :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="tel" class="textbox" name="firm_mobile1" placeholder="Mobile No" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="tel" class="textbox" name="firm_mobile2" placeholder="Mobile No" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Phone No :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="tel" class="textbox" name="firm_phone1" placeholder="Phone No" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="tel" class="textbox" name="firm_phone2" placeholder="Phone No" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Email Address :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" name="firm_email1" placeholder="Email" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" name="firm_email2" placeholder="Email" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Area :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="sublb">Shop Area :</label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" class="textbox" name="firm_shop_area" placeholder="Area in sqft. " />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="sublb">Godown / Storage Area :</label>
                                    </div>

                                    <div class="col-md-9">
                                        <input type="text" class="textbox" name="firm_storage_area" placeholder="Area in sqft. " />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <label>Transport Facilities :</label>
                            </div>

                            <div class="col-md-9 mb-24 radio-input">
                                <span class="radiobox">
                                    <input type="radio" name="transport" value="Yes" />
                                    <label for="Yes">Yes</label>
                                </span>

                                <span class="radiobox">
                                    <input type="radio" name="transport" value="No" />

                                    <label for="no">No</label>
                                </span>
                            </div>

                            <div class="col-md-3">
                                <label>If yes, Mention Vehicles Details:</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <input type="text" class="textbox" name="firm_vehicle" placeholder="Vehicles Details" />
                            </div>

                            <div class="col-md-3">
                                <label>Investment capacity :</label>
                            </div>

                            <div class="col-md-9 capacity-box">
                                <input type="checkbox" name="below5lakhs" value="Bike" />

                                <label for="below5lakhs"> Below 5 Lakhs</label><br />

                                <input type="checkbox" name="5to10lakhs" value="Car" />

                                <label for="5to10lakhs"> 5 to 10 Lakhs</label><br />

                                <input type="checkbox" name="ab10lakhs" value="Boat" />

                                <label for="ab10lakhs"> Above 10 Lakhs</label><br /><br />
                            </div>


                            <div class="col-sm-12">
                                <div class="text-center mb-2 mt-3">
                                    <h5 class="contact_heading">Personal Information</h5>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Name :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="personal_name" placeholder="Firm Name" />
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" name="personal_middle_name" placeholder="Middle Name" />
                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" name="personal_last_name" placeholder="Last Name" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Address :</label>
                            </div>

                            <div class="col-md-9">
                                <textarea rows="4" cols="50" name="personal_address" placeholder="Address"></textarea>
                            </div>

                            <div class="col-md-3"></div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-8 select_input">
                                        <span class="State">
                                            <select class="form-control" name="personal_state" onchange="getDistrict(this.value,'district3')">
                                                <option value="">Select State</option>

                                                <?php foreach ($stateList as $sl) { ?>
                                                    <option value="<?php echo $sl['s_id']; ?>"><?php echo $sl['s_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="col-md-6 col-12 select_input">
                                        <span class="District">
                                            <select class="form-control" name="personal_district" id="district3">
                                                <option value="">Select District</option>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <span class="Taluka">
                                            <input type="text" class="textbox" name="personal_taluka" id="taluka" placeholder="Taluka *" />
                                        </span>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <span class="pincode">
                                            <input id="zip" name="personal_zip" type="text" pattern="[0-9]*" placeholder="Pincode" />
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Education :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <input type="text" name="personal_education" placeholder="Education" />
                            </div>

                            <div class="col-md-3">
                                <label>Age :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <input type="text" name="personal_age" placeholder="Years" />
                            </div>

                            <div class="col-md-3">
                                <label>Mobile No :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="textbox" name="personal_mobile1" placeholder="Mobile No" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="textbox" name="personal_mobile2" placeholder="Mobile No" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Phone No :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="textbox" name="personal_phone1" placeholder="Phone No" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="textbox" name="personal_phone2" placeholder="Phone No" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Email Address :</label>
                            </div>

                            <div class="col-md-9 mb-24">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" name="personal_email1" placeholder="Email" />
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" name="personal_email2" placeholder="Email" />
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12 mt-5">
                                <div class="btn-wrapper btn-center">
                                    <button type="submit" class="btn btn-element btn-lg btn-red">
                                        Submit
                                    </button>
                                </div>
                            </div>
                    </form>
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

        function getDistrict(state_id, dist) {
            showload();
            $.ajax({
                url: '<?php echo base_url('Welcome/getDistrict'); ?>',
                type: "POST",
                data: {
                    id: state_id
                },
                dataType: 'json',
                success: function(response) {
                    hideload();
                    var datas = response;
                    var list = datas.list;
                    $("#" + dist).html(list)
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    hideload();
                    toast_msg('Error', errorThrown, 'error');
                }
            });
        }
        var $form = $(this);
        $("#dealer-form").validate({
            rules: {
                robots: "required",
                description: "required",
                viewport: "required",
                state: "required",
                district: "required",
                taluka: "required",
                firm_name: "required",
                firm_address: "required",
                firm_state: "required",
                firm_district: "required",
                firm_taluka: "required",
                type_firm: "required",
                firm_gst: {
                    required: true,
                    maxlength: 15,
                },
                firm_mobile1: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                firm_mobile2: {
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                firm_phone1: {
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                firm_phone2: {
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                firm_email1: {
                    required: true,
                    email: true,
                },
                firm_email2: {
                    email: true,
                },
                firm_shop_area: "required",
                firm_storage_area: "required",
                personal_name: "required",
                personal_middle_name: "required",
                personal_last_name: "required",
                personal_address: "required",
                personal_state: "required",
                personal_district: "required",
                personal_taluka: "required",
                personal_zip: {
                    required: true,
                    digits: true,
                    minlength: 5,
                    maxlength: 6,
                },
                personal_education: "required",
                personal_age: {
                    required: true,
                    digits: true,
                    min: 18,
                    max: 100,
                },
                personal_mobile1: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                personal_mobile2: {
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                personal_phone1: {
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                personal_phone2: {
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                personal_email1: {
                    required: true,
                    email: true,
                },
                personal_email2: {
                    email: true,
                },
            },
            messages: {
                robots: "Please enter a value for robots",
                description: "Please enter a description",
                viewport: "Please enter a viewport value",
                state: "Please enter a state",
                district: "Please enter a district",
                taluka: "Please enter a taluka",
                firm_name: "Please enter the firm's name",
                firm_address: "Please enter the firm's address",
                firm_state: "Please enter the firm's state",
                firm_district: "Please enter the firm's district",
                firm_taluka: "Please enter the firm's taluka",
                type_firm: "Please select the type of firm",
                firm_gst: {
                    required: "Please enter the GST number",
                    maxlength: "GST number cannot exceed 15 characters",
                },
                firm_mobile1: {
                    required: "Please enter the primary mobile number",
                    digits: "Please enter only digits",
                    minlength: "Mobile number must be 10 digits",
                    maxlength: "Mobile number must be 10 digits",
                },
                firm_mobile2: {
                    digits: "Please enter only digits",
                    minlength: "Mobile number must be 10 digits",
                    maxlength: "Mobile number must be 10 digits",
                },
                firm_email1: {
                    required: "Please enter the primary email",
                    email: "Please enter a valid email address",
                },
                personal_name: "Please enter the personal name",
                personal_address: "Please enter the personal address",
                personal_zip: {
                    required: "Please enter a zip code",
                    digits: "Please enter only digits",
                    minlength: "Zip code must be at least 5 digits",
                    maxlength: "Zip code cannot exceed 6 digits",
                },
                personal_age: {
                    required: "Please enter the age",
                    digits: "Please enter only digits",
                    min: "Age must be at least 18",
                    max: "Age cannot exceed 100",
                },
                personal_mobile1: {
                    required: "Please enter the primary mobile number",
                    digits: "Please enter only digits",
                    minlength: "Mobile number must be 10 digits",
                    maxlength: "Mobile number must be 10 digits",
                },
            },
            submitHandler: function(form) {
                showload();
                $.ajax({
                    url: '<?php echo base_url('Welcome/saveDealer'); ?>',
                    type: "POST",
                    data: $('#dealer-form').serialize(),
                    dataType: 'json',
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