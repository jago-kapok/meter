<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') or exit('No direct script access allowed');

class Harmet extends CI_Controller
{	
    public function __construct()
    {
        parent::__construct();
		authentication();
    }

    public function index()
    {
        $data['title'] = 'Harmet Database';
		$data['harmet'] = $this->ModelMaster->getHarmet(array('1'=>1))->result_array();
		$data['customer'] = $this->ModelMaster->getAll('pelanggan')->result_array();
		$data['user'] = $this->ModelMaster->getAll('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('harmet/index', $data);
        $this->load->view('templates/footer');
    }
	
	public function history()
    {
		$id_user = $this->input->post('id_user') ? $this->input->post('id_user') : '';
		$id_status = $this->input->post('id_status') ? $this->input->post('id_status') : '';
		
		if($id_status != 2){
			$where = "target.id_user LIKE '%".$id_user."%' AND target.id_status LIKE '%".$id_status."%'";
			if($id_status == 0){
				$status = 'Not Visited';
			} else if($id_status == 1){
				$status = 'Visited';
			} else if($id_status == 7){
				$status = 'Paid';
			} else if($id_status == 8){
				$status = 'Blocked';
			} else {
				$status = 'All';
			}
		} else {
			$where = "target.id_user LIKE '%".$id_user."%' AND (target.id_status > 1 AND target.id_status < 7)";
			$status = 'Not Paid';
		}
		
        $data['title'] = 'View History';
		$data['target'] = $this->ModelMaster->getByCondition($where)->result_array();
		
		if($this->input->post('id_user') != ''){
			if($id_user == '%'){
				$user_name = 'All';
			} else {
				$query_user = $this->ModelMaster->getBy('user', array('id_user'=>$id_user));
				$user = $query_user->row();
				$user_name = $user->nama_user;
			}
			
			$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Showing data '.$status.' from '.$user_name.' user.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}

        $this->load->view('templates/header', $data);
        $this->load->view('harmet/history', $data);
        $this->load->view('templates/footer');
    }
	
	public function detail()
    {
		$where = ['id_harmet' => $this->uri->segment(3)];
		
        $data['title'] = 'View Detailed History';
		$harmet = $this->ModelMaster->getHarmet($where);
		$data['harmet'] = $harmet->row();
		
		// $harmet = $this->ModelMaster->getBy('harmet', 'harmet.id_harmet = '.$this->uri->segment(3).' AND harmet.status_harmet = 1');
		// $data['harmet'] = $harmet->row();
		
        $this->load->view('templates/header', $data);
        $this->load->view('harmet/detail', $data);
        $this->load->view('templates/footer');
    }
	
	public function update()
	{
		$id_harmet = $this->input->post('id_harmet');
		$id_target = $this->input->post('id_target');
		$merk_harmet = $this->input->post('merk_harmet');
		$no_meter_harmet = $this->input->post('no_meter_harmet');
		$tahun_harmet = $this->input->post('tahun_harmet');
		$stan_harmet = $this->input->post('stan_harmet');
		
		$data = array(
			'id_target' => $id_target,
			'merk_harmet' => $merk_harmet,
			'no_meter_harmet' => $no_meter_harmet,
			'tahun_harmet' => $tahun_harmet,
			'stan_harmet' => $stan_harmet,
			'status_harmet' => 1,
		);
		$where = array('id_harmet' => $id_harmet);
	 
		$this->ModelMaster->edit('harmet', $where, array('status_harmet'=>0));
		$this->ModelMaster->add('harmet', $data);
		redirect('harmet/detail/'.$id_target);
	}
	
	public function export()
    {
		$where = "target.id_status != 1";
		
        $data['title'] = 'Target Database';
		$data['target'] = $this->ModelMaster->getByCondition($where)->result_array();

        $this->load->view('target/export', $data);
    }
}