<?php
class Upload extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
	public function doUpload() {
		if(isset($_FILES['profile_image']) && isset($_REQUEST['fname'])) {
			
			//$profile = $this->input->get_post('profile_image');
			$fname = $_REQUEST['fname'];
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			echo $config['upload_path'];
			$this->load->library('upload',$config);
			// $this->upload->initialize($config);
			if ( ! $this->upload->do_upload('profile_image'))
                {
                        echo $this->upload->display_errors();
                        // $error = array('error' => $this->upload->display_errors());

                        // $this->load->view('upload_file', $error);
                }
                else
                {
                        echo "uploaded"."<br>";
                        // echo
                        $data = array('upload_data' => $this->upload->data());
                        // print_r($data);
                        echo base_url()."/uploads/".$data['upload_data']['file_name'];
                        // print_r($data['upload_data']['full_path']);
                        // $this->load->view('upload_file', $data);
                }
		}
		else{
			echo "no file selected";
		}
	}
}
?>