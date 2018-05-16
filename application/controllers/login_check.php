<?php
class chat extends CI_controller{
function index(){
			//var_dump($_POST);
  			if($this->input->post('submit')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required|max_length[100]|min_length[5]');
			$this->form_validation->set_rules('password','Password','required|max_length[100]|min_length[5]');
			if($this->form_validation->run()==FALSE){
				$this->login();
			} else{
				
				if($this->mhome->login()){
					$tmst=(int)$this->session->userdata['last_login'];
					$tmz= 'UP45';
					$dls= false;
					$show=gmt_to_local($tmst,$tmz,$dls);
					$message= 'You\'re logged in as '.$this->session->userdata['username'].'. Your last login was at: '. unix_to_human($show);
				} else{
					$message='Email or password invalid';
				}
				redirect('/chat/?message='.urlencode($message));
			}
			}

		 else{
			redirect('/chat');
		}}}
?>