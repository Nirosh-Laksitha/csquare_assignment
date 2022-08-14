<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public $data;
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->data['title'] = 'Customer';
		$this->data['active'] = 'customer';
		$this->load->model('Customer_model');
	}

	public function index()
	{
		$this->data['customer']  = $this->Customer_model->get_customer();
		$this->data['type']  = 'view';
		$this->load->view('header',$this->data);
		$this->load->view('customer/index');
		$this->load->view('customer/view');
		$this->load->view('footer');
	}

	public function add()
	{

		$this->data['district']  = $this->Customer_model->get_district();
		$this->data['type']  = 'reg';
		$this->load->view('header',$this->data);
		$this->load->view('customer/index');
		$this->load->view('customer/add');
		$this->load->view('footer');
	}

	public function register()
	{
		if (!empty($_POST)){
			$this->form_validation->set_rules('first_name','First Name','required');
			$this->form_validation->set_rules('number','Contact Number','required|min_length[10]|max_length[20]');
			if ($this->form_validation->run() == true){
				if ($this->Customer_model->register()){
					$this->data['status']  = '<div class="alert alert-success">Registration Success</div>';
				}else{
					$this->data['status']  = '<div class="alert alert-danger">Something Wrong!</div>';
				}
			}
		}
		$this->data['district']  = $this->Customer_model->get_district();
		$this->data['type']  = 'reg';
		$this->load->view('header',$this->data);
		$this->load->view('customer/index');
		$this->load->view('customer/add');
		$this->load->view('footer');
	}
}
