<?php
class chat extends CI_controller{
	function index(){
		
		$data['results']="";
		$data['results1']="";
		$data['message']="";
		$data['val']="";
		if($this->input->get('message')){
			$data['message']=$this->input->get('message');
		}
		$this->load->view('view_chat.php', $data);
	}
	public function insert(){
		$this->load->view('insert_entry');
	}
	public function login(){
		$data['errors']="";
		$data['val']=0;
		$this->load->view('login_page',$data);
	}
	public function login1(){
	}
	public function logout(){
		$this->session->sess_destroy();
		$data['results']="";
		$data['results1']="";
		$data['message']="You logged out";
		$data['val']="1";
		$this->load->view('view_chat.php', $data);
	}
	public function check_login($v){
			//var_dump($_POST);
  			if($this->input->post('submit')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required|max_length[100]|min_length[5]');
			$this->form_validation->set_rules('password','Password','required|max_length[100]|min_length[5]');
			if($this->form_validation->run()==FALSE){
				$data['errors']=validation_errors();
				$this->load->view('login_page',$data);
			} else{
				if($this->mhome->login()){
					if($v==0){
						$data['val']= "2";
						$data['results']="";
						$data['results1']="";
						$data['message']="You logged in";
						$this->load->view('view_chat.php', $data);}
					else{
						$this->load->view('quiz_test_start_view.php');
					}
				} else{
					$data['val']=$v;
					$data['errors']="Username and Password do not match.";
					$this->load->view('login_page',$data);
				}
				
			}
			}

		 else{
			redirect('/chat');
		}}
		
		public function register_set(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','required|max_length[100]|min_length[5]');
			$this->form_validation->set_rules('password','Password','required|max_length[100]|min_length[5]');
			$this->form_validation->set_rules('confirm-password','Password','required|matches[password]');
			$this->form_validation->set_rules('fname','First Name','required|max_length[100]|min_length[2]');
			$this->form_validation->set_rules('lname','Last Name','required|max_length[100]|min_length[2]');
			$this->form_validation->set_rules('email','Email','required|max_length[100]|min_length[5]');

			if($this->form_validation->run()==FALSE){
				$data['errors']=validation_errors();
				$this->load->view('login_page',$data);
			}else{
				if($this->mhome->register()){
					$message='Registered successfully';
					redirect('/chat/?message='.urlencode($message));
					}
			}
		}
		public function word_search(){
			$data['results1']="";
			$data['results']=$this->mhome->searcher($this->input->post('search'));
			$data['val']='';
			$this->load->view('view_chat.php',$data);
		}
		public function save_entry(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('word','Word','required|max_length[30]');
			$this->form_validation->set_rules('meaning','Meaning','required|max_length[500]');
			$this->form_validation->set_rules('pronunciation','Pronunciation','required|max_length[40]');
			$this->form_validation->set_rules('sentence','Sentence','required|max_length[500]');
			if($this->form_validation->run()==FALSE){
				$data['success']="";
				$data['errors']=validation_errors();
				$this->load->view('insert_entry',$data);
					}else{
				if($this->mhome->save_dict_entry()){
					$data['success']= "Dictionary Entry Was Saved Successfully";
					$data['errors']="";
				}
				else{
					$data['success']="";
					$data['errors']="Dictionary Entry Could Not Be Saved";
				}
				$this->load->view('insert_entry',$data);
			}
	}
	public function save_quiz_entry(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('ques','Question','required|max_length[200]');
			$this->form_validation->set_rules('correct_ans','Explanation','required|max_length[50]');
			$this->form_validation->set_rules('option_a','Option a','required|max_length[50]');
			$this->form_validation->set_rules('option_a','Option a','required|max_length[50]');
			$this->form_validation->set_rules('option_a','Option a','required|max_length[50]');
			$this->form_validation->set_rules('explanation','Explanation','required|max_length[350]');
			if($this->form_validation->run()==FALSE){
				$data['success']="";
				$data['errors']=validation_errors();
				$this->load->view('insert_entry',$data);
					}else{
				if($this->mhome->save_quiz_entry()){
					$data['success']= "Quiz Entry Was Saved Successfully";
					$data['errors']="";
				}
				else{
					$data['success']="";
					$data['errors']="Quiz Entry Could Not Be Saved";
				}
				$this->load->view('insert_entry',$data);
			
		
		}
	}
	public function exploring($alpha){
		$data['results1']="";
		$data['results']=$this->mhome->exploring($alpha);
			$data['val']='';
		$this->load->view('view_chat.php',$data);
	}
	public function random(){
		$data['results1']=$this->mhome->randomize();
		$data['results']="";
		$data['val']='';
		$this->load->view('view_chat.php',$data);
	}
	public function practice(){
		$data['questions']=$this->mhome->get_practice();
		$data['results']="";
		$this->load->view('quiz_practice_view.php',$data);
	}
	public function practice_submit($id_val){
		$data['checks']=array(
			'q1'=> $this->input->post($id_val)
			);
		$data['results']=$this->mhome->get_result($id_val);
		$data['questions']=$this->mhome->get_practice();
		$this->load->view('quiz_practice_view.php',$data);
	}
	public function test_start(){
		if($this->session->userdata('logged_in'))
		$this->load->view('quiz_test_start_view.php');
		else{
		$data['errors']="You must be Logged In to take the Quiz.";
		$data['val']=1;
		$this->load->view('login_page',$data);	
		}
	}
	public function test(){
		$data['questions']=$this->mhome->get_practice();
		$data['results']="";
		$this->load->view('quiz_test_view.php',$data);
	}
	public function test_submit($arr_id){
		$id_vals = explode('_', $arr_id);
		$data['checks']=array();
		for($i=0; $i< count($id_vals); $i++){
			$temp=array(
				'q'.$id_vals[$i]=>$this->input->post($id_vals[$i])
				);
			$data['checks']=array_merge($data['checks'],$temp);
		}
		$data['results']=$this->mhome->get_test_result($id_vals);
		$data['questions']=$this->mhome->get_practice();
		$this->load->view('quiz_test_view.php',$data);
	}
	public function essay_read(){
		$data['results']=$this->mhome->get_essays();
		$data['results1']='';
		$this->load->view("essay_read_view.php",$data);
	}
	public function essay_write(){
		$data['errors']="";
		$this->load->view("essay_write_view.php",$data);
	}
	public function essay_search(){
		$search=$this->input->post('search');
		$ch=$this->input->post('search_param');
		$data['results']='';
		$data['ch']=$ch;
		$data['results1']=$this->mhome->search_essays($search,$ch);
		$this->load->view("essay_read_view.php",$data);
	}
	public function save_essay_entry(){
		$this->load->library('form_validation');
			$this->form_validation->set_rules('title','Title','required|max_length[2000]');
			$this->form_validation->set_rules('body','Body','required|max_length[10000]');
			if($this->form_validation->run()==FALSE){
				$data['success']="";
				$data['errors']=validation_errors();
				$this->load->view('essay_write_view',$data);
					}else{
				if($this->mhome->save_essay_entry()){
					$data['success']= "The Essay Was Saved Successfully";
					$data['errors']="";
				}
				else{
					$data['success']="";
					$data['errors']="The Essay Could Not Be Saved";
				}
				$this->load->view('essay_write_view',$data);
			
		
		}
	}
}

?>