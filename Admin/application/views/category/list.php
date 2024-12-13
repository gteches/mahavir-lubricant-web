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
                                <h1 class="h3 d-inline align-middle">Manage Category</h1>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header ">
                                            <a href="<?php echo base_url("category-add"); ?>" class="btn btn-success float-end">Add New</a>
                                        </div>
                                        <div class="card-body">
                                            <table id="example" class="display" style="width:100%">
                                                <thead>
                                                    <tr><th>Title</th><th>Banner Image</th><th>Display Order</th><th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($list as $ls) {
                                                    $chkStatus = "";
                                                    if ($ls["tc_status"]) {
                                                        $chkStatus = "checked";
                                                    } ?>
                                                    <tr><td><?php echo $ls["tc_title"]; ?></td><td><a target="_blank" href="<?php echo base_url("uploads/category/" . $ls["tc_banner_image"]); ?>"><img src="<?php echo base_url("uploads/category/" . $ls["tc_banner_image"]); ?>" style="width:100px;"></a></td><td><input type="text" value="<?php echo $ls["tc_display_order"]; ?>" onblur="changeDisplayOrder('<?php echo $ls['tc_id']; ?>','tbl_category',this.value,'<?php echo $ls['tc_display_order']; ?>')" class="form-control" style="width:100px;"></td><td>
                                                            <input <?php echo $chkStatus; ?> onchange="changeStatus('<?php echo $ls['tc_id']; ?>','tbl_category',this)" type="checkbox" data-toggle="switchbutton" data-onlabel="Active" data-offlabel="Deactive" data-onstyle="success" data-offstyle="danger">
                                                        </td>
                                                        <td class="table-action">
                                                            <a href="<?php echo base_url("category-edit/" . $ls['tc_id']); ?>"><i data-feather="edit"></i></a>
                                                            <a onclick="deleteData('<?php echo $ls['tc_id']; ?>','tbl_category')"><i data-feather="trash"></i></a>
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
            </script>
        </body>

        </html>