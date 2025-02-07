<?php
        defined("BASEPATH") or exit("No direct script access allowed");
        class DealerInquiry extends CI_Controller
        {
            public function __construct()
            {
                parent::__construct();
                $userData = $this->session->userdata("userData");
                if (empty($userData)) {
                    redirect(base_url("login"));
                }
            }
            public function inquiryList()
            {
                $this->db->order_by("id", "desc");
                $qry = $this->db->get("dealer_data");
                $data["list"] = $qry->result_array();
                $this->load->view("contact_inquiry/dealerlist", $data);
            }
            public function deleteInquiryData()
            {
                $id = $this->input->post("id");
                $tableName = $this->input->post("tableName");
                $this->db->where("id", $id);
                $exe = $this->db->delete($tableName);
                if ($exe) {
                    $response["status"] = true;
                    $response["message"] = "Data deleted successfully";
                } else {
                    $response["status"] = false;
                    $response["message"] = "Unable to delete data, please try again.";
                }
                echo json_encode($response);
            }
        }