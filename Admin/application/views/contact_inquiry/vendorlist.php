<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("include/header"); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<style>
    #example_wrapper {
        overflow-x: auto;
    }
</style>

<body>
    <div class="wrapper">
        <?php $this->load->view("include/sidebar"); ?>
        <div class="main">
            <?php $this->load->view("include/navbar"); ?>
            <main class="content">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Manage Vendor Inquiry</h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Vendor Name 1</th>
                                                <th>Vendor Name 2</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>Address 3</th>
                                                <th>District</th>
                                                <th>City</th>
                                                <th>Pincode</th>
                                                <th>Country</th>
                                                <th>State</th>
                                                <th>Person Name</th>
                                                <th>Email</th>
                                                <th>Landline No</th>
                                                <th>Extension</th>
                                                <th>Mobile</th>
                                                <th>PAN Number</th>
                                                <th>GST</th>
                                                <th>MSME Registration</th>
                                                <th>Account Name</th>
                                                <th>Bank Name</th>
                                                <th>Account No</th>
                                                <th>IFSC Code</th>
                                                <th>Payment Term</th>
                                                <th>Inco Term</th>
                                                <th>Location</th>
                                                <th>Ref Name</th>
                                                <th>Buyer Mail</th>
                                                <th>Business Card</th>
                                                <th>PAN</th>
                                                <th>GST Reg</th>
                                                <th>Cancel Cheque</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['category']; ?></td>
                                                    <td><?php echo $row['vendor_name1']; ?></td>
                                                    <td><?php echo $row['vendor_name2']; ?></td>
                                                    <td><?php echo $row['address1']; ?></td>
                                                    <td><?php echo $row['address2']; ?></td>
                                                    <td><?php echo $row['address3']; ?></td>
                                                    <td><?php echo $row['district']; ?></td>
                                                    <td><?php echo $row['city']; ?></td>
                                                    <td><?php echo $row['pincode']; ?></td>
                                                    <td><?php echo $row['country']; ?></td>
                                                    <td><?php echo $row['state']; ?></td>
                                                    <td><?php echo $row['person_name']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['landline_no']; ?></td>
                                                    <td><?php echo $row['extension']; ?></td>
                                                    <td><?php echo $row['mobile']; ?></td>
                                                    <td><?php echo $row['pan_number']; ?></td>
                                                    <td><?php echo $row['gst']; ?></td>
                                                    <td><?php echo $row['msme_registration']; ?></td>
                                                    <td><?php echo $row['account_name']; ?></td>
                                                    <td><?php echo $row['bank_name']; ?></td>
                                                    <td><?php echo $row['account_no']; ?></td>
                                                    <td><?php echo $row['ifsc_code']; ?></td>
                                                    <td><?php echo $row['payment_term']; ?></td>
                                                    <td><?php echo $row['inco_term']; ?></td>
                                                    <td><?php echo $row['location']; ?></td>
                                                    <td><?php echo $row['ref_name']; ?></td>
                                                    <td><?php echo $row['buyer_mail']; ?></td>
                                                    <td><?php if ($row['business_card'] != '') { ?><a target="_blank" href="<?php echo base_url('../uploads/vendor/' . $row['business_card']); ?>">View</a> <?php } ?></td>
                                                    <td><?php if ($row['pan'] != '') { ?><a target="_blank" href="<?php echo base_url('../uploads/vendor/' . $row['pan']); ?>">View</a> <?php } ?></td>
                                                    <td><?php if ($row['gst_reg'] != '') { ?><a target="_blank" href="<?php echo base_url('../uploads/vendor/' . $row['gst_reg']); ?>">View</a> <?php } ?></td>
                                                    <td><?php if ($row['cancel_cheque'] != '') { ?><a target="_blank" href="<?php echo base_url('../uploads/vendor/' . $row['cancel_cheque']); ?>">View</a> <?php } ?></td>
                                                    <td><?php echo $row['created_date']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>

                                    </table>
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
        });

        function deleteInquiryData(id, tableName) {
            Swal.fire({
                title: "Are you sure to delete data?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Delete it",
                denyButtonText: "Cancel",
            }).then((result) => {
                if (result.value) {
                    showload();
                    $.ajax({
                        url: "<?php echo base_url("ContactInquiry/deleteInquiryData"); ?>",
                        type: "POST",
                        data: {
                            id: id,
                            tableName: tableName
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.status == true) {
                                hideload();
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
                }
            })
        }
    </script>
</body>

</html>