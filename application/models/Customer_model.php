<?php

class Customer_model extends CI_Model {

	public function get_customer()
	{
		$this->db->join('district', 'district.id = customer.district', 'left');
		$query = $this->db->get('customer');
		return $query->result();
	}

	public function get_district()
	{
		$this->db->where('active','yes');
		$query = $this->db->get('district');
		return $query->result();
	}

	public function register()
	{
		$data['title'] = $_POST['title'];
		$data['first_name'] = $_POST['first_name'];
		$data['middle_name'] = $_POST['middle_name'];
		$data['last_name'] = $_POST['last_name'];
		$data['contact_no'] = $_POST['number'];
		$data['district'] = $_POST['district'];
		if($this->db->insert('customer', $data)){
			return true;
		}
		return false;
	}


}
