<?php 
class Verify extends CI_Controller {
	public function verifyAccount() {
		 if(isset($_GET['token'])) {
		 	$token = $_GET['token'];
		 	$this->load->Model('VerifyEmail');
		 	$result = $this->VerifyEmail->verify($token); 
		 }

	}
}
?>