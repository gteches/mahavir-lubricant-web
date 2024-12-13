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
                                <h1 class="h3 d-inline align-middle">Manage Product</h1>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header ">
                                            <a href="<?php echo base_url("product-add"); ?>" class="btn btn-success float-end">Add New</a>
                                        </div>
                                        <div class="card-body">
                                            <table id="example" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <?php if ($this->db->table_exists("tbl_category")) { ?>
                                                            <th>Category</th>
                                                        <?php } if ($this->db->table_exists("tbl_sub_category")) { ?>
                                                            <th>Sub Category</th>
                                                       <?php } ?><th>Title</th><th>Image</th><th>Display Order</th><th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list as $ls) {
                                                        $chkStatus = "";
                                                        if ($ls["tp_status"]) {
                                                            $chkStatus = "checked";
                                                        } ?>
                                                        <tr>
                                                        <?php if ($this->db->table_exists("tbl_category")) { ?>
                                                            <td><?php echo $ls["tc_title"];?></td>
                                                            <?php } if ($this->db->table_exists("tbl_sub_category")) { ?>
                                                            <td><?php echo $ls["tsc_title"];?></td>
                                                        <?php } ?><td><?php echo $ls["tp_title"];?></td><td><a target="_blank" href="<?php echo base_url("uploads/product/" . $ls["tp_image"]) ;?>"><img src="<?php echo base_url("uploads/product/" . $ls["tp_image"]);?>" style="width:100px;"></a></td><td><input type="text" value="<?php echo $ls["tp_display_order"];?>" onblur="changeDisplayOrder(' <?php echo $ls['tp_id'];?>','tbl_product',this.value,' <?php echo $ls['tp_display_order'];?>')" class="form-control" style="width:100px;"></td><td>
                                                                    <input <?php echo $chkStatus;?> onchange="changeStatus(' <?php echo $ls['tp_id'];?>','tbl_product',this)" type="checkbox" data-toggle="switchbutton" data-onlabel="Active" data-offlabel="Deactive" data-onstyle="success" data-offstyle="danger">
                                                            </td>
                                                            <td class="table-action">
                                                                <a href="<?php echo base_url("product-edit/" . $ls["tp_id"]);?>" ><i data-feather="edit"></i></a>
                                                                <a  onclick="deleteData(' <?php echo $ls['tp_id'];?>','tbl_product')"><i data-feather="trash"></i></a>
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