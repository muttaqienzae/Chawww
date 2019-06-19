<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class BFA extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			
			// Load form helper library
			$this->load->helper('form');
			
			// Load form validation library
			$this->load->library('form_validation');
			
			// Load session library
			$this->load->library('session');
			
			// Load database
			$this->load->model('m_login');
		}
		
		public function index(){
			$this->load->view('v_home');
		}
		
		public function home(){
			$this->load->view('v_home');
		}
		
		public function field_search(){
			$this->load->model('m_field_search');
			// Retrieve the posted search term.
			$search_term = $this->input->post('search');
			
			if(isset($search_term)){
				// Use a model to retrieve the results.
				$data['results'] = $this->m_field_search->get_results($search_term);
				$data['search_term'] = $this->input->post('search');
				
				// Pass the results to the view.
				$this->load->view('v_search_field',$data);
			}
			
			else{
				$this->load->view('v_home');
			}
		}
		
		public function list_field(){
			$id = $this->input->get('id');
			
			$this->load->model('m_list_field');
			$data['response'] = $this->m_list_field->get($id);
			$this->load->view('v_list_field', $data);
		}
		
		public function field_detail(){
			//$id = $this->input->get('id');
			$id = $this->uri->segment(3);
			
			$this->load->model('m_field');
			$data['response'] = $this->m_field->pilih($id);
			$this->load->view('v_field_detail', $data);
		}
		
		public function about(){
			$this->load->view('v_about');
		}
		
		
		public function event_detail(){
			$id = $this->uri->segment(3);
			
			$this->load->model('m_event');
			$data['response'] = $this->m_event->pilih($id);
			$this->load->view('v_event_detail', $data);
		}
		
		public function category(){
			$this->load->model('m_category');
			$data['response'] = $this->m_category->get();
			$this->load->view('v_category', $data);
		}
		
		public function contact(){
			$this->load->view('v_contact');
		}
		
		public function submit_contact(){
			$this->load->model('m_feedback');
			$data['response'] = $this->m_feedback->post();
			$this->load->view('v_contact', $data);
		}
		
		// Check for user login process
		public function login() {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			
			if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					$this->load->view('v_admin');
				}
				else{
					$this->load->view('v_login');
				}
			} 
			else {
				$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
				$result = $this->m_login->login($data);
				if ($result == TRUE) {
					$username = $this->input->post('username');
					$result = $this->m_login->read_user_information($username);
					if ($result != false) {
						$session_data = array(
						'username' => $result[0]->username
						);
						// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						$this->adm_add_field();
					}
				} 
				else {
					$data = array('error_message' => 'Invalid Username or Password');
					$this->load->view('v_login', $data);
				}
			}
		}
		
		public function adm_add_field() {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->model('m_category');
				$data['response'] = $this->m_category->get();
				$this->load->view('v_adm_add_field', $data);
			}
			else{
				$this->load->view('v_login');
			} 
		}
		
		public function adm_submit_field(){
			$this->load->model('m_field');
			
			$id = $this->input->post('id');
			$category_id = $this->input->post('category');
			$name = $this->input->post('name');
			$address = $this->input->post('address');
			$open_hour = $this->input->post('open_hour');
			$close_hour = $this->input->post('close_hour');
			$price = $this->input->post('price');
			$contact = $this->input->post('contact');
				
			if($this->m_field->input($id, $category_id, $name, $address, $open_hour, $close_hour, $price, $contact)){
				$data['response']=$this->m_field->get();
				$this->load->view('v_adm_field',$data);
			}
			else{
				$this->load->view('v_adm_add_field');
			}
		}
		
		public function edit_field(){
			$this->load->model('m_field');
			$this->load->model('m_category');
			$id = $this->uri->segment(3);
			$data['response'] = $this->m_field->pilih($id);
			$data['response_c'] = $this->m_category->get();
			$this->load->view('v_edit_field', $data);
		}
		
		public function update_field(){
			$this->load->model('m_field');
			
			$id = $this->input->post('id');
			$category_id = $this->input->post('category');
			$name = $this->input->post('name');
			$address = $this->input->post('address');
			$open_hour = $this->input->post('open_hour');
			$close_hour = $this->input->post('close_hour');
			$price_min = $this->input->post('price_min');
			$price_max = $this->input->post('price_max');
			$contact = $this->input->post('contact');
		
			if($this->m_field->update($id, $category_id, $name, $address, $open_hour, $close_hour, $price_min, $price_max, $contact)){
				$data['response']=$this->m_field->get();
				$this->load->view('v_adm_field', $data);
			}
	}
		
		public function delete_field(){
				$this->load->model('m_field');
				$id = $this->uri->segment(3);
				if($this->m_field->hapus($id)){
					$data['response'] = $this->m_field->get();
					$this->load->view('v_adm_field', $data);
				}
		}
		
		public function adm_field() {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->model('m_field');
				$data['response'] = $this->m_field->get();
				$this->load->view('v_adm_field', $data);
			}
			else{
				$this->load->view('v_login');
			} 
		}
		
		public function adm_add_event() {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->model('m_event');
				$data['response'] = $this->m_event->get();
				$this->load->view('v_adm_add_event', $data);
			}
			else{
				$this->load->view('v_login');
			} 
		}
		
		public function adm_submit_event(){
			$this->load->model('m_event');
			
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$date = $this->input->post('date');
			$price = $this->input->post('price');
			$desc = $this->input->post('desc');
			$contact = $this->input->post('contact');
			$img = $_FILES["img"]["name"];
			$status = $this->input->post('status');
				
			if($this->m_event->input($id, $name, $date, $price, $desc, $contact, $img, $status)){
				$data['response']=$this->m_event->get();
				$this->load->view('v_adm_event',$data);
			}
			else{
				$this->load->view('v_adm_add_event');
			}
		}
		
		public function delete_event(){
				$this->load->model('m_event');
				$id = $this->uri->segment(3);
				if($this->m_event->hapus($id)){
					$data['response'] = $this->m_event->get();
					$this->load->view('v_adm_event', $data);
				}
		}
		
		public function adm_event() {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->model('m_event');
				$data['response'] = $this->m_event->ambil();
				$this->load->view('v_adm_event', $data);
			}
			else{
				$this->load->view('v_login');
			} 
		}
		
		public function edit_category(){
			$this->load->model('m_category');
			$id = $this->uri->segment(3);
			$data['response'] = $this->m_category->pilih($id);
			$this->load->view('v_edit_category', $data);
		}
		
		public function adm_add_category() {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->model('m_category');
				$data['response_c'] = $this->m_category->get();
				$this->load->view('v_adm_add_category', $data);
			}
			else{
				$this->load->view('v_login');
			} 
		}
		
		public function adm_category() {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->model('m_category');
				$data['response'] = $this->m_category->get();
				$this->load->view('v_adm_category', $data);
			}
			else{
				$this->load->view('v_login');
			} 
		}
		
		// Logout
		public function logout() {	
			// Removing session data
			$sess_array = array('username' => '');
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('v_home', $data);
		}
		
	}
?>