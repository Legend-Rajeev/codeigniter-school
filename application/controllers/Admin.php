<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		
	}

	public function index()
	{	
		$this->load->view('Admin/header');
		$this->load->view('Admin/login_form');
		$this->load->view('Admin/footer');
	}

	public function new_user(){
		$this->load->view('Admin/header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/new_user');
		$this->load->view('Admin/footer');
	}

	public function posts(){
		$this->load->view('Admin/header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/post');
		$this->load->view('Admin/footer');
	}

	public function add_post(){
		$this->load->view('Admin/header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/add_post');
		$this->load->view('Admin/footer');
	}

	public function edit_post(){
		$this->load->view('Admin/header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/edit_post');
		$this->load->view('Admin/footer');
	}

	public function category(){
		$result['data'] = $this->admin_model->get_category();
		$this->load->view('Admin/header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/category', $result);
		$this->load->view('Admin/footer');
	}

	public function add_category(){
		$this->load->view('Admin/header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/add_category');
		$this->load->view('Admin/footer');
	}
	public function save_category(){
		$data['category_name'] = $this->input->post('cat_name');
		$data['status'] = 1;
		$data['added_on'] = date('Y-m-d H:i:s');
		$result = $this->admin_model->add_data("category",$data);
		if($result == 1){
			echo "Category Added !";
		}
	}

	public function status($type, $table, $id){
		$data['status'] = $type;
		$this->admin_model->update_data($table, $data, $id);
		header("location:../../../category");
	}

	public function edit_category($id){
		$data['cat_id'] = $id;
		$result['data'] = $this->admin_model->get_data_from_id("category", $id);
		$this->load->view('Admin/header');
		$this->load->view('Admin/navbar');
		$this->load->view('Admin/edit_category', $result);
		$this->load->view('Admin/footer');
	}

	public function update_category(){
		$id = $this->input->post('cat_id');
		$data['category_name'] = $this->input->post('cat_name');
		$this->admin_model->update_data("category", $data, $id);
		
	}
}
