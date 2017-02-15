	<?php
	
//Signup Service services

class Signup extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
	public function signup_service() {
		if(!empty($_REQUEST['firstname']) && !empty($_REQUEST['secondname']) && !empty($_REQUEST['email']) && !empty($_REQUEST['password']) /*&& !empty($_REQUEST['prof_pic'])*/ && !empty($_REQUEST['gender'])) {
			//$this->load->model('Signup');
			$status['fname']    = $this->input->get_post('firstname');
			$status['sname']    = $this->input->get_post('secondname');
			$status['email']    = $this->input->get_post('email');
			$status['password'] = $this->input->get_post('password');
			$status['prof_pic'] = $this->input->get_post('prof_pic');
				$year  = $this->input->get_post('year');
				$month = $this->input->get_post('month');
				$day   = $this->input->get_post('date');
			$status['dob']      = $this->input->get_post('dob');
			$status['gender']   = $this->input->get_post('gender');


			//first name
			if(strlen($status['fname']) < 3) {
				//string must contain 3 characters
				$status['fname_error'] = 'firstname must contain atleast 3 characters';
				// echo json_encode($status);
				// return $status;
			} else {
				if(!preg_match("/^[a-zA-Z'-]+$/",$status['fname'])) {
					//alphabets only
					$status['fname_error'] = 'alphabets only';
				} else {
					$status['fname_error'] = null;
				}
			}

		   //second name 
			if(strlen($status['sname'])<3) {
				$status['sname_error	'] = 'second name must contain atleast 3 characters';
			} else if(!preg_match("/^[a-zA-Z'-]+$/",$status['sname'])) {
					//alphabets only
					$status['sname_error'] = 'alphabets only';
				} else {
					$status['sname_error'] = null;
				}
			

			//email 
			if(filter_var($status['email'], FILTER_VALIDATE_EMAIL)) {
				// $status['email_error'] = null;
				$this->load->Model('SignupModel');
				$response = $this->SignupModel->emailExist($status['email']);
				// echo $response;
				if($response==404) {
					$status['email_error']= 'Email already Exist';
				} else if($response==200) {
					$status['email_error'] = null;
				}
				// if($response=='404') {
				// 	$status['email_error'] = "Email already exist";
				// } else if($status=='200') {
				// 	$status['email_error'] = null;
				// }
			} else {
				$status['email_error'] = 'Invalid email';
			}

			//dob 
			// $date = $status['dob']; 
			if ($date="Date" && $month="Month" && $year=="Year") {
				$status['dob_error'] = "invalid date";
			} else {
				$status['dob_error'] = null;
			}

			//password
			if(preg_match("^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$^",$status['password'] )) {
				$status['password_error'] = null;
			} else {
				$status['password_error'] = "Password incorrect";
			}
			
			 if($status['fname_error'] == null && $status['sname_error'] == null && $status['email_error'] == null && $status['dob_error'] == null && $status['password_error'] == null) {
			 		$user['email']    = $status['email'];
			 		$user['password'] = $status['password'];
			 		$user['fname'] 	  = $status['fname'];
					$user['sname']    = $status['sname'];
					$user['dob']      = $status['dob'];
					$user['prof_pic'] = $status['prof_pic'];
					$user['gender']   = $status['gender'];
					$user['status']   = 200;
					$user['token']    = substr(md5(uniqid(rand(), true)), 16, 16);
 				$this->load->Model('SignupModel');
				$result = $this->SignupModel->SignUp($user);

						if($result['ResponseCode']=='200') {
								$this->load->library('email');
			    				$config['protocol']    = 'smtp';
        						$config['smtp_host']    = 'ssl://smtp.gmail.com';
						        $config['smtp_port']    = '465';
						        $config['smtp_timeout'] = '7';
						        $config['smtp_user']    = 'anasbm41796@gmail.com';
						        $config['smtp_pass']    = 'qwerty123!';
						        $config['charset']    = 'utf-8';
						        $config['newline']    = "\r\n";
						        $config['mailtype'] = 'text'; // or html
						        $config['validation'] = TRUE; // bool whether to validate email or not      

						        $this->email->initialize($config);

						        $this->email->from('anasbm41796@gmail.com','BM-41796');
						        $this->email->to($user['email']); 
						        $this->email->subject('Email Test');
						        	
						        $this->email->message('click this link to create your account http://services.trainees.baabtra.com/BM-41796-Services/index.php/Verify/verifyAccount?token='.$user["token"]);  

						        $send = $this->email->send();

						     if($send) {
							  $status['ResponseCode'] = '200';
						     } else {
						     	$status['ResponseCode'] = '404';
						     	$status['email_error'] = "Email Send failed";
						     }
						} else {
							$status['ResponseCode'] = '404';
						}
					} else {
						$status['ResponseCode'] = "404";
					}
			// $status['ResponseCode'] = "404";
		// }  
		

		}
		else {
		 	
			$status['all'] = 'Required';
			$status['ResponseCode'] = "404";
		}
		
		echo json_encode($status);
	}
}

?>