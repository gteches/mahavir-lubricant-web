<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $userData = $this->session->userdata('userData');

        if (!empty($userData)) {
            redirect(base_url('dashboard'));
        }
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function authentication()
    {
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');
        $this->db->where('ts_user_name', $userName);
        $this->db->where('ts_password', md5($password));
        $exe = $this->db->get('tbl_site_setting');
        $result = $exe->result_array();
        if (empty($result)) {
            $response['status'] = false;
            $response['message'] = 'Invalid login credentials';
        } else {
            $this->session->set_userdata('userData', $result[0]);
            $response['status'] = true;
            $response['userData'] = $result;
        }
        echo json_encode($response);
    }
}
