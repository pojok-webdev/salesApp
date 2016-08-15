<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$sql = "select * from activities;";
		$query = $this->db->query($sql);
		$data['result'] = $query->result();
		$this->load->view('farmer_report',$data);
	}
	function save_act(){
		$params = $this->input->post();
		$sql = "insert into activities ";
		$sql .= "(actdate,division,padipic,clientpic,actname,techdetail,sales,createuser) ";
		$sql .= "values ";
		$sql .= "('".$params["actdate"]."','".$params["division"]."','".$params["padipic"]."','".$params["clientpic"]."','".$params["actname"]."','".$params["techdetail"]."','".$params["sales"]."','test') ";
		$this->db->query($sql);
		echo "suksess ".$sql;
	}
	function remove_act(){
		$params = $this->input->post();
		$sql = "delete from activities where id=".$params['id'];
		$this->db->query($sql);
		echo "suksess";
	}
	function test(){
		echo "hola";
	}
}
