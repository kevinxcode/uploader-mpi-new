<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	function home(){
		$data['current_page'] = "home";
		$data['sub_page'] = "home";
		$data['list'] = [];
		$this->load->view('app/index_header_template', $data);
		$this->load->view('app/home_template', $data);
		$this->load->view('app/index_footer_template', $data);
	}

    public function list_cetak(){
		$data['page'] = 'ABC';
		$check = $this->input->get('check');
		if(isset($check)){
			$dt1 = $this->input->get('dt1');
			$dt2 = $this->input->get('dt2');
		}else{
			$dt1 = date('Y-m-d', strtotime(date('Y-m-d'). ' - 30 days'));
			$dt2 = date('Y-m-d', strtotime(date('Y-m-d'). ' + 2 days'));
		}
		$data['dt1'] = $dt1;
		$data['dt2'] = $dt2;

		$this->abcdb = $this->load->database('abcdb', TRUE);
		$sql = "SELECT * FROM datacetak where tanggal between '$dt1' AND  '$dt2' order by id desc";
		$query = $this->abcdb->query($sql);
		$list =  $query->result();
		$this->abcdb->close();


		$data['list'] = $list;
		$this->load->view('data/list_cetak_temp', $data);
	}

}