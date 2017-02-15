<!-- signup values passing to the services and fetching the result -->
<!-- client  page app/controller/Signup -->
<?php 
class Signup extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
	
	public function signup_val() {
		
		$user['firstname'] = $this->input->get_post('firstname');
		$user['secondname'] = $this->input->get_post('secondname');
		$user['email'] = $this->input->get_post('email');
		$user['password'] = $this->input->get_post('password');
		// $user['prof_pic'] = $this->input->get_post('profpic');
			//date of birth
			$user['date'] = $this->input->get_post('dob-day');
			$user['month'] = $this->input->get_post('dob-month');
			$user['year'] = $this->input->get_post('dob-year');
		$user['dob']=$user['year']."-".$user['month']."-".$user['date'];
		$user['gender'] = $this->input->get_post('gender');

		 //upload image
			$config['upload_path'] = 'application/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload',$config);
			if ( ! $this->upload->do_upload('profpic'))
                {
                    $user['upload_error'] = $this->upload->display_errors();
                    // $user['upload_error'];
                } 
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $user['prof_pic'] =  base_url()."application/uploads/".$data['upload_data']['file_name'];
				}
       	     	$url = "http://services.trainees.baabtra.com/BM-41796-Services/index.php/Signup/signup_service";

						$options =  array(
							'http' =>array(
								'header' => "Content-type: application/x-www-form-urlencoded\r\n",
								'method' => 'POST',
								'content' => http_build_query($user),
					));
						$context = stream_context_create($options);
						$result =  file_get_contents($url,false,$context);

						$json = json_decode($result,TRUE);  //decoding the json value into php array format.

						print_r($json);

		
						if($json['ResponseCode']==404) {

							$useragent=$_SERVER['HTTP_USER_AGENT'];

							if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
								$this->load->view('signup_responsive',$json);
							} else {
								$this->load->view("home",$json); 
							}
			    		}  elseif($json['ResponseCode']==200) {
			    			
			    				// $this->load->library('email');
			    				// $config['protocol']    = 'smtp';
        			// 			$config['smtp_host']    = 'ssl://smtp.gmail.com';
						     //    $config['smtp_port']    = '465';
						     //    $config['smtp_timeout'] = '7';
						     //    $config['smtp_user']    = 'anasbm41796@gmail.com';
						     //    $config['smtp_pass']    = 'asd123..';
						     //    $config['charset']    = 'utf-8';
						     //    $config['newline']    = "\r\n";
						     //    $config['mailtype'] = 'text'; // or html
						     //    $config['validation'] = TRUE; // bool whether to validate email or not      

						     //    $this->email->initialize($config);

						     //    $this->email->from('anasbm41796@gmail.com','BM-41796');
						     //    $this->email->to($json['email']); 

						     //    $this->email->subject('Email Test');

						     //    $this->email->message('Testing the email class.');  

						     //    $send = $this->email->send();
						     //    if($send == true) {
			    				
			    					$this->load->view('verifyEmail',$json);
								} else {
									$this->load->view('home',$json['email']='email send faild');
								}


			    		// }
	}

}
?>