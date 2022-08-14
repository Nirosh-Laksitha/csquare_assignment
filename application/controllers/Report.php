<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	public $data;
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->data['title'] = 'Report';
		$this->data['active'] = 'report';
		$this->load->model('Report_model');

	}

	public function index()
	{
		if (!empty($_POST)){
			$this->form_validation->set_rules('startDate','Start Date','required');
			$this->form_validation->set_rules('endDate','End Date','required');
			if ($this->form_validation->run() == true){
				$this->data['invoice_report']  = $this->Report_model->get_invoice_report($_POST['startDate'],$_POST['endDate']);
			}
		}else{
			$this->data['invoice_report']  = $this->Report_model->get_invoice_report();
		}
		$this->data['type']  = 'inv_report';
		$this->load->view('header',$this->data);
		$this->load->view('report/index');
		$this->load->view('report/invoice_report');
		$this->load->view('footer');
	}

	public function invoice_item_report()
	{
		if (!empty($_POST)){
			$this->form_validation->set_rules('startDate','Start Date','required');
			$this->form_validation->set_rules('endDate','End Date','required');
			if ($this->form_validation->run() == true){
				$this->data['invoice_item_report']  = $this->Report_model->get_invoice_item_report($_POST['startDate'],$_POST['endDate']);
			}
		}else{
			$this->data['invoice_item_report']  = $this->Report_model->get_invoice_item_report();
		}
		$this->data['type']  = 'inv_item_report';
		$this->load->view('header',$this->data);
		$this->load->view('report/index');
		$this->load->view('report/invoice_item_report');
		$this->load->view('footer');
	}

	public function item_report()
	{
		$this->data['item_report']  = $this->Report_model->get_item_report();
		$this->data['type']  = 'item_report';
		$this->load->view('header',$this->data);
		$this->load->view('report/index');
		$this->load->view('report/item_report');
		$this->load->view('footer');
	}
}
