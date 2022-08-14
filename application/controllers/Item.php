<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
	public $data;
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->data['title'] = 'Item';
		$this->data['active'] = 'item';
		$this->load->model('Item_model');

	}

	public function index()
	{
		$this->data['item']  = $this->Item_model->get_item();
		$this->data['type']  = 'view';
		$this->load->view('header',$this->data);
		$this->load->view('item/index');
		$this->load->view('item/view');
		$this->load->view('footer');
	}

	public function store()
	{

		if (!empty($_POST)){
			$this->form_validation->set_rules('item_code','Item code','required|is_unique[item.item_code]');
			$this->form_validation->set_rules('item_name','Item name','required');
			$this->form_validation->set_rules('quantity','Quantity','required|numeric');
			$this->form_validation->set_rules('unit_price','Unit price','required|numeric');
			if ($this->form_validation->run() == true){
				if ($this->Item_model->store()){
					$this->data['status']  = '<div class="alert alert-success">Store Success</div>';
				}else{
					$this->data['status']  = '<div class="alert alert-danger">Something Wrong!</div>';
				}
			}
		}
		$this->data['category']  = $this->Item_model->get_category();
		$this->data['subcategory']  = $this->Item_model->get_subcategory();
		$this->data['type']  = 'reg';
		$this->load->view('header',$this->data);
		$this->load->view('item/index');
		$this->load->view('item/add');
		$this->load->view('footer');
	}
}
