<?php
        defined("BASEPATH") or exit("No direct script access allowed");
        class SiteSetting extends CI_Controller
        {
            public function __construct()
            {
                parent::__construct();
                $userData = $this->session->userdata("userData");
                if (empty($userData)) {
                    redirect(base_url("login"));
                }
            }
            public function siteSetting()
            {
                $qry = $this->db->get("tbl_site_setting");
                $data["detail"] = $qry->row();
                $this->load->view("site_setting/add", $data);
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
            public function upload_pdf($temp, $dir, $dfm)
            {
                $this->load->helper("date");
                $config["upload_path"] = $dir;
                $config["allowed_types"] = "pdf|PDF";
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
            public function updateSiteSetting()
            {if (!empty($_FILES["logo"]["name"])) {

                        if (!is_dir("uploads/site")) {
                            mkdir("./uploads/site", 0777, TRUE);
                        }
                        $img_res = $this->upload("logo", "uploads/site/", $_FILES["logo"]["name"]);

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
                        @unlink("uploads/site/" . $this->input->post("image1"));
                    }$id = $this->input->post("id");
                $update_data = array();$update_data["ts_company_name"] = $this->input->post("companyName");$update_data["ts_short_desc"] = $this->input->post("shortDesc");$update_data["ts_email"] = $this->input->post("email");$update_data["ts_mobile"] = $this->input->post("mobileNo");$update_data["ts_address"] = $this->input->post("address");$update_data["ts_facebook_link"] = $this->input->post("fbLink");$update_data["ts_youtube_link"] = $this->input->post("youtubeLink");$update_data["ts_instagram_link"] = $this->input->post("instagramLink");$update_data["ts_twitter_link"] = $this->input->post("twitterLink");$update_data["ts_map_iframe"] = $this->input->post("mapIframe");if ($images == "") {
                        $images = $this->input->post("image1");
                    }
                    $update_data["ts_logo"] = $images;$update_data["ts_user_name"] = $this->input->post("userName");
                $update_data["ts_meta_title"] = $this->input->post("metaTitle");
                $update_data["ts_meta_keyword"] = $this->input->post("metaKeyword");
                $update_data["ts_meta_description"] = $this->input->post("metaDescription");
                if ($id > 0) {
                    $this->db->where("ts_id", $id);
                    $exe = $this->db->update("tbl_site_setting", $update_data);
                    if ($exe) {
                        $this->session->set_userdata("userData", $update_data);
                        $response["status"] = true;
                        $response["message"] = "Site Setting has been updated successfully";
                    } else {
                        $response["status"] = false;
                        $response["message"] = "Unable to update slider, please try again";
                    }
                } else {

                    $response["status"] = false;
                    $response["message"] = "Invalid, please try again";
                }
                echo json_encode($response);
            }
        }