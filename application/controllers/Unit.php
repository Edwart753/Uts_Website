<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unit extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		check_not_login();
        $this->load->model('unit_m');
	}



	public function index()
	{
		$data['row'] = $this->unit_m->get();
		$this->template->load('template', 'product/unit/unit_data', $data);
	}




	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->unit_m->add($post);
		}

		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data sudah disimpan');
		}
		redirect('unit');

	}



	public function add()
	{
		$unit = new stdClass();
		$unit->unit_id = null;
		$unit->name = null;
		$data=array(
			'page'=> 'add',
			'row'=>$unit
		);

		$this->template->load('template', 'product/unit/unit_form',$data);
	}

	public function edit($id)
	{
		$query = $this->unit_m->get($id);
		if($query->num_rows > 0 ){
			$unit = $query->row();
			$data=array(
				'page'=> 'add',
				'row'=>$unit
			);
			$this->template->load('template', 'product/unit/unit_form',$data);
		} else {
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('unit')."';</sccript>";
		}
	}



	public function del($id){
		$this->unit_m->del($id);
		if($this->db->affected_rows() == 1){
			$this->session->set_flashdata('success', 'Data sudah dihapus');
		}
		redirect('unit');
	}
}


