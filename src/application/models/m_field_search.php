<?php
class m_field_search extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get_results($search_term)
    {
        // Use the Active Record class for safer queries.
        $this->db->select('f.id, f.name AS f_name, f.address, f.open_hour, f.close_hour, f.price_min, f.price_max, f.contact, f.img, c.category_id, c.name AS c_name, c.category_desc, c.img AS c_img');
        $this->db->from('field as f');
        $this->db->like('f.name', $search_term);
		$this->db->join('category as c', 'f.category_id = c.category_id');

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
	}
	
}