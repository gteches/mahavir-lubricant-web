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
                        <h1 class="h3 d-inline align-middle">Manage Dealer Inquiry</h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>State</th>
                                                <th>District</th>
                                                <th>Taluka</th>
                                                <th>Firm Name</th>
                                                <th>Firm Address</th>
                                                <th>Firm State</th>
                                                <th>Firm District</th>
                                                <th>Firm Taluka</th>
                                                <th>Type of Firm</th>
                                                <th>Firm GST</th>
                                                <th>Firm Mobile 1</th>
                                                <th>Firm Mobile 2</th>
                                                <th>Firm Phone 1</th>
                                                <th>Firm Phone 2</th>
                                                <th>Firm Email 1</th>
                                                <th>Firm Email 2</th>
                                                <th>Firm Shop Area</th>
                                                <th>Firm Storage Area</th>
                                                <th>Transport</th>
                                                <th>Firm Vehicle</th>
                                                <th>Below 5 Lakhs</th>
                                                <th>5 to 10 Lakhs</th>
                                                <th>Above 10 Lakhs</th>
                                                <th>Personal Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Personal Address</th>
                                                <th>Personal State</th>
                                                <th>Personal District</th>
                                                <th>Personal Taluka</th>
                                                <th>Zip Code</th>
                                                <th>Education</th>
                                                <th>Age</th>
                                                <th>Personal Mobile 1</th>
                                                <th>Personal Mobile 2</th>
                                                <th>Personal Phone 1</th>
                                                <th>Personal Phone 2</th>
                                                <th>Personal Email 1</th>
                                                <th>Personal Email 2</th>
                                                <th>Created Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['state']; ?></td>
                                                    <td><?php echo $row['district']; ?></td>
                                                    <td><?php echo $row['taluka']; ?></td>
                                                    <td><?php echo $row['firm_name']; ?></td>
                                                    <td><?php echo $row['firm_address']; ?></td>
                                                    <td><?php echo $row['firm_state']; ?></td>
                                                    <td><?php echo $row['firm_district']; ?></td>
                                                    <td><?php echo $row['firm_taluka']; ?></td>
                                                    <td><?php echo $row['type_firm']; ?></td>
                                                    <td><?php echo $row['firm_gst']; ?></td>
                                                    <td><?php echo $row['firm_mobile1']; ?></td>
                                                    <td><?php echo $row['firm_mobile2']; ?></td>
                                                    <td><?php echo $row['firm_phone1']; ?></td>
                                                    <td><?php echo $row['firm_phone2']; ?></td>
                                                    <td><?php echo $row['firm_email1']; ?></td>
                                                    <td><?php echo $row['firm_email2']; ?></td>
                                                    <td><?php echo $row['firm_shop_area']; ?></td>
                                                    <td><?php echo $row['firm_storage_area']; ?></td>
                                                    <td><?php echo $row['transport']; ?></td>
                                                    <td><?php echo $row['firm_vehicle']; ?></td>
                                                    <td><?php echo $row['below5lakhs']; ?></td>
                                                    <td><?php echo $row['5to10lakhs']; ?></td>
                                                    <td><?php echo $row['ab10lakhs']; ?></td>
                                                    <td><?php echo $row['personal_name']; ?></td>
                                                    <td><?php echo $row['personal_middle_name']; ?></td>
                                                    <td><?php echo $row['personal_last_name']; ?></td>
                                                    <td><?php echo $row['personal_address']; ?></td>
                                                    <td><?php echo $row['personal_state']; ?></td>
                                                    <td><?php echo $row['personal_district']; ?></td>
                                                    <td><?php echo $row['personal_taluka']; ?></td>
                                                    <td><?php echo $row['personal_zip']; ?></td>
                                                    <td><?php echo $row['personal_education']; ?></td>
                                                    <td><?php echo $row['personal_age']; ?></td>
                                                    <td><?php echo $row['personal_mobile1']; ?></td>
                                                    <td><?php echo $row['personal_mobile2']; ?></td>
                                                    <td><?php echo $row['personal_phone1']; ?></td>
                                                    <td><?php echo $row['personal_phone2']; ?></td>
                                                    <td><?php echo $row['personal_email1']; ?></td>
                                                    <td><?php echo $row['personal_email2']; ?></td>
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