<?php

class Item_model extends CI_Model {

	public function get_category()
	{
		$query = $this->db->get('item_category');
		return $query->result();
	}

	public function get_subcategory()
	{
		$query = $this->db->get('item_subcategory');
		return $query->result();
	}

	public function get_item()
	{
		$this->db->join('item_subcategory', 'item_subcategory.id = item.item_subcategory', 'left');
		$this->db->join('item_category', 'item_category.id = item.item_category', 'left');
		$query = $this->db->get('item');
		return $query->result();
	}

	public function store()
	{
		$data['item_code'] = $_POST['item_code'];
		$data['item_name'] = $_POST['item_name'];
		$data['item_category'] = $_POST['category'];
		$data['item_subcategory'] = $_POST['sub_category'];
		$data['quantity'] = $_POST['quantity'];
		$data['unit_price'] = $_POST['unit_price'];
		if($this->db->insert('item', $data)){
			return true;
		}
		return false;
	}

//	public function update_entry()
//	{
//		$this->title    = $_POST['title'];
//		$this->content  = $_POST['content'];
//		$this->date     = time();
//
//		$this->db->update('entries', $this, array('id' => $_POST['id']));
//	}

}
