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
                                <h1 class="h3 d-inline align-middle">Manage Slider</h1>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header ">
                                            <a href="<?php echo base_url("home-slider-add"); ?>" class="btn btn-success float-end">Add New</a>
                                        </div>

                                        <div class="card-body">
                                            <table id="example" class="display" style="width:100%">
                                                <thead>
                                                    <tr><th>Title</th><th>Sub Title</th><th>Image</th><th>Display Order</th><th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list as $ls) {
                                                        $chkStatus = "";
                                                        if ($ls["ths_status"]) {
                                                            $chkStatus = "checked";
                                                        } ?>
                                                        <tr><td><?php echo $ls["ths_title"];?></td><td><?php echo  $ls["ths_sub_title"] ;?></td><td><img src="<?php echo base_url("uploads/slider/" . $ls["ths_image"]);?>" style="width:100px;"></td><td><input type="text" value="<?php echo  $ls["ths_display_order"];?>" onblur="changeDisplayOrder('<?php echo $ls['ths_id'];?>','tbl_home_slider',this.value,'<?php echo $ls['ths_display_order'];?>')" class="form-control" style="width:100px;"></td><td>
                                                                    <input <?php echo $chkStatus;?> onchange="changeStatus('<?php echo $ls['ths_id'];?>','tbl_home_slider',this)" type="checkbox" data-toggle="switchbutton" data-onlabel="Active" data-offlabel="Deactive" data-onstyle="success" data-offstyle="danger">
                                                            </td>
                                                            <td class="table-action">
                                                                <a href="<?php echo base_url("home-slider-edit/" . $ls["ths_id"]);?>" ><i data-feather="edit"></i></a>
                                                                <a  onclick="deleteData('<?php echo $ls['ths_id'] ;?>','tbl_home_slider')"><i data-feather="trash"></i></a>
                                                                </td>
                                                        </tr>
                                                  <?php  } ?>
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