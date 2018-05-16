<?php
class basic extends CI_controller{
function index(){
	$data['disp']="TEST";
	$data['disp1']="TEST1";
	$this->load->view('test',$data);
}	
}
?>