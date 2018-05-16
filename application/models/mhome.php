<?php
class mhome extends CI_Model{
	function get_entries(){
		$query=$this->db->get('maind');
		return $query->result();
	}

	function save_dict_entry(){
		if(!empty(session_id())){
		$data=array(
			'word'=>$this->input->post('word'),
			'meaning'=>$this->input->post('meaning'),
			'pronunciation'=>$this->input->post('pronunciation'),
			'sentence'=>$this->input->post('sentence'),
			);
	$this->db->insert('maind',$data);
	return TRUE;
	}}
	function save_quiz_entry(){
		if(!empty(session_id())){
		$data=array(
			'ques'=>$this->input->post('ques'),
			'option_a'=>$this->input->post('option_a'),
			'option_b'=>$this->input->post('option_b'),
			'option_c'=>$this->input->post('option_c'),
			'answer'=>$this->input->post('answer'),
			'explanation'=>$this->input->post('explanation'),
			);
	$this->db->insert('quiz',$data);
	return TRUE;
	}}
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->select('id,usrn,admin');
		$this->db->where('usrn',$username);
		$this->db->where('pass',$password);
		$query=$this->db->get('users');
		if($query->num_rows()>0){
			$array = $query->row_array();
			$users_name=$array['usrn'];
			$admin=$array['admin'];
			$data = array(
				'username'=>$users_name,
				'admin'=> $admin,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($data);
			return TRUE;

		}else{
			return FALSE;
		}
	}
	function register(){
		$data=array(
			'usrn'=>$this->input->post('username'),
			'pass'=>$this->input->post('password'),
			'FName'=>$this->input->post('fname'),
			'LName'=>$this->input->post('lname'),
			'Email'=>$this->input->post('email')
			);
	$this->db->insert('users',$data);
	$data1=array(
		'username'=>$this->input->post('username'),
		'admin'=> 0,
		'logged_in'=>TRUE		
		);
	$this->session->set_userdata($data1);
	return TRUE;
	}
	function searcher($word){
		$this->db->select('word,meaning,pronunciation,sentence');
		$this->db->where('word',$word);
		$query=$this->db->get('maind');
		return $query->result();
	}
	function exploring($alpha){
		$this->db->select('word,meaning,pronunciation,sentence');
		$this->db->like('word',$alpha,'after');
		$query=$this->db->get('maind');
		return $query->result();
	}
	function randomize(){
		$query=$this->db->order_by('word,meaning,pronunciation,sentence', 'random')->get('maind');
		return($query->result());
		}
	function get_practice(){
		$query=$this->db->order_by('ques,option_a,option_b,option_c,answer', 'random')->get('quiz');
		return($query->result());
	}
	function get_result($iv){
		$this->db->select('ques,option_a,option_b,option_c,answer,explanation');
		$this->db->where('id',$iv);
		$query= $this->db->get('quiz');
		return($query->result());
	}
	function get_test_result($id_vals){
		$final_array=array();
		for($i=0; $i< count($id_vals); $i++){
		$this->db->select('ques,option_a,option_b,option_c,answer,explanation');
		$this->db->where('id',$id_vals[$i]);
		$query= $this->db->get('quiz');
		$final_array=array_merge($final_array,$query->result());}
		return $final_array;
	}
	function search_essays($search,$ch){
		if($ch=='title'){
				$this->db->select('title,author,body');
				$this->db->where('title',$search);
				$query=$this->db->get('essays');
		}else if($ch=='author'){
				$this->db->select('title,author,body');
				$this->db->where('author',$search);
				$query=$this->db->get('essays');
		}else if($ch=='all'){
				$this->db->select('title,author,body');
				$this->db->where('author',$search);
				$this->db->or_where('title',$search);
				$query=$this->db->get('essays');
		}

		if($query->num_rows()>0){
		return $query->result();}
		else{
			$temp="Searched essay not found";
			return $temp;
		}
	}
	function get_essays(){
		$query=$this->db->get('essays');
		return $query->result();

	}
	function save_essay_entry(){
		if(!empty(session_id())){
		$data=array(
			'title'=>$this->input->post('title'),
			'author'=>$this->session->userdata('username'),
			'body'=>$this->input->post('body')
			);
	$this->db->insert('essays',$data);
	return TRUE;
	}
	}
}
?>