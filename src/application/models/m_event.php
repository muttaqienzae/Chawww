<?php
class m_event extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get_primary(){
		$this->db->where('status', 1);
		return $this->db->get('event');
	}
	
	public function get(){
			$this->db->where('status', 0);
			return $this->db->get('event');
	}
	
	public function pilih($id){
			$this->db->where('id', $id);
			return $this->db->get('event');
	}
	
	public function ambil(){
			return $this->db->get('event');
	}
	
	public function input($id, $name, $date, $price, $desc, $contact, $img, $status){
		$data = array(
				'id' => $id,
				'name' => $name,
				'date' => $date,
				'price' => $price,
				'event_desc' => $desc,
				'contact' => $contact,
				'img' => $img,
				'status' => $status
				);
				
				if ($this->db->insert('event', $data)){
					return TRUE;
				}
	}
	
	public function hapus($id){
		  $this->db->where('id', $id);
		  if($this->db->delete('event')){
			  redirect('BFA/adm_event', 'refresh');
		  }
	}
}