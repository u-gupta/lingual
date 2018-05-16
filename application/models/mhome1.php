<?php
class mhome1 extends CI_Model
{
	function get_entries()
	{
        $query = $this->db->get('blog'); 
        return $query->result();

	}
	function getl()
	{
		$query = $this->db->get('like_tb');
		return $query->result();
	}
	function getc()
	{
		$query = $this->db->get('com_tb');
		return $query->result();
	}
	function like_add(){
		if($this->input->post('lik'))
		{
			$data = array('like_dump'=>87);
			$this->db->insert('like_tb',$data);
	    redirect('/chat1');
	    	}
	    }
	    function comment_update(){
		if($this->input->post('comnt')){
			if(!empty(session_id())){
			$data=array(
			'commentor'=>$this->session->userdata['username'],
			'matter'=>$this->input->post('comment_field')
			);} else{
				$data=array(
			'commentor'=>'Anonymous',
			'matter'=>$this->input->post('comment_field')
			);
			}
			$this->db->insert('com_tb',$data);
			redirect('/chat1');
			return TRUE;
		}
	}


	function save_blog_entry()
	{
        $data = array(
		'title' => $this->input->post('title'),
		'content' => $this->input->post('content')

		); 
		$this->db->insert('blog',$data);
		return TRUE;

	}
	function login()
	{
		$username = $this->input->post('username');
		$password =md5($this->input->post('password'));
		$this->db->select('id,username,last_login');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		if($query->num_rows()>0)
		{
			$array = $query->row_array();
			$users_name = $array['username'];
			$lastlogin = $array['last_login'];
              $data = array(
              	'username' => $users_name,
              	'last_login' => $lastlogin,
              	'logged_in' => TRUE
              	);
              $this->session->set_userdata($data);
              $data = array('last_login'=>time());
              $this->db->where('id',$array['id']);
              $this->db->update('users', $data);

         return TRUE;
		}
         else
         {
         	return FALSE;

         }
	}
	
}