<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $userData = $this->session->userdata("userData");
        if (empty($userData)) {
            redirect(base_url("login"));
        }
    }
    public function checkTableExists($tableName)
    {
        if ($this->db->table_exists($tableName)) {
            return true;
        } else {
            return false;
        }
    }

    public function index()
    {
        if ($this->checkTableExists("tbl_category")) {
            $this->db->join("tbl_category", "tbl_category.tc_id=tbl_product.tp_cat_id", "left");
        }
        if ($this->checkTableExists("tbl_sub_category")) {
            $this->db->join("tbl_sub_category", "tbl_sub_category.tsc_id=tbl_product.tp_sub_cat_id", "left");
        }
        $this->db->where("tp_is_deleted", false);
        $exe = $this->db->get("tbl_product");
        $data["list"] = $exe->result_array();
        $this->load->view("product/list", $data);
    }
    public function add($id = 0)
    {
        $data = array();

        if ($this->checkTableExists("tbl_category")) {
            $this->db->where("tc_status", true);
            $this->db->where("tc_is_deleted", false);
            $exe = $this->db->get("tbl_category");
            $data["catList"] = $exe->result_array();
        }
        if ($id > 0) {
            $this->db->where("tp_id", $id);
            $exe = $this->db->get("tbl_product");
            $data["detail"] = $exe->row();
            if ($this->checkTableExists("tbl_sub_category")) {
                $this->db->where("tsc_status", true);
                $this->db->where("tsc_is_deleted", false);
                $this->db->where("tsc_cat_id",  $data["detail"]->tp_cat_id);
                $exe = $this->db->get("tbl_sub_category");
                $data["subCatList"] = $exe->result_array();
            }
        }
        $this->load->view("product/add", $data);
    }
    public function save()
    {
        if (!empty($_FILES["image"]["name"])) {

            if (!is_dir("uploads/product")) {
                mkdir("./uploads/product", 0777, TRUE);
            }
            $img_res = $this->upload("image", "uploads/product/", $_FILES["image"]["name"]);

            if (isset($img_res["error"]) && !empty($img_res["error"])) {
                echo $img_res["error"];
                exit;
            } else {
                $images = $img_res;
            }
        } else {
            $images = "";
        }
        if ($images != "") {
            @unlink("uploads/product/" . $this->input->post("image1"));
        }
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $update_data = array();

        if ($this->db->table_exists("tbl_category")) {
            $update_data["tp_cat_id"] = $this->input->post("catId");
        }
        if ($this->db->table_exists("tbl_sub_category")) {
            $update_data["tp_sub_cat_id"] = $this->input->post("subCatId");
        }
        $update_data["tp_title"] = $this->input->post("name");
        $update_data["tp_liter"] = $this->input->post("ltr");
        $update_data["tp_display_order"] = $this->input->post("disOrder");
        if ($images == "") {
            $images = $this->input->post("image1");
        }
        $update_data["tp_image"] = $images;
        $update_data["tp_meta_title"] = $this->input->post("metaTitle");
        $update_data["tp_meta_keyword"] = $this->input->post("metaKeyword");
        $update_data["tp_meta_description"] = $this->input->post("metaDescription");
        if ($id > 0) {
            $this->db->where("tp_id", $id);
            $exe = $this->db->update("tbl_product", $update_data);
            if ($exe) {
                $response["status"] = true;
                $response["message"] = "Product has been updated successfully";
            } else {
                $response["status"] = false;
                $response["message"] = "Unable to update product, please try again";
            }
        } else {

            $this->db->where("tp_title", $name);
            $exe = $this->db->get("tbl_product");
            if ($exe->num_rows() > 0) {
                $response["status"] = false;
                $response["message"] = "Product already exists with this name";
            } else {
                $exe = $this->db->insert("tbl_product", $update_data);
                if ($exe) {
                    $response["status"] = true;
                    $response["message"] = "Product has been added successfully";
                } else {
                    $response["status"] = false;
                    $response["message"] = "Unable to add product, please try again";
                }
            }
        }
        echo json_encode($response);
    }
    public function upload($temp, $dir, $dfm)
    {
        $this->load->helper("date");
        $config["upload_path"] = $dir;
        $config["allowed_types"] = "gif|jpg|jpeg|png";
        $config["file_name"] = time() . $dfm;
        $this->load->library("upload", $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($temp)) {
            $error = array("error" => $this->upload->display_errors());
            return $error;
        } else {
            $upload_data = $this->upload->data();
            return $upload_data["file_name"];
        }
    }
    public function getSubCategory()
    {
        $id = $this->input->post("id");
        $this->db->where("tsc_status", true);
        $this->db->where("tsc_is_deleted", false);
        $this->db->where("tsc_cat_id",  $id);
        $exe = $this->db->get("tbl_sub_category");
        $data = $exe->result_array();

        $html = "<option value=''>Select Sub Category</option>";
        if (sizeof($data) > 0) {
            foreach ($data as $dt) {
                $html .= "<option value='" . $dt["tsc_id"] . "'>" . $dt["tsc_title"] . "</option>";
            }
            $response["status"] = true;
            $response["data"] = $html;
        } else {
            $response["status"] = false;
            $response["message"] = "Sub-category not found";
            $response["data"] = $html;
        }
        echo  json_encode($response);
    }
}
