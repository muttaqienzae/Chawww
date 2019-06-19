<?php
class m_list_field extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get($id = null){
		if($id != null){
			$this->db->select('f.id, f.name AS f_name, f.address, f.open_hour, f.close_hour, f.price_min, f.price_max, f.contact, f.img, c.category_id, c.name AS c_name, c.category_desc, c.img AS c_img');
			$this->db->from('field as f');
			$this->db->where('f.category_id',$id);
			$this->db->join('category as c', 'f.category_id = c.category_id');
			
			$query = $this->db->get();
			return $query->result_array(); 
		}
		
		$query = $this->db->get('field');
		return $query->result_array();
	}
	
}