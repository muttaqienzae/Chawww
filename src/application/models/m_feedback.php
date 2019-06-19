<?php
class m_feedback extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function post(){
		if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email']; // this is the sender's Email address
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				$this->db->query("INSERT INTO feedback(name, email, subject, message) VALUES('$name','$email','$subject', '$message')");
			}
	}
	
}