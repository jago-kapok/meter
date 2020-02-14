<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target extends CI_Controller
{	
    public function __construct()
    {
        parent::__construct();
		authentication();
    }

    public function index()
    {
        $data['title'] = 'Target Database';
		$data['target'] = $this->ModelMaster->joinTargetUserPelanggan()->result_array();
		$data['customer'] = $this->ModelMaster->getAll('pelanggan')->result_array();
		$data['user'] = $this->ModelMaster->getAll('user')->result_array();
		$data['status'] = $this->ModelMaster->getAll('status')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('target/index', $data);
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
		$data['user'] = $this->ModelMaster->getAll('user')->result_array();
		$data['status'] = $this->ModelMaster->getAll('status')->result_array();
		
		if($this->input->post('id_user') != ''){
			if($id_user == '%'){
				$user_name = 'All';
			} else {
				$query_user = $this->ModelMaster->getBy('user', array('id_user'=>$id_user));
				$user = $query_user->row();
				$user_name = $user->nama_user;
			}
			
			$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Filter User : '.$user_name.' and Status : '.$status.'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		}

        $this->load->view('templates/header', $data);
        $this->load->view('target/history', $data);
        $this->load->view('templates/footer');
    }
	
	public function detail()
    {
		$where = ['id_target' => $this->uri->segment(3)];
		
        $data['title'] = 'View Detailed History';
		$target = $this->ModelMaster->getByCondition($where);
		$data['target'] = $target->row();
		
        $this->load->view('templates/header', $data);
        $this->load->view('target/detail', $data);
        $this->load->view('templates/footer');
    }
	
	public function create()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_status = $this->input->post('id_status');
		$tgl_create = date("Y-m-d H:i:s");
		
		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'id_status' => $id_status,
			'tgl_create' => $tgl_create,
		);
		
		$this->ModelMaster->add('target', $data);
		$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;New data was added successfully !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('target');
	}
	
	public function update()
	{
		$id_target = $this->input->post('id_target');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_status = $this->input->post('id_status');
		$tgl_create = date("Y-m-d H:i:s");
		
		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'id_status' => $id_status,
			'tgl_create' => $tgl_create,
		);
		$where = array('id_target' => $id_target);
	 
		$this->ModelMaster->edit('target', $where, $data);
		$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Data for : '.$id_target.' was updated !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('target');
	}
	
	public function send()
	{
		$id_target = $this->input->post('id_target');
		$id_user = $this->input->post('id_user');
		
		$data = array(
			'id_user' => $id_user
		);
		$where = array('id_target' => $id_target);
	 
		$this->ModelMaster->edit('target', $where, $data);
		$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Data for : '.$id_target.' was updated !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('target');
	}

    public function delete()
    {
        $where = ['id_target' => $this->uri->segment(3)];
		$query = $this->ModelMaster->getBy('target', $where);
		$row = $query->row();
		
        $this->ModelMaster->delete('target', $where);
		$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Data for : '.$row->id_target.' was deleted !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('target');
    }
	
	public function import(){
		require './application/libraries/excel_reader2.php';
		// require './application/libraries/SpreadsheetReader.php';
		
		$config['upload_path']		= './assets/tmp_file/';
		$config['allowed_types']	= 'xls|xlsx';
		$config['max_size']			= 2048;
		$config['file_name']		= 'CUST-'.date("Y-m-d");
		
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('excel_file')){
			$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Error while uploading file !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('customer');
		} else {
			$data = new Spreadsheet_Excel_Reader($_FILES["excel_file"]["tmp_name"]);
			$baris = $data->rowcount($sheet_index = 0);
			
			for($i=2; $i<=$baris; $i++){
				$id_pelanggan	= $data->val($i, 1);

				if($id_pelanggan != ''){
					$row = $this->db->query("INSERT INTO target (
							id_pelanggan
						) VALUES (
							'$id_pelanggan'
						)"
					);
				}
			}
			
			array_map('unlink', glob('./assets/tmp_file/*.xls'));
			array_map('unlink', glob('./assets/tmp_file/*.xlsx'));
			
			$this->session->set_flashdata('message', '<div class="alert for-alert alert-dismissible fade show"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Import data successfully !<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('target');
		}
	}
	
	public function export()
    {
        $data['title'] = 'Target Database';
		$data['target'] = $this->ModelMaster->joinTargetUserPelanggan()->result_array();

        $this->load->view('target/export', $data);
    }
}