<?php 
class SignupModel extends CI_Model {
	public function signUp($user) {
		
			// $query = $this->db->query("call insertUser()");
			// 

			// echo $status;
		foreach(array_keys($user) as $i)

			$user[$i]=$this->db->escape($user[$i]);

		$values=implode(',',$user);

	    $query = $this->db->query("call insertUser({$values})");
		if($query == true) {
			$result['ResponseCode'] = '200';
			$result['messge'] = "Data inserted successfully";
			 
		} else {
			$result['ResponseCode']  = '365';
			$result['message'] = "Data Insertion failed";
		}
		return $result;
	} 
	public function emailExist($email) {
		// $this->db->where('vchr_email',$email);
		// $query = $this->db->get('user_details');
		// 	if($query->num_rows() > 0) {
		// 		$response = '404';
		// 	} else {
		// 		$response = '200';
		// 	}
		// 	return $response;
		$result = $this->db->select('vchr_email')
						   ->from('user_details')
						   ->where('vchr_email',$email)
						   ->get();	
				if($result->row('vchr_email')==$email) {
					$response = 404;
				} else {
					$response = 200;
				}
				return $response;

	}
}
?>