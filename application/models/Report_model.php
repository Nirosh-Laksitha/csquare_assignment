<?php

class Report_model extends CI_Model {


	public function get_invoice_report($startDate=null, $endDate=null)
	{
		if($startDate != null and $endDate != null){
			$this->db->where("invoice.date BETWEEN '$startDate' AND '$endDate'");
		}
		$this->db->join('customer', 'customer.id = invoice.customer', 'left');
		$this->db->join('district', 'district.id = customer.district', 'left');
		$query = $this->db->get('invoice');
		return $query->result();
	}

	public function get_invoice_item_report($startDate=null, $endDate=null)
	{
		if($startDate != null and $endDate != null){
			$this->db->where("invoice.date BETWEEN '$startDate' AND '$endDate'");
		}
		$this->db->select("invoice.invoice_no as invoice_no,invoice.date as date,concat(customer.title,'. ',customer.first_name,' ',customer.middle_name,' ',customer.last_name) as customer_name, concat(item.item_name,' - ',item.item_code) as item, item_category.category as category, invoice_master.unit_price as unit_price");
		$this->db->join('item', 'item.id = invoice_master.item_id', 'left');
		$this->db->join('item_category', 'item_category.id = item.item_category', 'left');
		$this->db->join('invoice', 'invoice.invoice_no = invoice_master.invoice_no', 'left');
		$this->db->join('customer', 'customer.id = invoice.customer', 'left');
		$query = $this->db->get('invoice_master');
		return $query->result();
	}

	public function get_item_report()
	{
		$this->db->select("item.item_name as name,item_category.category as category,item_subcategory.sub_category as sub_category,sum(item.quantity) as qty");
		$this->db->group_by("item.item_code");
		$this->db->join('item_subcategory', 'item_subcategory.id = item.item_subcategory', 'left');
		$this->db->join('item_category', 'item_category.id = item.item_category', 'left');
		$query = $this->db->get('item');
		return $query->result();
	}

}
