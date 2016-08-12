<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$sql = "select * from activities;";
		$query = $this->db->query($sql);
		$data['result'] = $query->result();
		$this->load->view('farmer_report',$data);
	}
}
