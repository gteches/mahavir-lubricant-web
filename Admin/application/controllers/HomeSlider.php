<?php
        defined("BASEPATH") or exit("No direct script access allowed");
        class HomeSlider extends CI_Controller
        {
            public function __construct()
            {
                parent::__construct();
                $userData = $this->session->userdata("userData");
                if (empty($userData)) {
                    redirect(base_url("login"));
                }
            }
            public function list()
            {
                $this->db->where("ths_is_deleted", false);
                $qry = $this->db->get("tbl_home_slider");
                $data["list"] = $qry->result_array();
                $this->load->view("home_slider/list", $data);
            }
            public function add($id = 0)
            {
                $data= array();
                if ($id > 0) {
                    $this->db->where("ths_id", $id);
                    $exe = $this->db->get("tbl_home_slider");
                    $data["detail"] = $exe->row();
                }
                $this->load->view("home_slider/add", $data);
            }
            public function saveSlider()
            {if (!empty($_FILES["image"]["name"])) {

                        if (!is_dir("uploads/slider")) {
                            mkdir("./uploads/slider", 0777, TRUE);
                        }
                        $img_res = $this->upload("image", "uploads/slider/", $_FILES["image"]["name"]);

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
                        @unlink("uploads/slider/" . $this->input->post("image1"));
                    }$id = $this->input->post("id");
                $update_data = array();$update_data["ths_title"] = $this->input->post("title");$update_data["ths_sub_title"] = $this->input->post("subTitle");$update_data["ths_display_order"] = $this->input->post("disOrder");if ($images == "") {
                        $images = $this->input->post("image1");
                    }
                    $update_data["ths_image"] = $images;if ($id > 0) {
                    $this->db->where("ths_id", $id);
                    $exe = $this->db->update("tbl_home_slider", $update_data);
                    if ($exe) {
                        $response["status"] = true;
                        $response["message"] = "Slider has been updated successfully";
                    } else {
                        $response["status"] = false;
                        $response["message"] = "Unable to update slider, please try again";
                    }
                } else {
                    $exe = $this->db->insert("tbl_home_slider", $update_data);
                    if ($exe) {
                        $response["status"] = true;
                        $response["message"] = "Slider has been added successfully";
                    } else {
                        $response["status"] = false;
                        $response["message"] = "Unable to add slider, please try again";
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