<?php
class chat1 extends CI_controller
{
	public function index()
	{
if($this->input->get('message'))
	{
		$data['message'] = $this->input->get('message');
	}
	else{
	$data['message'] = 'welcome';}
	$data['entries'] = $this->mhome1->get_entries();
	$data['li']=$this->mhome1->getl();
	$data['co']=$this->mhome1->getc();
	$this->load->view('view_chat1.php',$data);
}
public function login()
{
$this->load->view('login_page');
}
public function check_login()
{
	//var_dump($_POST);
	if($this->input->post('submit'))
	{
$this->load->library('form_validation');
$this->form_validation->set_rules('username','Username','required|max_length[100]|min_length[5]');
$this->form_validation->set_rules('password','Password','required|max_length[100]|min_length[5]');
	      if($this->form_validation->run()==FALSE)
	    {
		$this->login();
		
	    }
	      else
	      {
	      	if($this->mhome1->login())
	      	{
                $a = 'UP45';
                $b = false;
	      		$s = (int)$this->session->userdata['last_login'];
	      		$p = gmt_to_local($s,$a,$b);
	      		
	      		$message = 'you are logged in. Last login:'.unix_to_human($p);
	      		
	      	}
	      	else
	      	{
	      		$message = 'username or password is invalid';
	      		
	      	}
	      	redirect('/chat1/?message='.urlencode($message));

	      }

	}
	else
	{
		redirect('/chat1');
	}
	
}
public function logout()
{
 $this->session->sess_destroy();
 $message = 'you are logged out';
 redirect('/chat1/?message='.urlencode($message));
}
}
?>