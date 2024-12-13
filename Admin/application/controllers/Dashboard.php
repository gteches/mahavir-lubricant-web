<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $userData = $this->session->userdata('userData');
        if (empty($userData)) {
            redirect(base_url('login'));
        }
    }


    public function index()
    {
        $this->load->view('dashboard');
    }

    public function getColumnData($table_name)
    {
        $this->db->where('table_name', $table_name);
        $exe = $this->db->get('tbl_option');
        $result = $exe->result_array();
        $columnData = array();
        if (sizeof($result) > 0) {
            $columnData = json_decode($result[0]['column_data']);
        }
        return $columnData;
    }

    public function logout()
    {
        $this->session->unset_userdata('userData', '');
        redirect(base_url(''));
    }


    public function deleteData()
    {
        $id = $this->input->post('id');
        $tableName = $this->input->post('tableName');
        if ($tableName == 'tbl_home_slider') {
            $this->db->where('ths_id', $id);
            $update_data = array("ths_is_deleted" => true);
        } else if ($tableName == 'tbl_category') {
            $this->db->where('tc_id', $id);
            $update_data = array("tc_is_deleted" => true);
        } else if ($tableName == 'tbl_cms_page') {
            $this->db->where('tcp_id', $id);
            $update_data = array("tcp_is_deleted" => true);
        } else if ($tableName == 'tbl_product') {
            $this->db->where('tp_id', $id);
            $update_data = array("tp_is_deleted" => true);
        } else if ($tableName == 'tbl_sub_category') {
            $this->db->where('tsc_id', $id);
            $update_data = array("tsc_is_deleted" => true);
        }
        $exe = $this->db->update($tableName, $update_data);
        if ($exe) {
            $response['status'] = true;
            $response['message'] = 'Data deleted successfully';
        } else {
            $response['status'] = false;
            $response['message'] = 'Unable to delete data, please try again.';
        }
        echo json_encode($response);
    }

    public function updateDisplayOrder()
    {
        $id = $this->input->post('id');
        $tableName = $this->input->post('tableName');
        $disOrder = $this->input->post('disOrder');
        if ($tableName == 'tbl_home_slider') {
            $this->db->where('ths_id', $id);
            $update_data = array("ths_display_order" => $disOrder);
        } else if ($tableName == 'tbl_category') {
            $this->db->where('tc_id', $id);
            $update_data = array("tc_display_order" => $disOrder);
        } else if ($tableName == 'tbl_cms_page') {
            $this->db->where('tcp_id', $id);
            $update_data = array("tcp_display_order" => $disOrder);
        } else if ($tableName == 'tbl_product') {
            $this->db->where('tp_id', $id);
            $update_data = array("tp_display_order" => $disOrder);
        } else if ($tableName == 'tbl_sub_category') {
            $this->db->where('tsc_id', $id);
            $update_data = array("tsc_display_order" => $disOrder);
        }
        $exe = $this->db->update($tableName, $update_data);
        if ($exe) {
            $response['status'] = true;
            $response['message'] = 'Display Order updated successfully';
        } else {
            $response['status'] = false;
            $response['message'] = 'Unable to update display order, please try again.';
        }
        echo json_encode($response);
    }
    public function updateStatus()
    {
        $id = $this->input->post('id');
        $tableName = $this->input->post('tableName');
        $status = $this->input->post('status');
        if ($tableName == 'tbl_home_slider') {
            $this->db->where('ths_id', $id);
            $update_data = array("ths_status" => $status);
        } else if ($tableName == 'tbl_category') {
            $this->db->where('tc_id', $id);
            $update_data = array("tc_status" => $status);
        } else if ($tableName == 'tbl_cms_page') {
            $this->db->where('tcp_id', $id);
            $update_data = array("tcp_status" => $status);
        } else if ($tableName == 'tbl_product') {
            $this->db->where('tp_id', $id);
            $update_data = array("tp_status" => $status);
        } else if ($tableName == 'tbl_sub_category') {
            $this->db->where('tsc_id', $id);
            $update_data = array("tsc_status" => $status);
        }
        $exe = $this->db->update($tableName, $update_data);
        if ($exe) {
            $response['status'] = true;
            $response['message'] = 'Status updated successfully';
        } else {
            $response['status'] = false;
            $response['message'] = 'Unable to update status, please try again.';
        }
        echo json_encode($response);
    }
    public function changePassword()
    {
        $this->load->view('general/change_password.php');
    }
    public function updateAdmnPassword()
    {
        $this->db->where('ts_password', md5($this->input->post('oldPassword')));
        $exe = $this->db->get('tbl_site_setting');
        $result = $exe->result_array();
        if (empty($result)) {
            $response['status'] = false;
            $response['message'] = 'Incorrect Old Password';
        } else {
            $update_data = array();
            $update_data["ts_password"] = md5($this->input->post('newPassword'));
            $this->db->where("ts_id", 1);
            $exe = $this->db->update('tbl_site_setting', $update_data);
            if ($exe) {
                $this->session->unset_userdata('userData', '');
                $response['status'] = true;
                $response['message'] = 'Password has been updated successfully';
            } else {
                $response['status'] = false;
                $response['message'] = 'Unable to update password, please try again';
            }
        }

        echo json_encode($response);
    }
}
