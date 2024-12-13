<!DOCTYPE html>
        <html lang="en">
        <?php $this->load->view("include/header"); ?>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <body>
            <div class="wrapper">
                <?php $this->load->view("include/sidebar"); ?>
                <div class="main">
                    <?php $this->load->view("include/navbar"); ?>
                    <main class="content">
                        <div class="container-fluid p-0">
                            <div class="mb-3">
                                <h1 class="h3 d-inline align-middle">Manage Contact Inquiry</h1>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="example" class="display" style="width:100%">
                                                <thead>
                                                    <tr><th>Title</th><th>Email</th><th>Message</th><th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list as $ls) { ?><tr><td><?php echo $ls["tci_name"];?></td><td><?php echo $ls["tci_email"];?></td><td style="max-width:200px;"><?php echo $ls["tci_message"];?></td><td class="table-action">
                                                                <a  onclick="deleteInquiryData('<?php echo $ls['tci_id'];?>','tbl_contact_inquiry')"><i data-feather="trash"></i></a>
                                                                </td>
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