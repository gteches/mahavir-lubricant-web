<?php
defined("BASEPATH") or exit("No direct script access allowed");
class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $userData = $this->session->userdata("userData");

        if (empty($userData)) {
            redirect(base_url("login"));
        }
    }
    public function index()
    {

        $this->db->where("tc_is_deleted", false);
        $exe = $this->db->get("tbl_category");
        $data["list"] = $exe->result_array();
        $this->load->view("category/list", $data);
    }
    public function add($id = 0)
    {
        $data = array();
        if ($id > 0) {
            $this->db->where("tc_id", $id);
            $exe = $this->db->get("tbl_category");
            $data["detail"] = $exe->row();
        }
        $this->load->view("category/add", $data);
    }
    public function save()
    {
        if (!empty($_FILES["bannerImage"]["name"])) {

            if (!is_dir("uploads/category")) {
                mkdir("./uploads/category", 0777, TRUE);
            }
            $img_res = $this->upload("bannerImage", "uploads/category/", $_FILES["bannerImage"]["name"]);

            if (isset($img_res["error"]) && !empty($img_res["error"])) {
                echo $img_res["error"];
                exit;
            } else {
                $bannerImages = $img_res;
            }
        } else {
            $bannerImages = "";
        }
        if ($bannerImages != "") {
            @unlink("uploads/category/" . $this->input->post("bannerImage1"));
        }
        $id = $this->input->post("id");
        $update_data = array();
        $update_data["tc_title"] = $this->input->post("name");
        $update_data["tc_display_order"] = $this->input->post("disOrder");
        $name = $this->input->post("name");
        if ($bannerImages == "") {
            $bannerImages = $this->input->post("bannerImage1");
        }
        $update_data["tc_banner_image"] = $bannerImages;
        $update_data["tc_meta_title"] = $this->input->post("metaTitle");
        $update_data["tc_meta_keyword"] = $this->input->post("metaKeyword");
        $update_data["tc_meta_description"] = $this->input->post("metaDescription");

        if ($id > 0) {
            $this->db->where("tc_id", $id);
            $exe = $this->db->update("tbl_category", $update_data);
            if ($exe) {
                $response["status"] = true;
                $response["message"] = "Category has been updated successfully";
            } else {
                $response["status"] = false;
                $response["message"] = "Unable to update category, please try again";
            }
        } else {

            $this->db->where("tc_title", $name);
            $exe = $this->db->get("tbl_category");
            if ($exe->num_rows() > 0) {
                $response["status"] = false;
                $response["message"] = "Category already exists with this name";
            } else {
                $exe = $this->db->insert("tbl_category", $update_data);
                if ($exe) {
                    $response["status"] = true;
                    $response["message"] = "Category has been added successfully";
                } else {
                    $response["status"] = false;
                    $response["message"] = "Unable to add category, please try again";
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
}
