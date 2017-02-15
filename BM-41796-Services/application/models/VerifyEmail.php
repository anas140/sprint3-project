<?php 
	class VerifyEmail extends CI_Model {
		public function Verify($token) {
				$result=$this->db->select('status')
					->from('user_details')
					->where('token',$token)
					->get();
					if($result->row('status')==200) {
						//  $result->row()->status;
						$value = array('status'=>1);
						$this->db->where('token',$token);
						$this->db->update('user_details',$value);
						echo $result->row('status');

						 echo "Account Verified";
					} else {
						echo 'account already verified';
					}
					// return $row;
		}
	}
?>