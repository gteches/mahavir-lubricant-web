<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('custom_error_page.php');
	}
	public function customError($type)
	{
		if ($type == 'option') {
			$data['message'] = "Option table missing";
		} else if ($type == 'site_setting') {
			$data['message'] = "Site Setting table missing";
		}
		$this->load->view('custom_error_page', $data);
	}
}
