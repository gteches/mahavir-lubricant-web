<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	public function index()
	{
		$this->db->where('ths_status', true);
		$this->db->where('ths_is_deleted', false);
		$exe = $this->db->get('tbl_home_slider');
		$data['sliderList'] = $exe->result_array();

		$this->db->where('tp_status', true);
		$this->db->where('tp_is_deleted', false);
		$this->db->order_by('tp_display_order', 'asc');
		$exe = $this->db->get('tbl_product');
		$data['productList'] = $exe->result_array();

		$this->load->view('home', $data);
	}
	public function productList($id)
	{

		$this->db->where('tp_status', true);
		$this->db->where('tp_is_deleted', false);
		$this->db->where('tp_cat_id', $id);
		$this->db->order_by('tp_display_order', 'asc');
		$exe = $this->db->get('tbl_product');
		$data['list'] = $exe->result_array();

		$this->db->where('tc_id', $id);
		$exe1 = $this->db->get('tbl_category');
		$data['categoryDetail'] = $exe1->result_array()[0];
		$this->load->view('product-list', $data);
	}



	public function aboutUs()
	{
		$this->load->view('about-us');
	}
	public function whyUs()
	{
		$this->load->view('whyUs');
	}
	public function coreValues()
	{
		$this->load->view('coreValues');
	}
	public function milestone()
	{
		$this->load->view('milestone');
	}
	public function infrastructure()
	{
		$this->load->view('infrastructure');
	}
	public function ourPresence()
	{
		$this->load->view('ourPresence');
	}
	public function becomeDealer()
	{
		$this->db->where('s_is_active', 1);
		$this->db->where('s_is_deleted', 0);
		$this->db->order_by('s_name', 'asc');
		$exe = $this->db->get('tbl_state');
		$data['stateList'] = $exe->result_array();
		$this->load->view('becomeDealer', $data);
	}
	public function getDistrict()
	{
		$this->db->where('d_is_active', 1);
		$this->db->where('d_is_deleted', 0);
		$this->db->order_by('d_name', 'asc');
		$this->db->where('d_state_id', $this->input->post('id'));
		$exe = $this->db->get('tbl_district');
		$data = $exe->result_array();
		$html = '<option value="">Select District</option>';
		foreach ($data as $dt) {
			$html .= '<option value="' . $dt['d_name'] . '">' . $dt['d_name'] . '</option>';
		}
		$response['list'] = $html;
		echo json_encode($response);
	}
	public function saveDealer()
	{
		$data = $this->input->post(); // Fetch data from the form
		$exe = $this->db->insert('dealer_data', $data);
		if ($exe) {
			$response['status'] = true;
			$response['message'] = 'Your data has been submitted.';
		} else {
			$response['message'] = 'Unable to submit data, please try again';
			$response['status'] = false;
		}
		echo json_encode($response);
	}
	public function saveVendor()
	{
		if (!empty($_FILES["business_card"]["name"])) {

			if (!is_dir("uploads/vendor")) {
				mkdir("./uploads/vendor", 0777, TRUE);
			}
			$img_res = $this->upload("business_card", "uploads/vendor/", $_FILES["business_card"]["name"]);

			if (isset($img_res["error"]) && !empty($img_res["error"])) {
				echo $img_res["error"];
				exit;
			} else {
				$business_cards = $img_res;
			}
		} else {
			$business_cards = "";
		}

		if (!empty($_FILES["pan"]["name"])) {

			if (!is_dir("uploads/vendor")) {
				mkdir("./uploads/vendor", 0777, TRUE);
			}
			$img_res = $this->upload("pan", "uploads/vendor/", $_FILES["pan"]["name"]);

			if (isset($img_res["error"]) && !empty($img_res["error"])) {
				echo $img_res["error"];
				exit;
			} else {
				$pans = $img_res;
			}
		} else {
			$pans = "";
		}

		if (!empty($_FILES["gst_reg"]["name"])) {

			if (!is_dir("uploads/vendor")) {
				mkdir("./uploads/vendor", 0777, TRUE);
			}
			$img_res = $this->upload("gst_reg", "uploads/vendor/", $_FILES["gst_reg"]["name"]);

			if (isset($img_res["error"]) && !empty($img_res["error"])) {
				echo $img_res["error"];
				exit;
			} else {
				$gst_regs = $img_res;
			}
		} else {
			$gst_regs = "";
		}
		if (!empty($_FILES["cancel_cheque"]["name"])) {

			if (!is_dir("uploads/vendor")) {
				mkdir("./uploads/vendor", 0777, TRUE);
			}
			$img_res = $this->upload("cancel_cheque", "uploads/vendor/", $_FILES["cancel_cheque"]["name"]);

			if (isset($img_res["error"]) && !empty($img_res["error"])) {
				echo $img_res["error"];
				exit;
			} else {
				$cancel_cheques = $img_res;
			}
		} else {
			$cancel_cheques = "";
		}
		$data = $this->input->post(); // Fetch data from the form
		$data['pan'] = $pans;
		$data['gst_reg'] = $gst_regs;
		$data['cancel_cheque'] = $cancel_cheques;
		$exe = $this->db->insert('vendor_details', $data);
		if ($exe) {
			$response['status'] = true;
			$response['message'] = 'Your data has been submitted.';
		} else {
			$response['message'] = 'Unable to submit data, please try again';
			$response['status'] = false;
		}
		echo json_encode($response);
	}
	public function becomeVendor()
	{
		$this->load->view('becomeVendor');
	}
	public function videos()
	{
		$this->load->view('video');
	}
	public function contactUs()
	{
		$this->load->view('contact-us');
	}

	public function saveInquiry()
	{
		$this->load->library('email');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$insert_data = array(
			"tci_name" => $name,
			"tci_email" => $email,
			"tci_message" => $message,
		);
		$mailSubject = "New Website Inquiry - " . time();
		$this->db->insert('tbl_contact_inquiry', $insert_data);
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.umiyafasteners.com',
			'smtp_port' => 587,
			'smtp_user' => 'no_reply@umiyafasteners.com',
			'smtp_pass' => 'j)yQlL?unY5w',
			'smtp_crypto' => 'tls',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'newline' => '\r\n',
			'wordwrap' => TRUE
		);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($config['smtp_user'], "Umiya Fastners");
		$this->email->to('umiya.fast@yahoo.co.in');
		$this->email->subject($mailSubject);
		$this->email->message('<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
</head>
<body>
<table style="width:100%;max-width:540px;border:2px solid #f3f3f3;text-align:left" width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td>
			<table style="width:100%!important" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
				<tbody>
					<tr>
					<td style="padding:10px 10px;font-family:Roboto,arial;font-size:20px;vertical-align:top;line-height:20px;color:#f6f6f6;background-color:#EC3142;text-align:center">Inquiry Details
					</td>
					</tr>
					<tr>
					<td style="padding:5px 20px;font-family:Roboto,arial;vertical-align:top;line-height:20px;color:#626262">
						<table width="100%" cellspacing="0" cellpadding="0" border="0">
						 <tbody><tr>
						<td style="color:#626262;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">Name: </td>
						<td style="color:#222222;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">' . $this->input->post('name') . '</td>
						</tr>
						<tr>
						<td style="color:#626262;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">Email: </td>
						<td style="color:#222222;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">' . $this->input->post('email') . '</td>
						</tr>
						 <tr>
						<td style="color:#626262;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">Message: </td>
						<td style="color:#222222;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">' . $this->input->post('message') . '</td>
						</tr>
						<tr>
						<td style="color:#626262;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">Date &amp; Time: </td>
						<td style="color:#222222;font-size:14px;vertical-align:top;line-height:20px;padding:5px" width="50%">' . date('l, jS F Y') . '</td>
						</tr>
						</tbody></table>
					</td>
					</tr>
			</tbody></table>
		</td>
	</tr>
</tbody></table>
</body>
</html>');
		if ($this->email->send()) {
			$response["status"] = true;
			$response["message"] = "Thank you for inquiry, we will get back you soon";
		} else {
			$response["status"] = false;
			$response["message"] = show_error($this->email->print_debugger());
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
