<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscribe extends CI_Controller
{

	public function subscribe_add()
	{
		if ($this->session->userdata('user_role') == '1') {

			$URL = $this->input->post('URL');

			$dataAdd = array(
				'email' => $this->input->post('Subscribe'),
				'location' => $this->input->post('location'),
				'date_time' => date('Y-m-d h:m:i')
			);

			$result = $this->db->insert('tb_subscribe_ecommerce', $dataAdd);

			if (!$result) {
				$this->session->set_flashdata('unsuccess_alert', "Failed");
			} else {
				$this->session->set_flashdata('subscribe_success', "Success");
			}
			redirect($URL);
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}
}
